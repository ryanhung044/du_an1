<h1>Cập nhật danh mục</h1>
<form action="index.php?act=updatedm" method="post">
    <input type="hidden" name="id" value="<?= $one_dm_id['id'] ?>">
    <input required type="text" name="name" id="" placeholder="Nhập tên danh mục" value="<?= $one_dm_id['name'] ?>">
    <input type="submit" class="btn" name="update_dm" value="Cập nhật">
</form>