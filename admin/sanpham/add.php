<div class="row">
    <div class="row title">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row form-content">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb20">
                <div class="mb10">Danh mục</div>
                <select name="iddm" id="">
                    <?php
                    foreach ($listdm as $danhmuc) {
                        extract($danhmuc);
                        echo "<option value='" . $id . "'>$name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="row mb20">
                <div class="mb10">Tên sản phẩm</div>
                <input type="text" name="tensp">
            </div>
            <div class="row mb20">
                <div class="mb10">Giá sản phẩm</div>
                <input type="text" name="giasp">
            </div>
            <div class="row mb20">
                <div class="mb10">Hình sản phẩm</div>
                <input type="file" name="hinh">
            </div>
            <div class="row mb20">
                <div class="mb10">Mô tả</div>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb20">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><button type="button">Danh sách</button></a>
            </div>
            <div class="thongbao">
                <?php
                if (isset($thongbao) && $thongbao != "")
                    echo $thongbao;
                ?>
            </div>
        </form>
    </div>
</div>
</div>