<div class="row">
    <div class="row title">
        <h1>THÊM MỚI LOẠI HÀNG</h1>
    </div>
    <div class="row form-content">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb20">
                <div class="mb10">Mã loại</div>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb20">
                <div class="mb10">Tên loại</div>
                <input type="text" name="tenloai">
            </div>
            <div class="row mb20">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><button type="button">Danh sách</button></a>
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