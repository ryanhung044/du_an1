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

    table {
        margin-top: 20px;
    }
</style>
<?php
if (isset($_SESSION['username']) && (is_array($_SESSION['username']))) {
    extract($_SESSION['username']);
    // echo "<pre>";
    // var_dump($_SESSION['username'] );
    // die;
}
?>
<div class="content" style="min-height: 600px;">
    <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
        <div class="row">
            <label for="name">Họ và tên</label>
            <input type="text" required name="name" id="" placeholder="Nhập họ và tên" value="<?= $name ?>">
            <input type="hidden" name="id" id="" value="<?= $id ?>">
        </div>
        <!-- <div class="row">
            <label for="hinh">Hình ảnh</label>
            <input type="file" name="hinh">
            <input type="hidden" name="hinh" value="<?= $hinh ?>">
            <img width="70" src="../view/images/<?= $hinh ?>" alt="">
        </div> -->
        <div class="row">
            <label for="username">Tên đăng nhập</label>
            <input type="text" required name="username" id="" placeholder="Nhập tên đăng nhập" value="<?= $username ?>">
        </div>
        <div class="row">
            <label for="name">Email</label>
            <input type="email" required name="email" id="" placeholder="Nhập email" value="<?= $email ?>">
        </div>
        <div class="row">
            <label for="phone">Số điện thoại</label>
            <input type="text" required name="phone" id="" placeholder="Nhập số điện thoại" value="<?= $phone ?>">
        </div>
        <div class="row">
            <label for="address">Nhập địa chỉ</label>
            <input type="text" required name="address" id="" placeholder="Nhập địa chỉ" value="<?= $address ?>">
        </div>
        <input type="submit" class="btn" name="update" value="Cập nhật">
    </form>

</div>