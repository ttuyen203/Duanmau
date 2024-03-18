<div class="row">
    <div class="row title">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row mb20 form-content">
        <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nội dung</th>
                <th>ID User</th>
                <th>ID Product</th>
                <th>Date</th>
                <th></th>
            </tr>
            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $xoabl = "index.php?act=xoabl&id=".$id;
                echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
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