<div class="row mb">
    <div class="box-trai mr">
        <div class="box-title">
            ĐĂNG KÍ THÀNH VIÊN
        </div>
        <div class="box-content mb">
            <form action="index.php?act=dangky" method="post" class="form-dang-ky">
                <label for="">Email:</label><br>
                <input type="email" name="email"><br>
                <label for="">User:</label><br>
                <input type="text" name="user"><br>
                <label for="">Pass:</label><br>
                <input type="password" name="pass"><br>

                <input type="submit" value="Đăng ký" name="dangky">
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