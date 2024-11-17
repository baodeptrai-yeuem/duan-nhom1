<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.a{
    width: 1920px;
}

body {
    background-color: #f9fafb;
    color: #333;
    line-height: 1.6;
    width: 1920px;
}
.breadcrumb {
    margin: 20px;
    font-size: 14px;
    color: #6c757d;
    padding: 10px 20px;
    background-color: #f0f2f5;
    border-radius: 5px;
}

.breadcrumb a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s;
}

.breadcrumb a:hover {
    color: #0056b3;
}

.container {
    display: flex;
    margin: 20px;
}

.sidebar {
    width: 250px;
    background-color: #ffffff;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    margin-right: 20px;
}

.sidebar h3 {
    font-size: 20px;
    margin-bottom: 20px;
    color: #333;
    font-weight: 600;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li {
    margin-bottom: 15px;
}

.sidebar ul li strong {
    display: block;
    margin-bottom: 10px;
    font-size: 16px;
    color: #555;
    font-weight: 600;
}

.sidebar ul li a {
    text-decoration: none;
    color: #333;
    font-size: 14px;
    display: block;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
    cursor: pointer;
}

.sidebar ul li a:hover {
    background-color: #e9ecef;
    color: #007bff;
}

.sidebar ul li a:active {
    background-color: #d1ecf1;
    color: #0056b3;
}

/* Main Content */
.main-content {
    flex-grow: 1;
    background-color: #ffffff;
    padding: 30px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.main-content h2 {
    text-align: left;
    margin-bottom: 20px;
    color: #333;
    font-size: 24px;
    font-weight: bold;
}

/* Form styling */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: #555;
    font-size: 14px;
}

.form-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.form-group input:focus {
    border-color: #80bdff;
    outline: none;
}

.form-actions {
    text-align: left;
    margin-top: 20px;
}

.form-actions button {
    padding: 12px 30px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.form-actions button:hover {
    background-color: #555;
}

/* Additional styles for privacy notice */
.privacy-notice {
    margin-top: 20px;
    font-size: 12px;
    color: #6c757d;
    text-align: left;
}

/* Thêm margin-top cho phần Đổi Mật Khẩu */
.main-content h3 {
    margin-top: 30px;  /* Để cách phần trước của form */
}

.form-group.password-group {
    margin-top: 30px;  /* Cách phần "Thông tin người dùng" */
}


    </style>
</head>
<body>
    <div class="a">
        <?php
            require_once 'views/khung/header.php';
        ?>
    </div>
<div class="breadcrumb">
    <a href="#" onclick="saveClick('Trang chủ')">Trang chủ</a> / Thông tin cá nhân
</div>

<div class="container">
    <div class="sidebar">
        <h3>Trung tâm cá nhân</h3>
        <ul>
            <li><strong>Tài khoản của tôi</strong>
                <ul>
                    <li><a href="?act=profile" onclick="saveClick('Thông tin của tôi')">Thông tin của tôi</a></li>
                </ul>
            </li>
            <li><strong>Đơn hàng của tôi</strong>
                <ul>
                    <li><a href="#" onclick="saveClick('Tất cả các đơn hàng')">Tất cả các đơn hàng</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng xử lý')">Đơn hàng xử lý</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng chờ lấy hàng')">Đơn hàng chờ lấy hàng</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng đang giao')">Đơn hàng đang giao</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng đã giao')">Đơn hàng đã giao</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng đã hủy')">Đơn hàng đã hủy</a></li>
                    <li><a href="#" onclick="saveClick('Đơn hàng trả lại')">Đơn hàng trả lại</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="main-content">
        <h2>THÔNG TIN NGƯỜI DÙNG</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" value="<?= $show['username'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= $show['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" value="<?= $show['phone'] ?>" required>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" id="address" name="address" value="<?= $show['address'] ?>">
            </div>
            <div class="form-actions">
                <button type="submit" name="btn_update">LƯU</button>
            </div>

            <h3>Đổi Mật Khẩu</h3>
            <div class="form-group password-group">
                <label for="current_password">Mật khẩu hiện tại:</label>
                <input type="password" id="current_password" name="mkcu" required>
            </div>
            <div class="form-group">
                <label for="new_password">Mật khẩu mới:</label>
                <input type="password" id="new_password" name="mkmoi" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Xác nhận mật khẩu mới:</label>
                <input type="password" id="confirm_password" name="nhaplaimk" required>
            </div>

            <div class="form-actions">
                <button type="submit" name="btn_updatemk">LƯU</button>
            </div>
        </form>
</div>

</body>
</html>
