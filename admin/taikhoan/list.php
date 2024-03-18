<div class="row">
    <div class="row title">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row mb20 form-content">
        <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Address</th>
                <th>Tel</th>
                <th>Role</th>
                <th></th>
            </tr>
            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $xoatk = "index.php?act=xoatk&id=".$id;
                $suatk = "index.php?act=suatk&id=".$id;
                echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a>
                        <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
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