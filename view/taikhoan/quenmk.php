<div class="row mb">
    <div class="box-trai mr">
        <div class="box-title">
            QUÊN MẬT KHẨU
        </div>
        <div class="box-content mb">
            <form action="index.php?act=quenmk" method="post" class="form-dang-ky">
                <label for="">Email:</label><br>
                <input type="email" name="email"><br>

                <input type="submit" value="Gửi" name="guiemail">
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