<style>
    form>.row {
        margin: 10px;
        border: 1px solid #ccc;
        overflow: hidden;
    }

    input {
        margin: 5px 15px;
        padding: 5px;

    }
    table{
        margin-top: 20px;
    }
</style>
<div class="content" style="min-height: 600px;">
    <form action="index.php?act=tracuudonhang" method="post">
        <div class="row">
            <label for="id">Mã đơn hàng</label>
            <input type="text" required name="id" id="" placeholder="Nhập mã order">
        </div>
        <div class="row">
            <label for="phone">Số điện thoại</label>
            <input type="text" required name="phone" id="" placeholder="Nhập số diện thoại">
        </div>
        <input type="submit" class="btn" name="tracuu" value="Tra cứu">
    </form>



<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <th>MÃ ĐƠN HÀNG</th>
        <th>TÊN NGƯỜI NHẬN</th>
        <th>ĐỊA CHỈ</th>
        <th>ĐIỆN THOẠI </th>
        <th>NGÀY MUA</th>
        <th>TRẠNG THÁI</th>
        <th>HÌNH THỨC</th>
        <th>OPTION</th>
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
                    echo "Đã hủy đơn";
                } ?></td>
            <td><?= $donhang['hinh_thuc'] ?></td>
            <td>
                <?php if ($donhang['trang_thai'] == 3 or $donhang['trang_thai'] == 4) { ?>
                    <a href="index.php?act=chitietdon&id=<?= $donhang['id'] ?>">xem</i></a>
                <?php } else { ?>
                    <a href="index.php?act=chitietdon&id=<?= $donhang['id'] ?>">xem</i></a> -
                    <a onclick="return confirm('Bạn chắc chắn muốn hủy đơn?')" href="index.php?act=updatedonhang&id=<?= $donhang['id'] ?>&trang_thai=4">Hủy đơn</i></a>
                <?php } ?>
            </td>
        </tr>
    <?php endforeach ?>
</table>
</div>