<h1>Cập nhật sản phẩm</h1>
<form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
    <div class="row">
        <input type="hidden" name="id" value="<?= $one_sp['id'] ?>">
        <input required type="text" name="name" id="" placeholder="Nhập tên sản phẩm *" value="<?= $one_sp['name'] ?>">
    </div>
    <div class="row">
        <input type="hidden" name="image" value="<?= $one_sp['image']?>">
        <input  type="file" name="image">
        <img style="width: 70px;" src="../images/<?= $one_sp['image']?>" width="70px">
    </div>
    <div class="row">
        <input required type="number" name="price" id="" placeholder="Nhập giá sản phẩm *" value="<?= $one_sp['price'] ?>">
    </div>
    <div class="row">
        <input type="number" name="price_new" id="" placeholder="Nhập giá khuyến mại sản phẩm" value="<?= $one_sp['price_new'] ?>">
    </div>
    <div class="row">
        <input required type="number" name="quantity" id="" placeholder="Nhập số lượng sản phẩm *" value="<?= $one_sp['quantity'] ?>">
    </div>
    <div class="row">
        <textarea class="boder" name="description" id="" cols="30" rows="10" placeholder="Nhập mô tả sản phẩm"><?= $one_sp['description'] ?>
</textarea>
    </div>
    <div class="row">
        <select name="category_id" id="">
            <?php foreach ($all_dm as $dm) : ?>
                <option value="<?= $dm['id'] ?>" <?= $dm['id'] = $one_sp['id'] ? 'selected' : ''?> >
                    <?= $dm['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
    <input type="submit" class="btn" name="add_sp" value="Cập nhật">
</form>