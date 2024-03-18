<?php
session_start();
// Thêm thư viện
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/cart.php";
include "view/header.php";
include "global.php";

//Giỏ hàng
if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall();
$dstop5 = loadall_sanpham_top5();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            //Box search
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            include "view/sanpham.php";
            break;

        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp); //Extract để lấy id danh mục sau khi load sản phẩm chi tiết
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;

        case 'gioithieu':
            include "view/gioithieu.php";
            break;

        case 'lienhe':
            include "view/lienhe.php";
            break;

        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng kí thành công!";
            }
            include "view/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header("location: index.php");
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng đăng kí tài khoản!";
                }
            }
            include "view/taikhoan/dangky.php";
            break;

        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];

                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                //Cập nhật lại $_SESSION['user']
                $_SESSION['user'] = checkuser($user, $pass);
                header("location: index.php?act=edit_taikhoan");
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];

                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email này không tồn tại!";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;

        case 'thoat':
            session_unset();
            header("location: index.php");
            break;

        case 'addtocart':
            //Add thông tin từ form add to cart đến session
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * $price;

                $spadd = [$id, $name, $img, $price, $soluong, $ttien]; //Tạo mảng

                //add mảng con vào mảng mycart
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;

        case 'delcart':
            if (isset($_GET['idcart'])) {
                //array_slice()  Xóa từ mảng   |   Vị trí xóa   | Xóa bao nhiêu phần tử 
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header("location: index.php?act=viewcart");
            break;

        case 'viewcart':
            include "view/cart/viewcart.php";
            break;

        case 'bill':
            include "view/cart/bill.php";
            break;

        case 'billconfirm':
            // if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
            //     $user = $_POST['user'];
            //     $email = $_POST['email'];
            //     $address = $_POST['address'];
            //     $tel = $_POST['tel'];
            //     $pttt = $_POST['pttt'];
            //     $ngaydathang = date('h:i:a d/m/Y');
            //     $tongdonhang = tongdonhang(); //model/cart.php

            //     $idbill = insert_bill($user, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);

            //     //Insert Into cart: Lấy dữ liệu $session['mycart'] & idbill

            //     foreach ($_SESSION['mycart'] as $cart) {
            //         insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
            //     }
            // }
            // $bill = loadone_bill($idbill);
            // $billct = loadone_cart($idbill);
            include "view/cart/billconfirm.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>