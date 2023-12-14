<h1>Chi tiết đơn hàng</h1>

<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <td colspan="4" style="color: #185c9f;">
            <h3>THÔNG TIN NGƯỜI NHẬN</h3>
        </td>
    </tr>
    <tr>
        <th>TÊN NGƯỜI NHẬN</th>
        <th>ĐỊA CHỈ</th>
        <th>SỐ ĐIỆN THOẠI </th>
        <th>NGÀY MUA</th>
    </tr>

    <tr>
        <td><?= $chitietdon[0]['name'] ?></td>
        <td><?= $chitietdon[0]['address'] ?></td>
        <td><?= $chitietdon[0]['phone'] ?> </td>
        <td><?= date($chitietdon[0]['date_order'])  ?></td>
    </tr>


</table>

<table border="1px solid black" style="width: 100%;text-align: center; margin-top: 50px;">
    <tr>
        <td colspan="6" style="color: #185c9f;">
            <h3>THÔNG TIN ĐƠN HÀNG</h3>
        </td>
    </tr>

    <tr>
        <th>ID SẢN PHẨM</th>
        <th>HÌNH ẢNH</th>
        <th>TÊN SẢN PHẨM</th>
        <th>SỐ LƯỢNG</th>
        <th>GIÁ TIỀN</th>
        <th>THÀNH TIỀN</th>
    </tr>

    <?php
    $ttien = 0;
    $total = 0;
    foreach ($chitietdon as $ctdon) : ?>
        <?php
        $ttien = $ctdon['quantity'] * $ctdon['price'];
        $total += $ttien;
        ?>

        <tr>
            <td><?= $ctdon['id'] ?></td>
            <td><img style="width: 100px;" src="images/<?= $ctdon['image'] ?>"> </td>
            <td><?= $ctdon['product_name'] ?></td>
            <td><?= $ctdon['quantity'] ?></td>
            <td><?= $ctdon['price'] ?></td>
            <td><?= $ttien ?></td>
        </tr>

    <?php endforeach ?>
    <tr>
        <td colspan="5"></td>
        <td>Tổng tiền: <?= $total ?></td>
    </tr>

</table>

