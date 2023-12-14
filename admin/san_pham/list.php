<h1>Danh sách Sản phẩm</h1>
<form action="index.php?act=listsp" method="post">
    <div class="searchfilter">
        <div class="search">
            <input type="text" name="key" id="">
            <input style="width: 80px; padding: unset; padding: 0 5px;" class="btnkey" type="submit" name="timkiem" value="Tìm kiếm">
            <!-- <button type="submit" name="timkiem"><i class='bx bx-search'></i></button> -->
        </div>
        <div class="search">
            <select name="category_id" id="">
                <?php foreach($all_dm as $dm) : ?>
                <option value="<?=$dm['id']?>"><?=$dm['name']?></option>
                <?php endforeach ?>
                <!-- <option value="2">Đang xử lý</option>
                <option value="3">Đã xử lý</option>
                <option value="4">Đơn bị hủy</option> -->
            </select>
            <input style="width: 70px; padding: unset; padding: 0 5px;" class="btnkey" type="submit" name="loc" value="Lọc">
            <!-- <button type="submit" name="loc"><i class='bx bx-filter-alt'></i></button> -->
        </div>
    </div>
</form>
<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <th>HÌNH ẢNH</th>
        <th>ID SẢN PHẨM</th>
        <th>TÊN SẢN PHẨM</th>
        <th>GIÁ TIỀN</th>
        <th>GIÁ CŨ</th>
        <th>SỐ LƯỢNG</th>
        <th>MÔ TẢ</th>
        <th>CATEGORY_ID</th>
        <th>TÙY BIẾN</th>
    </tr>
    <?php foreach ($listsp as $sp) : ?>
        <tr>
            <td><img style="width: 50px;" src="../images/<?= $sp['image'] ?>"></td>
            <td><?= $sp['id'] ?></td>
            <td><?= $sp['name'] ?></td>
            <td><?= $sp['price'] ?></td>
            <td><?= $sp['price_new'] ?></td>
            <td><?= $sp['quantity'] ?></td>
            <td><?= $sp['description']?></td>
            <td><?= $sp['category_id'] ?></td>
            <td><a href="index.php?act=editsp&&id=<?= $sp['id'] ?>"><i class='bx bx-edit'></i></a> -
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=deletesp&&id=<?= $sp['id'] ?>"><i class='bx bx-trash'></i></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>