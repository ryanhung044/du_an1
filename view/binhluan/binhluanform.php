<?php
session_start();
include "../../controller/pdo.php";
include "../../controller/binhluan.php";
$product_id = $_REQUEST['product_id'];
$dsbl = loadall_binhluan($product_id);
// echo "<pre>";
// var_dump($dsbl);die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css_v/style.css"> -->
</head>

<body>
    <div class="row mb">
        <!-- <div class="box_title">BÌNH LUẬN</div> -->
        <div class="box_content2 binhluan">
            <?php foreach ($dsbl as $bl) : ?>
                <table>
                    <tr>
                        <td><?= $bl['noi_dung'] ?></td>
                        <td><?= $bl['username'] ?></td>
                        <td><?= $bl['date'] ?></td>
                    </tr>
                </table>
            <?php endforeach ?>
        </div>
        
        <?php if (isset($_SESSION['username'])) {
            extract($_SESSION['username']);
        ?>
            <div  class="box_footer sear_box">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="product_id" value="<?= $product_id ?>"><br>
                    Nội dung bình luận: <br>
                    <input required type="text" name="noi_dung" style="width: 400px;
                height: 80px; outline:none;border-radius: 8px;"><br><br>
                    <input type="submit" name="guibinhluan" value="GỬI BÌNH LUẬN">
                </form>
            </div>
        <?php
        } else {
            // include "../../index.php";
            echo 'Vui lòng đăng nhập <a href="signin_gia_huy.php">Tại đây</a> để bình luận !';
        }
        ?>
    </div>

    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noi_dung = $_POST['noi_dung'];
        $product_id = $_POST['product_id'];
        $user_id = $_SESSION['username']['id'];
        $date = date('d/m/y');
        insert_binhluan($noi_dung, $date, $product_id, $user_id);
        header("location: " . $_SERVER['HTTP_REFERER']);
    }

    ?>

</body>

</html>