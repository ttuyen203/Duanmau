<div class="row mb">
    <div class="box-title">TÀI KHOẢN</div>
    <div class="box-content">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            ?>
            <div class="layout-dangnhap">
                <h2>Hello,
                    "
                    <?= $user ?>"
                </h2>
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=edit_taikhoan">Cập nhật thông tin</a></li>
                <?php
                if ($role == 1) {
                    ?>
                    <li><a href="admin/index.php">Truy cập trang admin</a></li>
                <?php } ?>
                <li><a href="index.php?act=thoat">Thoát</a></li>
            </div>
            <?php
        } else {
            ?>
            <div class="layout-dangnhap">
                <form action="index.php?act=dangnhap" method="post">
                    Tên đăng nhập
                    <input type="text" name="user" class="form-user"><br><br>
                    Mật khẩu
                    <input type="password" name="pass" class="form-pass"><br><br>
                    <div class="save-acc">
                        <input type="checkbox" name=""> Ghi nhớ tài khoản?<br>
                    </div>
                    <input type="submit" name="dangnhap" value="Đăng nhập" class="btn-submit">
                </form>
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=dangky">Đăng kí thành viên</a>
                </li>
            </div>
        <?php } ?>
    </div>
</div>

<div class="row mb">
    <div class="box-title">DANH MỤC</div>
    <div class="box-content2">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
            }
            ?>
        </ul>
    </div>

    <!-- Box tìm kiếm -->
    <div class="box-footer">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" class="box-search">
            <input type="submit" name="timkiem" value="Tìm kiếm" class="box-submit">
        </form>
    </div>
</div>
<div class="row mb">
    <div class="box-title">TOP 5 YÊU THÍCH</div>
    <div class="box-content">
        <?php
        foreach ($dstop5 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img; //Đúng đường dẫn hình
            echo '<div class="box-sp-top5">
                        <img src="' . $img . '" alt="" class="img-sp-top5">
                        <div class="name-sp-top5"><a href="' . $linksp . '">
                                ' . $name . '
                            </a></div>
                    </div>';
        }
        ?>
    </div>
</div>