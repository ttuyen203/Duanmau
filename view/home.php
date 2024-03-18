<div class="row mb">
    <div class="box-trai mr">
        <div class="row">
            <div class="banner">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 4</div>
                        <img src="view/images/img_banner1.png">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 4</div>
                        <img src="view/images/img_banner2.png">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 4</div>
                        <img src="view/images/img_banner3.png">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">4 / 4</div>
                        <img src="view/images/img_banner4.png">
                    </div>

                </div>
                <br>

                <div style="text-align:center" class="all-dot">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                </div>
            </div>
        </div>
        <!-- Hàng sp  -->
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
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
                    <form action="index.php?act=addtocart" method="post" class="form-addtocart">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="name" value="' . $name . '">
                        <input type="hidden" name="img" value="' . $img . '">
                        <input type="hidden" name="price" value="' . $price . '">
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
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