<h1>DANH SÁCH KHÁCH HÀNG</h1>
<form action="index.php?act=listkh" method="post">
    <div class="searchfilter">
        <div class="search">
            <input type="text" name="key" id="">
            <input style="width: 80px; padding: unset; padding: 0 5px;" class="btnkey" type="submit" name="timkiem" value="Tìm kiếm">
            <!-- <button type="submit" name="timkiem"><i class='bx bx-search'></i></button> -->
        </div>
        <div class="search">
            <select name="vai_tro" id="">
                <option value="user">Người dùng</option>
                <option value="admin">Người quản trị</option>
                <!-- <option value="3">Đã xử lý</option>
                <option value="4">Đơn bị hủy</option> -->
            </select>
            <input style="width: 70px; padding: unset; padding: 0 5px;" class="btnkey" type="submit" name="loc" value="Lọc">
            <!-- <button type="submit" name="loc"><i class='bx bx-filter-alt'></i></button> -->
        </div>
    </div>
</form>
<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <th>ID KHÁCH HÀNG</th>
        <th>TÀI KHOẢN KHÁCH HÀNG</th>
        <th>MẬT KHẨU</th>
        <th>VAI TRÒ</th>
        <th>TÙY BIẾN</th>
    </tr>
    <?php foreach ($listkh as $kh) : ?>
        <tr>
            <td><?= $kh['id'] ?></td>
            <td><?= $kh['username'] ?></td>
            <td><?= $kh['password'] ?></td>
            <td><?= $kh['role'] ?></td>
            <td><a href="index.php?act=editkh&&id=<?= $kh['id'] ?>"><i class='bx bx-edit'></i></a> -
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=deletekh&&id=<?= $kh['id'] ?>"><i class='bx bx-trash'></i></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>