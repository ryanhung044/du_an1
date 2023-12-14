<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="view/css/style_trangchu_giahuy.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="view/css/style1.css"> -->
    <link rel="stylesheet" href="view/css/style1.css">

    <title>Document</title>
</head>

<body>
    <!-- 1. Trang chủ - Trần Quốc Gia Huy -->

    <!-- Thanh ngang màu xám chứa hotline, liên hệ, tra cứu đơn hàng, giới thiệu -->
    <div class="color_header_menu_1">
        <div class="container-xxl" style="height: 25px;">
            <div class="row">
                <div class="col-sm-7" style="margin-top: 3.5px;">
                    <div class="color_blue">Hotline: 0383 980 923 - 0906 997 704 </div>
                </div>
                <div class="col-sm-2" style="margin-top: 3.5px;">
                    <div class="color_blue"><a href="index.php?act=tracuudonhang" style="text-decoration: none;">Tra cứu đơn hàng</a></div>
                </div>
                <div class="col-sm-1" style="margin-top: 3.5px;">
                    <div class="color_blue"><a href="#" style="text-decoration: none;">Giới thiệu</a></div>
                </div>
                <div class="col-sm-1" style="margin-top: 3.5px;">
                    <div class="color_blue"><a href="#" style="text-decoration: none;">Liên hệ</a></div>
                </div>
            </div>
        </div>
    </div>
    <!--Hết thanh ngang màu xám chứa hotline, liên hệ, tra cứu đơn hàng, giới thiệu -->

    <!-- Thanh logo, tìm kiếm, giỏ hàng, số điện thoại -->
    <div class="container-xxl">
        <div class="row">
            <div class="col-sm-3 margin_20px"><a href="index.php"><img src="images\Logo team 13\logo_2_2.png" alt="menu_logo" style="width: 160px;"></a></div>
            <div class="col-sm-3 margin_top_50px">
                <div class="search">
                    <div class="search_content">
                        <form action="index.php?act=timkiem" >
                            <input type="text" name="key" placeholder="Search">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                            <!-- <button id="search_button"><i class="fa-solid fa-magnifying-glass"></i></button> -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="col" style="text-align: center; margin-top: 40px;"><input type="button" value="Card" style="border: none; background-color: #1976D2; padding: 10px; border-radius: 10px; color: white; font-weight: bold;"></div> -->
            <div class="col" style="text-align: center; margin-top: 40px;"><i class='bx bx-shopping-bag' id="cart-icon" style="font-size: 3.5rem;"></i></div>
            <!-- <div class="col margin_top_40px"><i class='bx bx-shopping-bag' id="cart-icon" style="font-size: 3.5rem; margin-left: 100px;" ></i></div> -->
            <?php
            if (isset($_SESSION['username'])) {
                extract($_SESSION['username']);
                echo  "<div class='col' style='margin-top: 20px;'>
                <div class='dropdown'>
                <div href='#' id='imageDropdown' data-toggle='dropdown'>
                    Xin chào: $username
                </div>
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                    <div style='width: 250px; height: 350px;'>
                       
                        <div class='dropdown-item' href='#' style='text-align: center; font-weight: bold; text-decoration: none; color: black;'>
                        <div><a href='index.php?act=lichsudon'>Lịch sử đơn hàng</a></div>
                        <div><a href='index.php?act=updatetk'>Cập nhật tài khoản</a></div>
                        <div><a href='index.php?act=dmk'>Đổi mật khẩu</a></div>
                        </div>
                        </div>
                        </div>
                        
                    </div>
                    </div>";
                echo "<div class='col' style='text-align: center; margin-top: 40px;'><a href='index.php?act=thoat'><input type='button' value='Đăng Xuất' style='border: none; background-color: #1976D2; padding: 10px; border-radius: 10px; color: white; font-weight: bold;'></a></div>";
            } else {
            ?>
                <div class="col" style="text-align: center; margin-top: 40px;"><a href="signin.php"><input type="button" value="Đăng nhập" style="border: none; background-color: #1976D2; padding: 10px; border-radius: 10px; color: white; font-weight: bold;"></a></div>
                <div class="col-sm-1" style="text-align: center; margin-top: 40px;"><a href="signup.php"><input type="button" value="Đăng ký" style="border: none; background-color: #1976D2; padding: 10px; border-radius: 10px; color: white; font-weight: bold;"></a></div>
            <?php } ?>
        </div>
    </div>
    </div>
    <!-- Hết thanh logo, tìm kiếm, giỏ hàng, số điện thoại -->
    <!-- Thanh menu ngang -->
    <div class="Thanh_menu_Ngang" style="height: 50px;">
        <div class="container-xxl">
            <div class="row">
                <div class="col">

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle margin_top_2-5px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: white; color: black; font-weight: bold; width: 250px;">
                            TẤT CẢ DANH MỤC
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-top: 5px; width: 400px;">
                            <?php foreach ($list_dm as $list) : ?>
                                <a class="dropdown-item" href="index.php?act=loaisp&id=<?= $list['id'] ?>"><?= $list['name'] ?></a>
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
                <div class="col"><a href="#">
                        <div class="color_white bold margin_top_15px">SẢN PHẨM BÁN CHẠY</div>
                    </a></div>
                <div class="col"><a href="#">
                        <div class="color_white bold margin_top_15px">CẨM NANG MUA SẮM</div>
                    </a></div>
                <div class="col"><a href="#">
                        <div class="color_white bold margin_top_15px">HỖ TRỢ KỸ THUẬT</div>
                    </a></div>
                <div class="col"><a href="#">
                        <div class="color_white bold margin_top_15px">DỊCH VỤ FLYCAM</div>
                    </a></div>
                <div class="col"><a href="#">
                        <div class="color_white bold margin_top_15px">TIN TỨC</div>
                    </a></div>
            </div>
        </div>
    </div>
    <!-- Hết thanh menu ngang và menu -->


    <!--Hết banner -->

    <!-- Hết Trang chủ - Trần Quốc Gia Huy -->


    <!-- 2. Trang sản phẩm - Nguyễn Văn Kiên -->
    <!-- Hết Trang sản phẩm - Nguyễn Văn Kiên -->



    <!-- 1. Giỏ hàng - Trần Huy Hưng -->
    <div class="cart">
        <h2 class="cart-title">Your car</h2>
        <form action="index.php?act=submit" method="post">
            <div class="cart-content">
                <?php
                $total = 0;
                if (isset($pro)) { ?>
                    <?php foreach ($pro as $cart) : ?>
                        <div class="cart-box">
                            <img src="images/<?= $cart['image'] ?>" alt="" class="cart-img">
                            <div class="detail-box">
                                <div class="cart-product-title"><?= $cart['name'] ?></div>
                                <div class="cart-price">$<?= number_format($cart['price'], 0, ",", ".") ?> VND </div>
                                <input type="number" min="0" value="<?= $_SESSION['mycart'][$cart['id']] ?>" class="cart-quantity" name="quantity[<?= $cart['id'] ?>]">
                                <!-- xóa -->
                            </div>
                            <a href="index.php?act=deletecart&id=<?= $cart['id'] ?>"><i class='bx bxs-trash-alt cart-remove'></i></a>
                        </div>
                        <?php $total += $cart['price'] * $_SESSION['mycart'][$cart['id']]; ?>
                    <?php endforeach ?>
                <?php } else {
                    echo "Không có sản phẩm trong giỏ hàng";
                } ?>
            </div>
            <!-- tổng -->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price price">$<?= number_format($total, 0, ",", ".") ?> VND</div>
            </div>
            <!-- mua -->
            <input type="submit" name="update_click" class="btn-buy" value="Cập nhật">
            <input type="submit" name="order_click" class="btn-buy" value="Mua ngay">
            <!-- <button type="button" value="Buy now">BUY NOW</button> -->
            <!-- Thoát -->
            <i class='bx bx-x' id="close-cart"></i>
        </form>


    </div>
    </div>
    </header>
    <!-- ends header -->