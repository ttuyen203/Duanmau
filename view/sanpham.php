<!-- Trang lọc sản phảm theo danh mục (iddm) -->
<div class="row mb">
    <div class="box-trai mr">
        <div class="box-title mb">
        SẢN PHẨM  
        </div>
            <div class="box-content-item">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $hinh = $img_path . $img;
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    if (($i == 2) || ($i == 5)) {
                        $mr = "mr";
                    } else {
                        $mr = "";
                    }
                    echo '<div class="box-sp ' . $mr . ' ">
                    <a href="' . $linksp . '">
                        <div class="img-sp">
                        <img src="' . $hinh . '" alt="">
                    </div></a>
                        <div class="name-sp">
                            <a href="' . $linksp . '">' . $name . '</a>
                        </div>
                        <div class="price-sp">
                            <p>$' . $price . '</p>
                        </div>
                    </div>';
                    $i += 1;
                }
                ?>
            </div>
    </div>
    <div class="box-phai ">
        <?php include "boxright.php"; ?>
    </div>
</div>