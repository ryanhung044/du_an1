<h1>Cập nhật tài khoản</h1>
<form action="index.php?act=updatekh" method="post">
    <input type="hidden" name="id" value="<?= $one_tk['id'] ?>">
    <input required type="text" name="username" id="" placeholder="Nhập tên tài khoản" value="<?= $one_tk['username'] ?>">
    <input required type="email" name="email" id="" placeholder="Nhập email" value="<?= $one_tk['email'] ?>">
    <select name="role" id="">
        <option value="<?= $one_tk['role'] ?>"><?= $one_tk['role'] ?></option>
        <option value="admin">admin</option>
        <option value="user">User</option>
    </select>
    <input type="submit" class="btn" name="update_kh" value="Cập nhật">
</form>