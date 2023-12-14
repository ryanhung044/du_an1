    <!-- banner -->
    <div class="container-xxl"><br>
        <div class="Chinh_anh_banner">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://jola.vn/cdn/860/ProductCategory/vRCkgAVXg/photo-2023-10-02-12-03-37.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://jola.vn/cdn/860/ProductCategory/Isn06dsQh/utfuf.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://jola.vn/cdn/860/ProductCategory/J-UoWm9NV/mnvbmfg.jpg   " alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div><br>
    <!-- Shop -->
    <section class="shop container">
        <h2 class="section-title">Sản phẩm bán chạy</h2>

        <div class="shop-content">
            <?php foreach ($allsp as $sp) : ?>
                <div class="product-box">
                    <a href="index.php?act=ctsp&id=<?= $sp['id'] ?>">
                      <img style="height: 250px;width: 250px;" src="images/<?= $sp['image'] ?>" class="product-img">
                        <h2 class="product-title"><?= $sp['name'] ?></h2>
                        <span class="price"><?= number_format($sp['price'],0,',','.')  ?></span>
                        <p class="price-new"><?= number_format( $sp['price_new'],0,',','.' )?></p>
                    </a>
                    <div class="box-btn">
                    <form action="index.php?act=buynow" method="post">
                            <input type="hidden" value="1" name="quantity[<?= $sp['id'] ?>]">
                            <input type="submit" name="buynow" value="Mua ngay">
                        </form>
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" value="1" name="quantity[<?= $sp['id'] ?>]">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
    <!-- Ends Shop -->