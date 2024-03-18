<div class="row mb">
    <div class="box-trai mr">
        <div class="row ">
            <?php
            extract($onesp);
            ?>
            <div class="box-title">
                <?= $name ?>
            </div>
            <div class="box-content mb">
                <?php
                extract($onesp);
                $img = $img_path . $img;
                echo '<div class="img-sp mb">
            <img src=' . $img . '><br>
            </div>';
                echo '<p>Giá sản phẩm: $' . $price . '</p>';
                echo '<div class="mota-sp">' . $mota . '</div>';
                ?>
            </div>
        </div>

        <!-- Thêm thư viện Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?= $id ?>});
            });
        </script>
        <div class="row" id="binhluan"></div>

        <div class="row mb">
            <div class="box-title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box-content">
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="box-phai ">
        <?php include "boxright.php"; ?>
    </div>
</div>