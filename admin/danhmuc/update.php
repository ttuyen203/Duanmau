<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<div class="row">
            <div class="row header">
                <h1>CẬP NHẬT LOẠI HÀNG</h1>
            </div>
            <div class="row form-content">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb20">
                        <div class="mb10">Mã loại</div>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb20">
                        <div class="mb10">Tên loại</div>
                        <input type="text" name="tenloai" value="<?=$name?>">
                    </div>
                    <div class="row mb20">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id; ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"><button type="button">Danh sách</button></a>
                    </div>
                    <?php
                    if (isset($thongbao) && $thongbao != "") echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>