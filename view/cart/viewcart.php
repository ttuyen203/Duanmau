<div class="row mb">
    <div class="box-trai mr">
        <div class="row ">
            <div class="box-title">
                GIỎ HÀNG
            </div>
            <div class="row box-content form-content">
                <table>
                    <?php
                        viewcart(1);  //===> model/cart.php
                    ?>
                </table>
            </div>
        </div>

        <div class="row bill">
            <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC ĐẶT HÀNG" class="button"></a>
            <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG" class="button"></a>
        </div>
    </div>
    <div class="box-phai ">
        <?php include "view/boxright.php"; ?>
    </div>
</div>