<!DOCTYPE html>
<html lang="en">

<head id="Head1" prefix="og: http://ogp.me/ns# fb:http://ogp.me/ns/fb# article:http://ogp.me/ns/article#">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Cache-control" content="public">
    <title>SAVANI - Thương hiệu thời trang nam, nữ, trẻ em chất lượng</title>
    <meta name="keywords" content="Savani">
    <meta name="description" content="SAVANI -  Thương hiệu thời trang chất lượng, uy tín. Hệ thống 76 cửa h�&nbsp;ng. Sản phẩm đa dạng, tính ứng dụng cao, giá tốt">
</head>
<?php require_once 'views/khung/style_link.php'; ?>

<body>

    <header>
        <?php require_once 'views/khung/header.php'; ?>
    </header>


    <div id="main" class="main_home">

        <div class="slideshow">
            <style>
                #bannerHome .item a {
                    width: 100%;
                }

                html,
                body {
                    height: 100%;
                    margin: 0;
                }

                .chan-trang {
                    height: 100px;
                    margin-top: 20px;
                }

                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f9f9f9;
                }

                .khu-vuc {
                    max-width: 1200px;
                    flex: 1;
                    margin: 0 auto;
                    padding: 20px;
                    min-width: auto;
                }

                .phan-tieu-de {
                    position: relative;
                    margin: 40px 0 20px;
                    text-align: left;
                }

                .phan-tieu-de h1 {
                    font-size: 28px;
                    font-weight: bold;
                    color: #333;
                    margin: 0;
                    display: inline-block;
                }

                .noi-dung-chinh {
                    gap: 30px;
                    margin-top: 20px;
                }

                .khu-vuc-container {
                    width: 1500px;
                    margin-right: auto;
                    padding:20px;
                }

                .khu-vuc-san-pham {
                    width: 1820px;
                    display: flex;
                    flex-wrap: wrap;
                    gap: 35px;
                    justify-content: center;
                    text-align: center;
                }

                .the-san-pham {
                    width: 100%;
                    height: 400px;
                    background-color: white;
                    border: 1px solid #ddd;
                    border-radius: 10px;
                    overflow: hidden;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    transition: transform 0.2s ease, box-shadow 0.2s ease;
                    width: 270px;
                }

                .the-san-pham:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                }

                .hinh-anh-san-pham {
                    width: 100%;
                    height: 70%;
                    object-fit: cover;
                }

                .thong-tin-san-pham {
                    padding: 10px;
                    text-align: left;
                }

                .ten-san-pham {
                    font-size: 16px;
                    font-weight: bold;
                    margin-bottom: 5px;
                    color: #333;
                }

                .gia-san-pham {
                    font-size: 14px;
                    font-weight: bold;
                    color: #ff0000;
                    margin-bottom: 5px;
                }

                .tin-tuc {
                    width: 100%;
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 20px;
                    font-family: Arial, sans-serif;
                }

                .tieu-de {
                    font-size: 24px;
                    font-weight: bold;
                    margin-bottom: 10px;
                }

                .dong-ke {
                    width: 50px;
                    height: 3px;
                    background-color: #FF5733;
                    margin-bottom: 20px;
                }

                .danh-sach-tin {
                    display: flex;
                    gap: 20px;
                    justify-content: space-between;
                }

                .bai-viet {
                    width: 30%;
                    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
                    border-radius: 5px;
                    overflow: hidden;
                    background-color: #fff;
                    text-align: center;
                }

                .bai-viet img {
                    width: 100%;
                    height: auto;
                }

                .bai-viet h3 {
                    font-size: 16px;
                    color: #333;
                    padding: 10px;
                }

                .bai-viet .ngay-thang {
                    font-size: 12px;
                    color: #999;
                    margin-bottom: 10px;
                }

                footer {
                    margin-top: 5%
                }
            </style>

            <body>
                <div id="bannerHome" class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="">
                            <img src="assets/csstrangchu/images/black-friday_banner-1920x680-min_1731577366.webp" alt="CTKM 15/2" class="img-responsive">
                        </a>
                    </div>
                </div>
        </div>
        <div class="noi-dung-chinh">
            <div class="khu-vuc-container">
                <div class="noi-dung-chinh">
                    <div class="khu-vuc-san-pham">
                        <?php foreach ($sanpham as $row) { ?>
                            <div class="the-san-pham">
                                <a href="?act=CTsanpham&id=<?= $row['id_sanpham'] ?>"><img src="./assets/img/<?= $row['image'] ?>" alt="Sản phẩm 1" class="hinh-anh-san-pham"></a>
                                <div class="thong-tin-san-pham">
                                    <div class="ten-san-pham"><?= $row['name'] ?></div>
                                    <div class="gia-san-pham"><?= $row['price'] ?>đ</div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php
        require_once 'views/khung/footer.php';
        ?>
    </footer>
</body>

</html>