<h1>Danh sách danh mục</h1>
<form action="index.php?act=listdm" method="post">
    <div class="searchfilter">
        <div class="search">
            <input type="text" name="key" id="">
            <input style="width: 80px; padding: unset; padding: 0 5px;" class="btnkey" type="submit" name="timkiem" value="Tìm kiếm">
            <!-- <button type="submit" name="timkiem"><i class='bx bx-search'></i></button> -->
        </div>
        <!-- <div class="search">
            <select name="trang_thai" id="">
                <option value="1">Chưa xử lý</option>
                <option value="2">Đang xử lý</option>
                <option value="3">Đã xử lý</option>
                <option value="4">Đơn bị hủy</option>
            </select>
            <input style="width: 70px; padding: unset; padding: 0 5px;" class="btnkey" type="submit" name="loc" value="Lọc">
        </div> -->
    </div>
</form>
<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <th>ID DANH MỤC</th>
        <th>TÊN DANH MỤC</th>
        <th>TÙY BIẾN</th>
    </tr>
    <?php foreach ($list_dm as $dm) : ?>
        <tr>
            <td><?= $dm['id'] ?></td>
            <td><?= $dm['name'] ?></td>
            <td><a href="index.php?act=editdm&&id=<?= $dm['id'] ?>"><i class='bx bx-edit'></i></a> -
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=deletedm&&id=<?= $dm['id'] ?>"><i class='bx bx-trash'></i></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<div id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        const data = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'],

            <?php

            $dmjoinsp = dmjoinsp();
            // var_dump($allthongke);die;
            foreach ($dmjoinsp as $sp) { ?>['<?php echo $sp['dmname']; ?>', <?php echo $sp['countsp']; ?>],
            <?php } ?>
        ]);
        // ['Italy', 54.8],
        // ['France', 48.6],
        // ['Spain', 44.4],
        // ['USA', 23.9],
        // ['Argentina', 14.5]


        const options = {
            title: 'Thống kê số sản phẩm trong danh mục'
        };

        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script>