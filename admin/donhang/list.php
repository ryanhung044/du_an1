<h1>Danh sách đơn hàng</h1>
<form action="index.php?act=listdonhang" method="post">
    <div class="searchfilter">
        <div class="search">
            <input type="text" name="key" id="">
            <input style="width: 80px; padding: unset; padding: 0 5px;" class="btnkey" type="submit" name="timkiem" value="Tìm kiếm">
            <!-- <button type="submit" name="timkiem"><i class='bx bx-search'></i></button> -->
        </div>
        <div class="search">
            <select name="trang_thai" id="">
                <option value="1">Chưa xử lý</option>
                <option value="2">Đang xử lý</option>
                <option value="3">Đã xử lý</option>
                <option value="4">Đơn bị hủy</option>
            </select>
            <input style="width: 70px; padding: unset; padding: 0 5px;" class="btnkey" type="submit" name="loc" value="Lọc">
            <!-- <button type="submit" name="loc"><i class='bx bx-filter-alt'></i></button> -->
        </div>
    </div>
</form>
<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <th>ID</th>
        <th>TÊN NGƯỜI NHẬN</th>
        <th>ĐỊA CHỈ</th>
        <th>ĐIỆN THOẠI </th>
        <th>NGÀY MUA</th>
        <th>TRẠNG THÁI</th>
        <th>IN ĐƠN</th>
    </tr>
    <?php foreach ($listdonhang as $donhang) : ?>
        <tr>
            <td><?= $donhang['id'] ?></td>
            <td><?= $donhang['name'] ?></td>
            <!-- <td><img style="width: 50px;" src="../images/<?= $donhang['image'] ?>"></td> -->
            <td><?= $donhang['address'] ?></td>
            <td><?= $donhang['phone'] ?></td>
            <td><?= date($donhang['date_order'])  ?></td>
            <td><?php if ($donhang['trang_thai'] == 1) {
                    echo "Chưa xử lí";
                } elseif ($donhang['trang_thai'] == 2) {
                    echo "Đang xử lí";
                } elseif ($donhang['trang_thai'] == 3) {
                    echo "Đã xử lí";
                } elseif ($donhang['trang_thai'] == 4) {
                    echo "Đơn bị hủy";
                }  ?></td>
            <td><?php if ($donhang['trang_thai'] == 3 OR $donhang['trang_thai'] == 4 ) { ?>
                    <a href="index.php?act=chitietdon&id=<?= $donhang['id'] ?>">xem</i></a>
                <?php } else { ?>
                    <a href="index.php?act=editdonhang&&id=<?= $donhang['id'] ?>"><i class='bx bx-edit'></i></a> -
                    <a href="index.php?act=chitietdon&id=<?= $donhang['id'] ?>">xem</i></a> 
                <?php } ?>
            </td>
        </tr>
    <?php endforeach ?>
</table>