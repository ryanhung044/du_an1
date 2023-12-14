<h1>Thêm sản phẩm</h1>
<form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    <div class="row">
        <input required type="text" name="name" id="" placeholder="Nhập tên sản phẩm *">
    </div>
    <div class="row">
        <input required type="file" name="image">
    </div>
    <div class="row">
        <input required type="number" name="price" id="" placeholder="Nhập giá sản phẩm *">
    </div>
    <div class="row">
        <input type="number" name="price_new" id="" placeholder="Nhập giá khuyến mại sản phẩm">
    </div>
    <div class="row">
        <input required type="number" name="quantity" id="" placeholder="Nhập số lượng sản phẩm *">
    </div>
    <div class="row">
        <textarea class="boder" name="description" id="" cols="30" rows="10" placeholder="Nhập mô tả sản phẩm">

    </textarea>
    </div>
    <div class="row">
        <select name="category_id" id="">
            <?php foreach ($all_dm as $dm) : ?>
                <option value="<?= $dm['id'] ?>">
                    <?= $dm['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
    <input type="submit" class="btn" name="add_sp" value="Thêm mới">
</form>