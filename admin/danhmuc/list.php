<div class="row">
    <div class="row title">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row mb20 form-content">
        <table>
            <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th></th>
            </tr>
            <?php
            foreach ($listdm as $danhmuc) {
                extract($danhmuc);
                $xoadm = "index.php?act=xoadm&id=".$id;
                $suadm = "index.php?act=suadm&id=".$id;
                echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                        <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
            }
            ?>
        </table>
    </div>
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn">
    <a href="index.php?act=adddm"><button type="button">Nhập thêm</button></a>
</div>