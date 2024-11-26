<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    margin-bottom: 20px;
    color: #333;
    font-size: 26px;
    padding-bottom: 10px;
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
    padding: 12px 15px;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    font-size: 14px;
    transition: border-color 0.3s, box-shadow 0.3s;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
}

.nhom-form input:focus {
    border-color: #80bdff;
    outline: none;
    box-shadow: 0 0 8px rgba(128, 189, 255, 0.6);
}

.hanh-dong-form {
    margin-top: 30px;
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
.hanh-dong-form button:active {
    background-color: #004080;
    box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.2);
}

.thong-bao-rieng-tu {
    margin-top: 20px;
    font-size: 12px;
    color: #6c757d;
    text-align: left;
}

.noi-dung-chinh h2   {
    margin-top: 30px;
    color: #333;
    font-weight: bold;
}

.nhom-form.nhom-mat-khau {
    margin-top: 30px;
}

.nhom-form input::placeholder {
    color: #999;
    opacity: 0.8;
}

.nhom-form input:hover {
    border-color: #b2d4f8;
}



    </style>
</head>
<body>
<header>
    <?php require_once 'views/khung/header.php';  ?>
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
                    <li><a href="#" onclick="saveClick('Tất cả các đơn hàng')">Tất cả các đơn hàng</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng xử lý')">Đơn hàng đang xử lý</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng chờ lấy hàng')">Đơn hàng chờ lấy hàng</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng đang giao')">Đơn hàng đang giao</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng đã giao')">Đơn hàng đã giao</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng đã hủy')">Đơn hàng đã hủy</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng trả lại')">Đơn hàng trả lại</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="noi-dung-chinh">
    <h2>Đổi Mật Khẩu</h2>
    <form action="" method="POST">
        <div class="nhom-form nhom-mat-khau">
            <label for="mat_khau_hien_tai">Mật khẩu hiện tại:</label>
            <input type="text" id="mat_khau_hien_tai" name="mkcu" required>
        </div>
        <div class="nhom-form">
            <label for="mat_khau_moi">Mật khẩu mới:</label>
            <input type="text" id="mat_khau_moi" name="mkmoi" required>
        </div>
        <div class="nhom-form">
            <label for="xac_nhan_mat_khau">Xác nhận mật khẩu mới:</label>
            <input type="text" id="xac_nhan_mat_khau" name="nhaplaimk" required>
        </div>

        <div class="hanh-dong-form">
            <button type="submit" name="btn_updatemk">LƯU</button>
        </div>
    </form>
</div>

</div>
<footer>
<?php
    require_once 'views/khung/footer.php';
?>
</footer>
</body>
</html>
