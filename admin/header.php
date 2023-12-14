<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị admin</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../view/css/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
    <div style="width: 100%; height: 50px; text-align: center;">
        <h1><img src="../images/Logo team 13/logo_2_2.png" alt="" style="width: 200px;"></h1>
    </div>
    <section class="admin-content">
        <div class="admin-content-left">
            <ul>
                <li><a href="index.php">Thống kê</a></li>
                <li><a href="index.php?act=listdm">Danh mục</a></li>
                <ul>
                    <li><a href="index.php?act=adddm">Thêm danh mục</a></li>
                    <li><a href="index.php?act=listdm">danh sách danh mục</a></li>
                </ul>
                <li><a href="index.php?act=listbienthe">Biến thể</a></li>
                <ul>
                    <li><a href="index.php?act=addbienthe">Thêm biến thể</a></li>
                    <li><a href="index.php?act=listbienthe">Danh sách biến thể</a></li>
                </ul>
                <li><a href="index.php?act=listsp">Sản phẩm</a></li>
                <ul>
                    <li><a href="index.php?act=addsp">Thêm sản phẩm</a></li>
                    <li><a href="index.php?act=listsp">danh sách sản phẩm</a></li>
                </ul>
                <li><a href="#">Tài khoản</a></li>
                <ul>
                    <li><a href="index.php?act=listkh">danh sách tài khoản</a></li>
                </ul>
                <li><a href="#">Đơn hàng</a></li>
                <ul>
                    <li><a href="index.php?act=listdonhang">Quản lí đơn hàng</a></li>
                </ul>
                <li><a href="../index.php">Trang chủ khách hàng</a></li>
                <li><a href="../index.php?act=thoat">Đăng xuất</a></li>

            </ul>
        </div>
        <div class="admin-content-right">
            <div class="admin-content-right-category">
                <div class="thongbao" style="font-size: 25px; color: var(--main-color); font-weight: bold;margin-bottom: 10px;" >
                    <?php if (isset($_GET['thong_bao'])) {
                        echo $_GET['thong_bao'];
                    } ?>
                </div>
                <div class="loi" style="font-size: 25px; color: red; font-weight: bold;margin-bottom: 10px;">
                    <?php if (isset($_GET['err'])) {
                        echo $_GET['err'];
                    } ?>
                </div>