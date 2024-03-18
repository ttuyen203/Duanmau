<div class="row mb">
    <div class="box-trai mr">
        <div class="box-title">
            CẬP NHẬT TÀI KHOẢN
        </div>
        <div class="box-content mb">
            <?php
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=edit_taikhoan" method="post" class="form-dang-ky">
                <label for="">Email:</label><br>
                <input type="email" name="email" value="<?=$email?>"><br>
                <label for="">User:</label><br>
                <input type="text" name="user" value="<?=$user?>"><br>
                <label for="">Pass:</label><br>
                <input type="password" name="pass" value="<?=$pass?>"><br>
                <label for="">Address:</label><br>
                <input type="text" name="address" value="<?=$address?>"><br>
                <label for="">Tel:</label><br>
                <input type="text" name="tel" value="<?=$tel?>"><br>

                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" value="Cập nhật" name="capnhat">
            </form>
            <div class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="box-phai ">
        <?php include "view/boxright.php"; ?>
    </div>
</div>