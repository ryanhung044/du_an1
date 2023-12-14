<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style_trangchu_giahuy.css">
    <title>Trang đăng nhập</title>
    <style>
        .box_title{
          margin-right: 5px;
        }
        input{
            box-shadow: 0, 1.4, 0, 1.4;
            border-radius: 8px;
            background-color: #FFF;
            border: 1px solid #ccc;
            outline: none;
        }
         .button{
            width: 40%;
            height: 35px;
            color: #fff;
            background-color: #1976D2;
        }
    </style>
</head>

<body>
    <div class="container-xxl">
        <div class="background_color">

            <!----------------------- Main Container -------------------------->
            <div class="container d-flex justify-content-center align-items-center min-vh-100">
                <!----------------------- Login Container -------------------------->
                <div class="row border rounded-5 p-3 bg-white shadow box-area">
                    <!--------------------------- Left Box ----------------------------->
                    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box Thanh_menu_Ngang">
                        <div class="featured-image mb-3">
                            <img src="Logo team 13/logo_1_1.png" class="img-fluid" style="width: 250px;">
                        </div>
                    </div>
                    <!-------------------- ------ Right Box ---------------------------->
                    <div class="col-md-6 right-box">
                        <div class="row align-items-center">
                            <div class="header-text mb-4">
                                <div class="col mb-4 float_right margin_top_10px"><a href="index.php"><button style="background-color: #1976D2; color: white; font-weight: bold; border: none; border-radius: 5px; float: right; margin-top: 20px;">Home</button></a></div>

                                <div class="box_title">
                                    <h2>QUÊN MẬT KHẨU</h2></div>
                                <div class="row box_content form_tk">
                                    <form action="index.php?act=quenmk" method="post">
                                        <div class="row mb10">
                                            Email:
                                            <input type="email" name="email">
                                        </div> <br>

                                    <input class="button" type="submit" value="GỬI" name="guiemail">
                                    <input class="button" type="reset" value="NHẬP LẠI">
                                    </form>
                                    <h2 class="thongbao">
                                        <?php
                                        if (isset($_GET['thongbao']) && ($_GET['thongbao'] != "")) {
                                            echo $_GET['thongbao'];
                                        }
                                        ?>
                                    </h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>
