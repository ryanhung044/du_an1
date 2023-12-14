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
    <form action="index.php?act=dmk" method="post">
        <div class=" row">
            <label for="name">Nhập mật khẩu hiện tại</label>
            <input type="password" required name="password" id="" placeholder="Nhập mật khẩu hiện tại">
            <input type="hidden" name="id" id="" value="<?= $id ?>">
        </div>

        <div class="row">
            <label for="password_n">Nhập mật khẩu mới</label>
            <input type="password" required name="password_n" id="" placeholder="Nhập mật khẩu mới">
        </div>
        <div class="row">
            <label for="r_password_n">Nhập lại mật khẩu mới</label>
            <input type="password" required name="r_password_n" id="" placeholder="Nhập lại mật khẩu mới">
        </div>
        <input type="submit" class="btn" name="gui" value="Đổi mật khẩu">
    </form>

</div>