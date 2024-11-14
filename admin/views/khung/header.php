<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Trị Viên</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #f3f4f6;
}

.container {
    display: flex;
    height: 100vh;
    overflow: hidden;
}
.sidebar {
    width: 260px;
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: #ffffff;
    height: 100%;
    padding: 20px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.sidebar .logo {
    text-align: center;
    margin-bottom: 30px;
}

.sidebar .logo h2 {
    font-size: 24px;
    color: #ffc107;
}

.sidebar .menu {
    list-style: none;
    padding: 0;
}

.sidebar .menu li {
    margin: 15px 0;
}

.sidebar .menu a {
    text-decoration: none;
    color: #ffffff;
    display: flex;
    align-items: center;
    padding: 12px;
    border-radius: 8px;
    transition: background-color 0.3s, color 0.3s;
}

.sidebar .menu a:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: #ffc107;
}

.sidebar .menu a i {
    margin-right: 12px;
    font-size: 18px;
}

.logout {
    color: #ff4d4d;
    font-weight: bold;
}
.main-content {
    flex-grow: 1;
    padding: 30px;
    background-color: #ffffff;
    overflow-y: auto;
}

.header {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
}

.header input[type="text"] {
    width: 300px;
    padding: 12px;
    border-radius: 20px;
    border: 1px solid #ccc;
    outline: none;
    transition: box-shadow 0.3s;
}

.header input[type="text"]:focus {
    box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
}

.header button {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-left: -5px;
}

.header button:hover {
    background-color: #218838;
}

.dashboard .stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.stat-item {
    background-color: #f8f9fa;
    padding: 25px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    transition: box-shadow 0.3s;
}

.stat-item:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.stat-item i {
    font-size: 35px;
    color: #007bff;
}

.stat-item div h3 {
    font-size: 30px;
    margin: 0;
}

.stat-item div p {
    margin: 0;
    color: #6c757d;
    font-size: 16px;
}

.orders {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
}

.order-warning {
    background-color: #ffe6e6;
    padding: 15px;
    border: 1px solid #ff4d4d;
    border-radius: 8px;
    color: #ff0000;
    font-weight: bold;
    margin-bottom: 15px;
}


    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <h2>ADMIN</h2>
            </div>
            <ul class="menu">
                <li><a href="#"><i class="fas fa-home"></i> Trang Chủ</a></li>
                <li><a href="?act=category"><i class="fas fa-list"></i> Danh Mục</a></li>
                <li><a href="#"><i class="fas fa-box"></i> Sản Phẩm</a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i> Đơn Hàng</a></li>
                <li><a href="#"><i class="fas fa-comment-dots"></i> Phản Hồi</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Tài Khoản</a></li>
                <li><a href="#"><i class="fas fa-tags"></i> Mã Giảm Giá</a></li>
                <li><a href="#"><i class="fas fa-images"></i> Slider Shows</a></li>
                <li><a href="#"><i class="fas fa-chart-bar"></i> Thống Kê</a></li>
                <li><a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a></li>
            </ul>
        </aside>

    </div>
</body>
</html>
