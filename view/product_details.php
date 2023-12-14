<?php
if (is_array($listctsp) && isset($listctsp)) {
    extract($listctsp);
    // print_r($listctsp);die;
}
if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    // print_r($listctsp);die;
    $nameDm = oneDM($_GET['id']);
}
include "./headercts.php";
// $dsbl = loadall_binhluan();
?>

<body>
    <form action="index.php?act=buynow" method="post">

        <div class="container">
            <div class="hea"></div>
            <div class="m-jc">
                <div class="m-js ">
                    <a href="index.php">Trang chủ</a>
                    <span>/</span>
                    <a href="index.php?act=loaisp&id=<?= $nameDm['id'] ?>" name="name"><?= $nameDm['name'] ?></a>
                    <span>/</span>
                    <a href="#"><?= $name ?></a>

                </div>
            </div>
            <div class="fullscren">
                <div class="row" sty>

                    <!-- ================================================ -->
                    <div class="slideshow">
                        <div class="main box-sadow">
                            <img src="images/<?= $image ?>" class="img_feature">
                            <div class="control prev"><i class="fa-solid fa-circle-chevron-left"></i></div>
                            <div class="control next"><i class="fa-solid fa-circle-chevron-right"></i></div>
                        </div>
                        <div class="thongsokythuat">
                            <div class="thongso">
                                <div class="manhing mr20 i"><i class="fa-solid fa-mobile "></i>6.7 inch, OLED, Super Retina XDR, 2796 x 1290 Pixels</div>
                                <div class="camera mr20"><i class="fa-solid fa-camera"></i> 48.0 MP + 12.0 MP + 12.0 MP</div>
                                <div class="camera_truoc mr20"><i class="fa-solid fa-camera-rotate"></i>12.0 MP</div>
                                <div class="chip mr20"><i class="fa-solid fa-microchip"></i> Apple A16 Bionic</div>
                                <div class="bonhotrong mr20"><i class="fa-solid fa-memory"></i>128 GB</div>
                            </div>
                        </div>
                    </div>



                    <!-- ================================================= -->

                    <div class="products_content">
                        <div class="tendg_sp">
                            <h1><?= $name ?></h1>
                            <div class="icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <a href="#" style="color: #FF9800;">1 Đánh giá</a>
                                <span>|</span>
                                <a href="#" style="color: #03A9F4;">87 Đã bán</a>
                            </div>
                        </div>
                        <div class="line"></div>

                        <?php
                        if (isset($price_new) && $price_new != 0) { ?>
                            <div class='giasp'>
                                <div class='giakm_sp'> <?= number_format($price, 0, ',', '.') ?> đ</div>
                                <div class='giathat_sp'> <?= number_format($price_new, 0, ',', '.') ?> đ</div>
                            </div>
                        <?php } else { ?>
                            <div class='giasp'>
                                <div class='giakm_sp'><?= number_format($price, 0, ',', '.') ?></div>
                            </div>
                        <?php } ?>
                        <div class="dungluong_s">
                            <?php foreach ($listbt as $bt) : ?>
                                <div class="GB ">
                                    <span><input type="radio" name="dungluong" value="<?= $bt['id'] ?>"> <?= $bt['name'] ?> </span>
                                    <!-- <div class="gia">27.190.000 đ </div> -->
                                </div>
                                <div class="lineX"></div>
                            <?php endforeach ?>
                            <!-- <div class="GB">
                                <span><input type="radio" name="dungluong"> 256Gb </span>
                                <div class="gia">27.190.000 đ</div>
                            </div>
                            <div class="lineX"></div>
                            <div class="GB">
                                <span><input type="radio" name="dungluong"> 512Gb </span>
                                <div class="gia">27.190.000 đ</div>
                            </div>
                            <div class="lineX"></div>
                            <div class="GB">
                                <span><input type="radio" name="dungluong"> 1T </span>
                                <div class="gia">27.190.000 đ</div>
                            </div> -->
                        </div>

                        <div class="mau_bonho">
                            <div class="bonho_sp">
                                <div class="list_img ">
                                    <div><img src="images/<?= $image ?>" alt=""></div>
                                </div> <br>
                                <div class="mau">Xám</div>
                            </div>
                            <!-- <div class="bonho_sp">
                                <div class="list_img ">
                                    <div><img src="./image/anh2.jpg" alt=""></div>
                                </div>
                                <div class="mau">Tím</div>
                            </div>
                            <div class="bonho_sp">
                                <div class="list_img ">
                                    <div><img src="./image/anh3.jpg" alt=""></div>
                                </div>
                                <div class="mau">Xanh</div>
                            </div> -->
                        </div>

                        <div class="khuyenmai_sp mr20">
                            <div class="Uudai ">
                                <div class="Uudai1 mr10">
                                    <h4>Chọn 1 trong 2 khuyến mãi sau </h4>
                                    <div class="line"></div> <br>
                                    <div class="input">
                                        <input type="radio" name="km1"> - Giảm ngay 2,800,000đ khi mua màu Tím ap dụng đến 20/11 <br>
                                        <input type="radio" name="km1" id="sp_km1">

                                        <label for="sp_km1" class="">
                                            - Giảm ngay 800,000đ dụng đến 20/11 <br>
                                            -Trả góp 0%
                                        </label>
                                    </div>
                                </div>
                                <div class="Uudai2">
                                    <h4>Ưu đãi thêm</h4>
                                    <div class="line"></div>
                                    <br>
                                    <p><i class="fa-solid fa-circle-check"></i> Thu cũ đổi mới Chợ Tốt (thu đến 75% giá trị máy
                                        cũ) <a href="#">Xem chi tiết</a></p>
                                    <p><i class="fa-solid fa-circle-check"></i> Ví Da Magasade giảm đến 30% khi mua iphone </p>
                                    <p><i class="fa-solid fa-circle-check"></i> Sặc dự phòng Magsafe giảm ngay 30% khi mua kèm
                                        iphone <a href="#">Xem chi tiết</a></p>
                                </div>
                            </div>
                        </div>


                        <input type="number" value="1" min="1" name="quantity[<?= $id ?>]" id="">
                        <!-- <div class="line"></div> -->
                        <div class="button_gh">
                            <div class="button1 box-sadow">
                                <input class="button2 box-sadow ri" type="submit" name="buynow" value="Mua ngay">
                            </div>
                        </div>

                    </div>
                    <form>
                </div>
            </div>

            <div class="content_sp">
                <div id="content">
                    <div class="Nd_sp">
                        <h4>Đặc điểm nổi bật của Iphone 14 Pro Max</h4>
                        <div class="slide_show_sp"></div>
                        <div class="DGCT">
                            <h4>Đánh giá chi tiết iPhone 14 Pro Max</h4>
                            <p style="text-align: justify;font-size: 16px;color: black;margin: 11px 0;">iPhone 14 Pro Max đem đến những trải nghiệm không thể tìm thấy trên mọi thế hệ iPhone trước đó với màu Tím
                                Deep Purple sang trọng, camera 48MP lần đầu xuất hiện, chip A16 Bionic và màn hình “viên thuốc” Dynamic
                                Island linh hoạt, nịnh mắt.</p>
                            <div class="img_Sp">
                                <img src="images/<?= $image ?>" alt="" width="50%%">
                            </div>
                            <h4>Đỉnh cao thiết kế sang trọng và bền bỉ</h4>
                            <p style="text-align: justify;font-size: 16px;color: black;margin: 11px 0;">Rất khó để tìm ra chiếc điện thoại nào sang trọng như iPhone 14 Pro Max trên thị trường. Thừa hưởng thiết
                                kế vát phẳng từ thế hệ trước, thủ lĩnh iPhone 14 series khoác lên bộ khung vỏ thép, đầm tay và chắc chắn.
                                Bạn sẽ lập tức bị lôi cuốn bởi vẻ ngoài cao cấp với thân máy bóng bẩy của sản phẩm.

                                Nhờ kỹ nghệ hoàn thiện xuất sắc, thiết kế iPhone 14 Pro Max đạt chuẩn chống nước IP68 cao nhất có thể trên
                                smartphone. Apple đã phủ lên màn hình thiết bị chất liệu kính Ceramic Shield siêu bền, tối ưu khả năng kháng
                                lực và chống xước cực tốt suốt vòng đời sử dụng.</p>
                            <div class="img_Sp">
                                <img src="./image/z3588174707242_a93435d2a0595df5784848a57eb55af9.jpg" alt="">
                            </div>
                            <p style="text-align: justify;font-size: 16px;color: black;margin: 11px 0;">iPhone 14 Pro Max có kiểu dáng tương tự người tiền nhiệm với một vẻ ngoài sang trọng làm từ khung thép
                                không gỉ kết hợp hai mặt cứng cường lực phủ gốm siêu bền. Tuy nhiên do cụm camera được nâng cấp lớn hơn, nên
                                bạn sẽ không thể sử dụng chung ốp lưng với dòng iPhone 13 Pro trước đây. Tất nhiên iPhone 14 Pro và iPhone
                                14 Pro Max sẽ có khả năng chống nước/chống bụi chuẩn IP68.</p>
                            <h4>Lựa chọn giữa các màu sắc cao cấp</h4>
                            <p style="text-align: justify;font-size: 16px;color: black;margin: 11px 0;">Với iPhone 14 Pro Max, bạn sẽ có bốn lựa chọn màu sắc sáng giá gồm Tím (Deep Purple), Vàng (Gold), Bạc
                                (Silver) và Đen không gian (Space Black). Riêng phiên bản Tím đã được căn chỉnh với tone màu đậm, rất đẹp,
                                nền nã và phát huy được tinh thần sang trọng vốn có của thiết bị.

                                màu sắc iPhone 14 Pro Max cao cấp

                                Bên cạnh những màu quen thuộc, khá bất ngờ khi màu sắc chủ đạo của dòng iPhone 14 Pro Max năm nay sẽ là màu
                                Tím Deep Purple. Với một sản phẩm có thiết kế tinh xảo như iPhone 14 Pro Max thì màu tím sẽ trở nên rất đẹp,
                                bóng bẩy và sang trọng. iPhone 14 Pro Max mang hơi hướng sang trọng, tinh tế với 4 phiên bản màu sắc:

                                iPhone 14 Pro Max màu tím

                                Phiên bản màu tím của iPhone 14 Pro Max khác với màu tím của iPhone 14 và iPhone 14 Plus khi có sắc tím đậm
                                hơn. Kết hợp với khung thép cao cấp, tôn lên nét đẹp cao cấp và sang trọng.

                                iPhone 14 Pro Max màu đen

                                iPhone 14 Pro Max cũng có màu đen. Đây là màu phổ biến dành cho tất cả mọi người với sắc màu trung tính, dễ
                                dàng phối với nhiều outfit lẫn phụ kiện. Điểm đặc biệt của màu đen còn là nét đẹp vượt thời gian, vì mọi
                                phiên bản cập nhật màu đều có màu đen. Chính vì thế, màu đen sẽ không bị lỗi thời, dù cho có nhiều phiên bản
                                khác đã ra mắt.

                                iPhone 14 Pro Max màu bạc

                                Màu bạc thanh lịch, rất phù hợp với thiết kế sang trọng mà iPhone 14 Pro Max đang theo đuổi. Đây cũng là màu
                                quốc dân trên thế hệ iPhone cao cấp, khi xuất hiện rất đều đặn qua từng năm. Mặc dù không quá nổi bật nhưng
                                khi cầm iPhone 14 Pro Max màu bạc trên tay, bạn sẽ hiểu được vì sao Apple luôn giữ phiên bản màu này – màu
                                hội tụ đầy yếu tố sang trọng, lịch lãm đặc trưng của dòng iPhone.

                                iPhone 14 Pro Max màu vàng

                                Phiên bản iPhone 14 Pro Max màu vàng gần như được rất nhiều người dùng nữ ưa chuộng. Sắc màu tựa như trang
                                sức lấp lánh, sang chảnh, quý phái nhưng cực kì cao cấp với tổng thể được hoàn thiện từ khung thép và được
                                bảo vệ bởi kính Ceramic Shield.

                                Màn hình Dynamic Island lần đầu xuất hiện
                                Lần đầu tiên sau nhiều năm, Apple đã nói lời “tạm biệt” với phần màn hình “tai thỏ” mặt trước. Bạn sẽ có màn
                                hình không gian hiển thị nhiều hơn khi iPhone 14 Pro Max được thu hẹp phần cảm biến Face ID và camera trước
                                gọn nhất có thể, thành hình dạng như một viên thuốc (hay chữ i).

                                Apple gọi phần này là Dynamic Island vì nó thực sự thú vị. Nhờ màn hình OLED, Apple đã tùy biến khu vực
                                “viên thuốc” thành các biểu tượng gọi tắt, các thông báo của ứng dụng với hiệu ứng chuyển cảnh mượt mà và
                                liền mạch. Bạn chắc chắn sẽ cảm nhận được sự thú vị của Dynamic Island khi sử dụng iPhone 14 Pro Max trực
                                tiếp.

                                Màn hình điện thoại iPhone 14 Pro Max

                                iPhone 14 Pro Max sở hữu màn hình 6.7 inch LTPO hiện đại, có khả năng điều tiết tần số quét tự động từ 1Hz
                                đến 120Hz linh hoạt nhằm tăng độ mượt mà và vẫn tiết kiệm pin. Điểm nhấn trên màn hình là việc chuyển từ
                                phong cách tai thỏ sang dạng “viên thuốc” có phần cắt nhỏ nhắn hơn nhiều.

                                Đặc biệt, Apple còn tận dụng không gian này để tạo hiệu ứng biến hóa linh hoạt tùy theo tác vụ bạn trải
                                nghiệm. Với tên gọi Dynamic Island, cấu trúc “viên thuốc” trên màn hình iPhone 14 Pro Max giờ đây trở thành
                                điểm nhấn đáng trải nghiệm nhất.

                                Tính năng Always On đã sẵn sàng
                                Tận dụng đặc tính của công nghệ OLED, iPhone 14 Pro Max đem đến chế độ Always On Display, cho phép người
                                dùng xem những thông tin cần thiết như thông báo, thời gian, ngày tháng, thời tiết hay nhiệt độ sau khi màn
                                hình chuyển qua trạng thái nghỉ.

                                Giờ đây, người dùng không cần phải chạm vào thiết bị khi màn hình iPhone 14 Pro Max đang tắt mà vẫn có thể
                                nắm được những thông tin cần thiết. Đáng nói hơn, Always On Display sẽ tự tắt khi úp màn hình xuống hoặc đặt
                                máy trong túi quần, túi áo nhằm tiết kiệm pin.

                                Tính năng Always On trên iPhone 14 Pro Max đã sẵn sàng

                                Màn hình bộ đôi iPhone 14 Pro Max cực đỉnh với tấm nền OLED Super Retina XDR, mật độ điểm ảnh 460 ppi hỗ trợ
                                loạt tính năng hàng đầu như HDR, True Tone, Wide Color (P3). Màn hình iPhone 14 Pro có kích thước 6,1 inch
                                độ phân giải 2556 x 1179 pixels, trong khi đó iPhone 14 Pro Max là 6,7 inch độ phân giải 2796 x 1290 pixels.
                                Độ tương phản và độ sáng cũng rất ấn tượng với độ tương phản 2.000.000:1 và độ sáng tối đa lên tới 2000 nits
                                ở điều kiện ngoài trời. Ngoài ra màn hình này cũng hỗ trợ tần số làm mới 120Hz và công nghệ ProMotion, có
                                thể thay đổi tần số từ 1-120 Hz để vừa mượt mà, vừa tiết kiệm pin.

                                Super Retina XDR rực rỡ và mãn nhãn
                                Dù trong ánh nắng chói chang nhất, màn hình iPhone 14 Pro Max vẫn luôn sắc nét và chân thực. Tấm nền Super
                                Retina XDR với độ sáng 2.000 nits sáng gấp đôi trước đây khiến khả năng hiển thị của sản phẩm vượt trội bất
                                cứ mẫu iPhone nào trong lịch sử.

                                Apple tập trung rất nhiều vào trải nghiệm nội dung HDR khi đẩy độ sáng tối đa lên mức 1.600 nits – ngang
                                ngửa với màn hình Pro Display XDR chuyên dụng của hãng. Bạn sẽ cảm nhận rõ ràng tính chân thực từ mỗi hình
                                ảnh, thước phim.

                                Điện thoại iPhone 14 Pro Max rực rỡ và mãn nhãn

                                Camera 48MP lần đầu góp mặt
                                iPhone 14 Pro Max được ưu ái trang bị camera chính 48MP hoàn toàn mới, với cảm biến quad-pixel tân tiến.
                                Việc nâng cấp độ phân giải gấp bốn lần iPhone 13 Pro Max và sử dụng cảm biến ảnh lớn hơn 65% giúp hình ảnh
                                trở nên sắc nét chưa từng thấy.

                                Cảm biến mới sẽ gộp mỗi nhóm bốn pixel thành một pixel lớn, từ đó gia tăng khả năng thu sáng gấp bốn lần và
                                tạo ra những khuôn hình sắc nét vượt xa những chiếc điện thoại camera 12MP thông thường trên thị trường. Nhờ
                                vậy bạn sẽ có ảnh chi tiết hơn tới 4 lần trong khi chỉnh sửa ảnh ProRAW để thoải mái crop ảnh mà không lo
                                giảm chất lượng.

                                Kích thước cảm biến cũng lớn hơn tới 65% so với iPhone 13 Pro, tăng khả năng chụp ảnh thiếu sáng. Trong điều
                                kiện bình thường, Apple sẽ ghép 4 điểm ảnh làm 1 để bức ảnh cuối cùng vẫn có độ phân giải 12MP nhưng độ sáng
                                và độ chi tiết vượt trội.

                                Camera iPhone 14 Pro Max 48MP

                                Camera Tele cũng được nâng cấp khi có chất lượng quang học gấp đôi thế hệ trước, có thể thu phóng 2x và 3x
                                rõ nét. Camera iPhone 14 Pro tập trung chủ yếu vào chụp ảnh thiếu sáng khi Apple cho biết camera góc siêu
                                rộng Ultra Wide chụp ảnh thiếu sáng tốt hơn 3 lần, 2 camera còn lại tốt hơn gấp đôi so với thế hệ iPhone 13
                                Pro.

                                iPhone 14 Pro Max tiếp tục thể hiện sự chuyên nghiệp khi quay video với khả năng quay video 4K HDR 24fps
                                hoặc 30fps chuẩn điện ảnh. Ấn tượng hơn là tính năng quay chuyển động không thua kém gì GoPro.

                                Về camera trước TrueDepth, bạn sẽ có tính năng tự động lấy nét và khẩu độ lớn hơn. Những bức ảnh selfie sẽ
                                rõ nét, lấy nét chính xác hơn và chụp thiếu sáng tốt hơn gấp đôi.

                                Nâng tầm quay chụp lên đẳng cấp chuyên nghiệp
                                Chưa khi nào trải nghiệm quay chụp trên iPhone chuyên nghiệp đến thế! iPhone 14 Pro Max đem đến rất nhiều
                                tính năng hỗ trợ chuyên sâu cho người dùng. Trải nghiệm chụp ProRAW ở độ phân giải 48MP sẽ giúp bạn tối ưu
                                hóa độ chi tiết của hình ảnh và khả năng can thiệp hậu kỳ linh hoạt hơn nhiều, dễ dàng làm hài lòng những
                                người dùng khó tính nhất.

                                Nâng tầm quay chụp Điện thoại iPhone 14 Pro Max

                                Thu phóng tuyệt hảo nhờ camera tele 2X
                                Trên mặt lưng iPhone 14 Pro Max, bạn sẽ tìm thấy một camera tele 2X tiêu cự quy đổi 48mm, đạt khẩu độ F/1.78
                                và tích hợp kèm cảm biến chống rung OIS thế hệ hai. Sự giúp sức của camera đặc biệt này giúp iPhone 14 Pro
                                Max đem đến các tùy chọn zoom đa dạng như 0.5x, 1x, 2x và 3x.

                                camera tele Điện thoại iPhone 14 Pro Max

                                Khả năng chụp ảnh thiếu sáng cực kỳ xuất sắc
                                Cả ba camera của iPhone 14 Pro Max đều được tối ưu để nâng cao khả năng chụp ảnh thiếu sáng so với iPhone
                                cũ. Cụ thể, camera Ultra Wide có thể chụp ảnh thiếu sáng tốt hơn gấp ba lần, trong khi camera chính và
                                camera tele chụp thiếu sáng tốt gấp đôi.

                                Sự giúp sức của con chip A16 Bionic siêu mạnh góp phần nâng cao chất lượng ảnh chụp nhờ thực hiện tới 4 ngàn
                                tỉ tác vụ hậu kỳ trước khi tạo ra bức ảnh thành phẩm cuối cùng – một con số cực kỳ ấn tượng.

                                iPhone 14 Pro Max chụp ảnh thiếu sáng cực kỳ xuất sắc

                                Chip A16 Bionic với 16 tỷ bóng bán dẫn
                                Đứng sau mọi hoạt động của iPhone 14 Pro Max là chip A16 Bionic. Con chip đỉnh cao thế hệ mới tập hợp tới 16
                                tỷ bóng bán dẫn, bao gồm 6 lõi CPU và 5 lõi GPU giúp sản phẩm xử lý được khối lượng thông tin khổng lồ một
                                cách chuyên nghiệp. Ngoài ra, A16 Bionic giúp thiết bị tiết kiệm pin tối đa, thực hiện các tác vụ đồ họa
                                phức tạp để chạy mượt mọi tựa game.

                                Các lõi Neural Engine trên A16 Bionic thực hiện 17 nghìn tỷ phép tính mỗi giây sẽ phân tích từng pixel trong
                                ảnh và tối ưu hóa nhằm cho ra những bức ảnh chất lượng nhất.

                                Chip A16 Bionic Điện thoại iPhone 14 Pro Max

                                Pin iPhone 14 Pro Max sẽ khiến bạn kinh ngạc
                                iPhone 14 Pro Max sẽ đem đến trải nghiệm pin khiến bạn thực sự kinh ngạc. Chỉ với một lần sạc, thủ lĩnh dòng
                                iPhone 14 có thể phát video liên tục trong 29 tiếng không nghỉ. Ngoài ra, công nghệ sạc không dây đã được
                                nâng cấp để rút ngắn thời gian chờ đợi khi kết hợp cùng bộ sạc MagSafe.

                                Pin iPhone 14 Pro Max

                                iPhone 14 Pro Max chính hãng giá bao nhiêu?
                                Kế thừa loạt sản phẩm iPhone Pro Max đẳng cấp và đắt đỏ nhất của Apple, giá iPhone 14 Pro Max cũng nằm trong
                                phân khúc cao cấp hàng đầu tại Việt Nam. Cụ thể, mức giá iPhone 14 Pro Max dao động trong khoảng từ 26 tới
                                30 triệu đồng tùy từng thời điểm. Dù vậy, khi sử dụng iPhone 14 Pro Max, bạn sẽ thấy thiết bị hoàn toàn xứng
                                đáng với mức giá cao cấp này.

                                Chi tiết giá iPhone 14 Pro Max mới nhất 2023 như sau:

                                - iPhone 14 Pro Max 128GB giá từ 24,5 triệu đồng.

                                - iPhone 14 Pro Max 256GB giá từ 29,2 triệu đồng.

                                - iPhone 14 Pro Max 512GB giá từ 35,4 triệu đồng.

                                - iPhone 14 Pro Max 1TB giá từ 41,4 triệu đồng.

                                * Mức giá trên tùy theo chương trình khuyến mãi theo từng thời điểm tại FPT Shop.

                                iPhone 14 Pro Max giá bao nhiêu tiền

                                Đánh giá thực tế iPhone 14 Pro Max thời điểm hiện tại
                                Trong trường hợp bạn đang cân nhắc có nên mua iPhone 14 Pro Max hay không thì việc tham khảo những đánh giá
                                thực tế là hoàn toàn cần thiết trước khi quyết định đầu tư sắm sửa mẫu smartphone sang trọng hàng đầu thế
                                giới điện thoại này:

                                Về thiết kế cao cấp
                                iPhone 14 Pro Max sở hữu bộ khung vỏ thép cao cấp, có độ bóng cao và đầm tay khi cầm nắm. Toàn bộ thân máy
                                đều được hoàn thiện tỉ mỉ đến từng chi tiết nhỏ. Hệ thống cạnh viền vát phẳng mang tới cảm nhận xịn sò, hai
                                mặt trước/sau được hoàn thiện từ lớp kính nhám mờ chống bám vân tay, hạn chế lưu dấu mồ hôi khi sử dụng
                                thiết bị.

                                Về màn hình
                                Trải nghiệm hiển thị mà iPhone 14 Pro Max đem lại thuộc top tốt nhất thị trường. Tấm nền Super Retina XDR
                                OLED của sản phẩm rộng tới 6.7 inch và hỗ trợ tần số quét 120Hz nhằm mang lại trải nghiệm vuốt cuộn mượt mà
                                tối đa. Với độ sáng lên tới 2.000 nits, sản phẩm hiển thị rõ nét mọi khuôn hình một cách sắc sảo, rực rỡ, dù
                                ở ngoài trời hay trong nhà.

                                đánh giá màn hình iPhone 14 Pro Max

                                Về cấu hình
                                iPhone 14 Pro Max sở hữu thông số cấu hình được Apple đầu tư mạnh mẽ với chip A16 Bionic sản xuất trên tiến
                                trình 6nm, 6GB RAM và các tùy chọn bộ nhớ trong gồm: 128GB, 256GB, 512GB và 1TB.

                                Về camera iPhone 14 Pro Max
                                iPhone 14 Pro Max đánh dấu bước nhảy vọt về năng lực quay chụp khi tăng độ phân giải camera lên mức 48MP -
                                vượt trội hoàn toàn so với thông số 12MP trên các thế hệ cũ. Nhờ đó, sản phẩm diễn đạt được những khuôn hình
                                sắc nét với độ tương phản cân bằng và đề cao tính trung thực. Khả năng xóa phông của iPhone 14 Pro Max rất
                                ấn tượng, đem lại những khuôn hình chân dung có chiều sâu, bối cảnh phía sau được làm mờ chính xác, nhẹ
                                nhàng và tạo hiệu ứng thị giác tốt khi ngắm nhìn.

                                Về trải nghiệm pin của iPhone 14 Pro Max
                                Thời lượng sử dụng giữa mỗi lần sạc của iPhone 14 Pro Max trong thực tế đạt khoảng 8 tiếng liên tục. Viên
                                pin 4.323 mAh được tối ưu tốt bởi chip A15 Bionic và hệ điều hành iOS. Ước tính, thiết bị chỉ tiêu tốn
                                khoảng 10% pin cho một giờ xem YouTube, 10% pin cho một tiếng lướt TikTok, 15% pin nếu bạn chơi Liên Quân
                                Mobile hoặc Liên Minh Tốc Chiến.

                                trải nghiệm pin iPhone 14 Pro Max

                                iPhone 14 Pro Max có mấy màu?
                                iPhone 14 Pro Max đem đến cho người dùng 4 sự lựa chọn về màu sắc bao gồm: Đen Ánh Thép, Tím Đậm, Bạc và
                                Gold. Toàn bộ các tone màu đều mang hơi hướng trung tính, lịch lãm mà sang trọng. Trải nghiệm thực tế cho
                                thấy màu Tím Đậm của iPhone 14 Pro Max đem lại cảm nhận mới mẻ nhất, thể hiện rõ tinh thần cao cấp mà chiếc
                                điện thoại hướng tới. Trong trường hợp bạn muốn trải nghiệm những tone màu đẹp bất chấp xu hướng, hãy tìm
                                đến những gam màu mang sắc độ trung tính nhiều hơn như Đen, Bạc hoặc Gold.

                                iPhone 14 Pro Max có mấy màu?

                                iPhone 14 Pro Max có chống nước không?
                                Toàn bộ iPhone 14 series nói chung và iPhone 14 Pro Max nói riêng đều có khả năng chống nước đạt chuẩn IP68.
                                Điều này bảo chứng cho việc thiết bị có thể ngâm nước ở độ sâu 1,5 mét suốt 30 phút. Người dùng iPhone 14
                                Pro Max hoàn toàn có thể an tâm về các sự cố bất chợt liên quan đến nước khi sử dụng sản phẩm này.

                                So sánh iPhone 14 Pro Max với iPhone 13 Pro Max
                                Apple mang đến cho iPhone 14 Pro Max nhiều nâng cấp thú vị so với iPhone 13 Pro Max. Trong đó, nét khác biệt
                                lớn nhất về ngoại hình nằm ở thiết kế màn hình Dynamic Island với phần khuyết hình viên thuốc biến đổi linh
                                hoạt dựa trên những tác vụ mà người dùng thực hiện.

                                Việc cải tiến chip xử lý từ A15 Bionic lên A16 Bionic khiến hiệu năng iPhone 14 Pro Max tăng tiến hơn nhiều.
                                Hệ thống quay chụp trên mặt lưng cũng có sự tăng tiến từ mức 12MP lên 48MP ở camera chính. Ngoài ra, iPhone
                                14 Pro Max cũng sở hữu tính năng mà bạn không tìm thấy trên iPhone 13 Pro Max như màn hình Always On.

                                So sánh iPhone 14 Pro Max với iPhone 13 Pro Max

                                Có nên mua iPhone 14 Pro Max để chơi game?
                                Câu trả lời là hoàn toàn có, iPhone 14 Pro Max được giới chuyên môn đánh giá là một trong những lựa chọn tốt
                                nhất dành cho giới game thủ. Với chip A16 Bionic, sản phẩm cho phép bạn thiết lập đồ họa lên mức tối đa ở
                                các tựa game như Liên Quân Mobile, PUBG Mobile, Call of Duty Mobile hay thậm chí là Genshin Impact.

                                Quá trình chơi game trên iPhone 14 Pro Max cực kỳ mượt mà, dù là khi bạn vuốt chiêu, tham gia giao tranh
                                tổng phức tạp, nhặt đồ, ngắm bắn, di chuyển, lia map... Tất cả đều được phản hồi nhanh chóng, duy trì chỉ
                                FPS ổn định và không nóng lên nhiều trong suốt quá trình chơi game. Từ trải nghiệm màn hình, hiệu năng hay
                                thời lượng pin, các game thủ chắc chắn sẽ hài lòng về những gì iPhone 14 Pro Max đem lại.

                                Có nên mua iPhone 14 Pro Max để chơi game?

                                Mua iPhone 14 Pro Max giá rẻ nhất ở đâu?
                                Tự hào là nhà phân phối lớn các sản phẩm Apple chính hãng và uy tín top đầu tại Việt Nam, FPT Shop luôn đưa
                                ra mức giá iPhone 14 Pro Max thuộc hàng rẻ nhất trên cả nước. Hệ thống 800 cửa hàng trải rộng khắp toàn quốc
                                tạo điều kiện để bạn dễ dàng tìm đến, mua sắm và bảo hành thiết bị trong trường hợp cần thiết.

                                Giá iPhone 14 Pro Max mà FPT Shop ấn định luôn xứng đáng với giá trị thực tế của sản phẩm. Đặc biệt, hệ
                                thống đảm bảo 100% về nguồn gốc xuất xứ của từng chiếc iPhone được bán ra, đi kèm với chế độ hậu mãi sau bán
                                hàng tận tâm.</p>
                        </div>

                    </div>
                </div>
                <div class="Real_specifications">
                    <table>
                        <tr>
                            <th>Màn hình</th>
                            <td>6.7 inch, OLED, Super Retina XDR, 2796 x 1290 Pixels</td>
                        </tr>
                        <tr>
                            <th>Camera sau</th>
                            <td>48.0 MP + 12.0 MP + 12.0 MP</td>
                        </tr>
                        <tr>
                            <th>Camera Selfie</th>
                            <td>12.0 MP</td>
                        </tr>
                        <tr>
                            <th>RAM</th>
                            <td>6GB</td>
                        </tr>
                        <tr>
                            <th>Bộ nhớ trong</th>
                            <td>256 GB</td>
                        </tr>
                        <tr>
                            <th>CPU</th>
                            <td>Apple A16 Bionic</td>
                        </tr>
                        <tr>
                            <th>GPU</th>
                            <td>Apple GPU 5 nhân</td>
                        </tr>
                        <tr>
                            <th>Dung lượng pin</th>
                            <td>4323 mAh</td>
                        </tr>
                        <tr>
                            <th>Thẻ sim</th>
                            <td>1 - 1 eSIM, 1 Nano SIM</td>
                        </tr>
                        <tr>
                            <th>Hệ điều hành</th>
                            <td>iOS 16</td>
                        </tr>
                        <tr>
                            <th>Xuất xứ</th>
                            <td>Trung Quốc</td>
                        </tr>
                        <tr>
                            <th>Thời gian ra mắt</th>
                            <td>09/2022</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="readMoreBtn">Đọc thêm</div>
            <div class="cauhoithuonggap">
                <h3>Câu hỏi thường gặp</h3>
                <div class="line"></div>
                <div class="nd_ct actives">
                    <div class="tieude">
                        <h6><i class="fa-solid fa-circle-question" style="color:black;"></i>
                            Chip xử lí của iPhone 14 Pro max có gì đặc biệt ?</h6>
                        <i class="add fa-solid fa-circle-plus" id="left" style="color:black;"></i>
                    </div>
                    <div class="content_p">
                        <p>iPhone 14 Pro Max chạy chip A16 Bionic. Con chip thế hệ mới của Apple tập hợp 16 tỷ bóng bán dẫn, bao gồm 6 lõi CPU và 5 lõi GPU, giúp sản phẩm xử lý được khối lượng thông tin khổng lồ một cách chuyên nghiệp. Ngoài ra, A16 Bionic giúp thiết bị tiết kiệm pin tối đa, thực hiện các tác vụ đồ họa phức tạp để chạy mượt mọi tựa game.</p>

                    </div>
                </div>

                <div class="nd_ct actives">
                    <div class="tieude">
                        <h6><i class="fa-solid fa-circle-question" style="color:black;"></i>
                            Chip xử lí của iPhone 14 Pro max có gì đặc biệt ?</h6>
                        <i class="add fa-solid fa-circle-plus" id="left" style="color:black;"></i>
                    </div>
                    <div class="content_p">
                        <p>iPhone 14 Pro Max chạy chip A16 Bionic. Con chip thế hệ mới của Apple tập hợp 16 tỷ bóng bán dẫn, bao gồm 6 lõi CPU và 5 lõi GPU, giúp sản phẩm xử lý được khối lượng thông tin khổng lồ một cách chuyên nghiệp. Ngoài ra, A16 Bionic giúp thiết bị tiết kiệm pin tối đa, thực hiện các tác vụ đồ họa phức tạp để chạy mượt mọi tựa game.</p>

                    </div>
                </div>
                <div class="nd_ct actives">
                    <div class="tieude">
                        <h6><i class="fa-solid fa-circle-question" style="color:black;"></i>
                            Chip xử lí của iPhone 14 Pro max có gì đặc biệt ?</h6>
                        <i class="add fa-solid fa-circle-plus" id="left" style="color:black;"></i>
                    </div>
                    <div class="content_p">
                        <p>iPhone 14 Pro Max chạy chip A16 Bionic. Con chip thế hệ mới của Apple tập hợp 16 tỷ bóng bán dẫn, bao gồm 6 lõi CPU và 5 lõi GPU, giúp sản phẩm xử lý được khối lượng thông tin khổng lồ một cách chuyên nghiệp. Ngoài ra, A16 Bionic giúp thiết bị tiết kiệm pin tối đa, thực hiện các tác vụ đồ họa phức tạp để chạy mượt mọi tựa game.</p>

                    </div>
                </div>




            </div>
            <div class="hoidap">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $("#binhluan").load("view/binhluan/binhluanform.php", {
                            product_id: <?= $id ?>
                        });
                    });;
                </script>
                <div class="row mb " id="binhluan">
                    <div class="boxtitle">BÌNH LUẬN</div>
                    <div class="boxcontent">

                    </div>
                </div>

                <div class="tsl">

                </div>

            </div>
    </form>
    <script src="view/js/product_details.js"></script>
    </script>

</body>
<script>

</script>

</html>