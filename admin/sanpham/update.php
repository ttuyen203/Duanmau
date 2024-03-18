<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "Không có hình ảnh";
}
?>

<div class="row">
    <div class="row header">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row form-content">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb20">
                <select name="iddm" id="" style="height: 20px; border-radius: 5px; margin-right: 5px; margin-left: 5px">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdm as $danhmuc) {
                        if($iddm ==  $danhmuc['id']) $s = "selected"; else $s = "";
                        echo '<option value="'. $danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb20">
                <div class="mb10">Tên sản phẩm</div>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row mb20">
                <div class="mb10">Giá sản phẩm</div>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb20">
                <div class="mb10">Hình sản phẩm</div>
                <input type="file" name="hinh">
                <?= $hinh ?>
            </div>
            <div class="row mb20">
                <div class="mb10">Mô tả</div>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="row mb20">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><button type="button">Danh sách</button></a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao != "")
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>