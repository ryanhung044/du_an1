<h1>Danh sách biến thể</h1>

<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <th>ID </th>
        <th>TÊN </th>
        <!-- <th>PRODUCT_ID</th> -->
        <th>TÙY BIẾN</th>
    </tr>
    <?php foreach ($listbt as $bt) : ?>
        <tr>
            <td><?= $bt['id'] ?></td>
            <td><?= $bt['name'] ?></td>
            <!-- <td><?= $bt['product_id'] ?></td> -->
            <td><a href="index.php?act=editbt&&id=<?= $bt['id'] ?>"><i class='bx bx-edit'></i></a> -
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=deletebt&&id=<?= $bt['id'] ?>"><i class='bx bx-trash'></i></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>




