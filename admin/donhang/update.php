<h1>Cập nhật trạng thái đơn hàng</h1>
<form action="index.php?act=updatedonhang" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $chitietdon['id'] ?>">
    <div class="row">
        <select name="trang_thai" id="">
            <!--  -->
            <option value="1" <?= 1 == $chitietdon['trang_thai'] ? 'selected' : '' ?>>Chưa xử lí</option>
            <option value="2" <?= 2 == $chitietdon['trang_thai'] ? 'selected' : '' ?>>Đang xử lí</option>
            <option value="3" <?= 3 == $chitietdon['trang_thai'] ? 'selected' : '' ?>>Đã xử lí</option>
            <option value="4" <?= 3 == $chitietdon['trang_thai'] ? 'selected' : '' ?>>Hủy đơn</option>
        </select>
    </div>
    <input type="submit" class="btn" name="updatedonhang" value="Cập nhật">
</form>