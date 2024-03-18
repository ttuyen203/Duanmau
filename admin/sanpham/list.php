<div class="row">
    <div class="row title mb">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw" placeholder="Search" style="height: 20px"> <!-- keyword -->
        <select name="iddm" id="" style="height: 20px; border-radius: 5px; margin-right: 5px; margin-left: 5px">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdm as $danhmuc) {
                extract($danhmuc);
                echo "<option value='" . $id . "'>$name</option>";
            }
            ?>
        </select>
        <input type="submit" name="listok" value="Search" style="height: 20px">
    </form>
    <div class="row mb20 form-content">
        <table>
            <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên sp</th>
                <th>Hình sp</th>
                <th>Giá</th>
                <th>Lượt xem</th>
                <th></th>
            </tr>
            <?php
            if (isset($listsanpham)) {
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "Không có hình ảnh";
                    }
                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $price . '</td>
                        <td>' . $luotxem . '</td>
                        <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                        <a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                    </tr>';
                }
            }
            ?>
        </table>
    </div>
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn">
    <a href="index.php?act=addsp"><button type="button">Nhập thêm</button></a>
</div>