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
            <ul>
                <li><strong>Tài khoản của tôi</strong>
                    <ul>
                        <li><a href="?act=profile" onclick="saveClick('Thông tin của tôi')">Thông tin của tôi</a></li>
                        <li><a href="?act=changePass" onclick="saveClick('Thông tin của tôi')">Đổi mật khẩu</a></li>

                    </ul>
                </li>
                <li><strong>Tất cả các đơn hàng</strong>
                    <ul>
                        <li><a href="?act=lichsudonhang" onclick="saveClick('Tất cả các đơn hàng')">Đơn hàng của tôi</a></li>
                        <li><a href="?act=DHdangiao" onclick="saveClick('Tất cả các đơn hàng')">Đơn hàng thành công</a></li>
                        <li><a href="?act=DHdahuy" onclick="saveClick('Tất cả các đơn hàng')">Đơn hàng đã hủy</a></li>
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
            <h2>ĐƠN HÀNG CỦA TÔI</h2>
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Phiên đơn hàng</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Tình Trạng</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Cách thức thanh toán</th>
                        <th scope="col">Ngày đặt hàng</th>
                        <th scope="col">Chi tiết đơn hàng</th>
                        <th scope="col">Hủy đơn hàng</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_order as $item) { ?>
                        <?php if ($item['status_order'] !== 'Đã hủy') { ?> <!-- Kiểm tra nếu trạng thái không phải là "Đã hủy" -->
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= htmlspecialchars($item['username']) ?></td>
                                <td><?= htmlspecialchars($item['status_order']) ?></td>
                                <td><?= number_format($item['total_price'], 3, '.', ',') ?> ₫</td>
                                <td><?= htmlspecialchars($item['method_pay']) ?></td>
                                <td><?= htmlspecialchars($item['ngaydat']) ?></td>
                                <td><a href="?act=chitietdonhang&id_order=<?= $item['id'] ?>" class="btn btn-primary">Xem chi tiết</a></td>
                                <td>
                                    <?php if ($item['status_order'] !== 'Chờ xác nhận') { ?>
                                        <!-- Nếu trạng thái không phải là "Chờ xác nhận", thì không hiển thị nút hủy -->
                                    <?php } else { ?>
                                        <form method="POST" action="?act=huyDH">
                                            <input type="hidden" name="id_order" value="<?= $item['id'] ?>">
                                            <button type="submit" name="btn_updateST" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn hủy đơn hàng này không?')">Hủy Đơn hàng</button>
                                        </form>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <?php require_once 'views/khung/footer.php'; ?>
    </footer>
</body>

</html>