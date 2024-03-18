<div class="row mb">
    <div class="box-trai mr">
        <form action="index.php?act=billconfirm" method="post">
            <div class="row mb">
                <div class="box-title">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row box-content billform">
                    <table>
                        <?php
                            if (isset($_SESSION['user'])) {
                                $user = $_SESSION['user']['user'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            } else {
                                $user = "";
                                $address = "";
                                $email = "";
                                $tel = "";
                            }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="user" value="<?=$user?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?=$address?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?=$email?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" value="<?=$tel?>"></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row mb">
                <div class="box-title">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row box-content">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt" >Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="pttt" >Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row mb">
                <div class="box-title">THÔNG TIN GIỎ HÀNG</div>
                <div class="row box-content form-content">
                    <table>
                        <?php
                            viewcart(0);
                        ?>
                    </table>
                </div>
            </div>

            <div class="row mb">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang" class="button">
            </div>
        </form>
    </div>
    <div class="box-phai ">
        <?php include "view/boxright.php"; ?>
    </div>
</div>