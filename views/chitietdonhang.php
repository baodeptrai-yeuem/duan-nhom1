<!DOCTYPE html>
<html lang="en">

<head id="Head1" prefix="og: http://ogp.me/ns# fb:http://ogp.me/ns/fb# article:http://ogp.me/ns/article#">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Cache-control" content="public">
    <title>SAVANI - Thương hiệu thời trang nam, nữ, trẻ em chất lượng</title>
    <meta name="keywords" content="Savani">
    <meta name="description" content="SAVANI -  Thương hiệu thời trang chất lượng, uy tín. Hệ thống 76 cửa h�&nbsp;ng. Sản phẩm đa dạng, tính ứng dụng cao, giá tốt">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/home.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/banner_slide.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/flash.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/home_1.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/mmenu.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/csstrangchu/css/menu_footer.css">
    <style>
        body {
            color: #333;
            line-height: 1.6;
            width: 100%;
        }

        .duong-dan {
            margin: 20px;
            font-size: 14px;
            color: #6c757d;
            padding: 10px 20px;
            background-color: #f0f2f5;
            border-radius: 5px;
        }

        .duong-dan a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .duong-dan a:hover {
            color: #0056b3;
        }

        .khung-chua {
            display: flex;
            margin: 20px;
        }

        .thanh-ben {
            width: 250px;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-right: 20px;
        }

        .thanh-ben h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
            font-weight: 600;
        }

        .thanh-ben ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .thanh-ben ul li {
            margin-bottom: 15px;
        }

        .thanh-ben ul li strong {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            color: #555;
            font-weight: 600;
        }

        .thanh-ben ul li a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            cursor: pointer;
        }

        .thanh-ben ul li a:hover {
            background-color: #e9ecef;
            color: #007bff;
        }

        .thanh-ben ul li a:active {
            background-color: #d1ecf1;
            color: #0056b3;
        }

        .noi-dung-chinh {
            flex-grow: 1;
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .noi-dung-chinh h2 {
            text-align: left;
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            font-weight: bold;
        }

        .nhom-form {
            margin-bottom: 20px;
        }

        .nhom-form label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
            font-size: 14px;
        }

        .nhom-form input {
            width: 100%;
            padding: 12px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .nhom-form input:focus {
            border-color: #80bdff;
            outline: none;
        }

        .hanh-dong-form {
            text-align: left;
            margin-top: 20px;
        }

        .hanh-dong-form button {
            padding: 12px 30px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .hanh-dong-form button:hover {
            background-color: #555;
        }

        .thong-bao-rieng-tu {
            margin-top: 20px;
            font-size: 12px;
            color: #6c757d;
            text-align: left;
        }

        .noi-dung-chinh h3 {
            margin-top: 30px;
        }

        .nhom-form.nhom-mat-khau {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <header>
        <?php
        require_once 'views/khung/header.php';
        ?>
    </header>
    <div class="duong-dan">
        <a href="#" onclick="saveClick('Trang chủ')">Trang chủ</a> / Thông tin cá nhân
    </div>

    <div class="khung-chua">
        <div class="thanh-ben">
            <h3>Trung tâm cá nhân</h3>
            <ul>
                <li><strong>Tài khoản của tôi</strong>
                    <ul>
                        <li><a href="?act=profile" onclick="saveClick('Thông tin của tôi')">Thông tin của tôi</a></li>
                        <li><a href="?act=changePass" onclick="saveClick('Thông tin của tôi')">Đổi mật khẩu</a></li>

                    </ul>
                </li>
                <li><strong>Đơn hàng của tôi</strong>
                    <ul>
                        <li><a href="?act=lichsudonhang" onclick="saveClick('Tất cả các đơn hàng')">Tất cả các đơn hàng</a></li>
                        <!-- <li><a href="#" onclick="saveClick('Đơn hàng xử lý')">Đơn hàng đang xử lý</a></li>
                        <li><a href="#" onclick="saveClick('Đơn hàng chờ lấy hàng')">Đơn hàng chờ lấy hàng</a></li>
                        <li><a href="#" onclick="saveClick('Đơn hàng đang giao')">Đơn hàng đang giao</a></li>
                        <li><a href="#" onclick="saveClick('Đơn hàng đã giao')">Đơn hàng đã giao</a></li>
                        <li><a href="#" onclick="saveClick('Đơn hàng đã hủy')">Đơn hàng đã hủy</a></li>
                        <li><a href="#" onclick="saveClick('Đơn hàng trả lại')">Đơn hàng trả lại</a></li> -->
                    </ul>
                </li>
            </ul>
        </div>
        <div class="noi-dung-chinh">
            <h2>Chi Tiết Đơn Hàng</h2>
            <section class="h-100 gradient-custom">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-5">
                        <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;">Anna</span>!</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="lead fw-normal mb-0" style="color: #a8729a;">ID</p>
                            <p class="small text-muted mb-0"> 1KAU9-84UIL</p>
                        </div>

                        <?php foreach ($list_detail_order as $item) { ?>
                            <div class="card shadow-0 border mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                        <img src="./assets/img/<?= $item['image'] ?>" 
     alt="Sản phẩm 1" 
     class="hinh-anh-san-pham img-fluid" 
     style="width: 150px; height: auto;" 
     alt="Phone">

                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0"><?= $item['name'] ?></p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small"><?= $item['price'] ?></p>
                                        </div>
                                    </div>
                                    <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                    <div class="card-footer border-0 px-4 py-5"
                        style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                            paid: <span class="h2 mb-0 ms-2"><?= number_format($total_price, 3, ',', '.') ?>đ</span></h5>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <footer>
        <?php require_once 'views/khung/footer.php'; ?>
    </footer>
</body>

</html>