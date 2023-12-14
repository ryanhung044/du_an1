<!-- Shop -->
<section class="shop container">
    <h2 class="section-title">Sản phẩm cùng loại</h2>

    <div class="shop-content">
        <?php foreach ($loaisp as $sp) : ?>
            <div class="product-box">
                <a href="index.php?act=ctsp&id=<?= $sp['id'] ?>">
                    <img style="height: 250px;width: 250px;" src="images/<?= $sp['image'] ?>" class="product-img">
                    <h2 class="product-title"><?= $sp['name'] ?></h2>
                    <span class="price"><?= $sp['price'] ?></span>
                    <p class="price-new"><?= $sp['price_new'] ?></p>
                </a>
                <div class="box-btn">
                    <button>Mua ngay</button>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
<!-- Ends Shop -->