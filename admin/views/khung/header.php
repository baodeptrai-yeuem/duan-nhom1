<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng điều khiển quản trị</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/cssheader.css">
    <style>
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Chuyển đổi điều hướng">
            <span class="navbar-toggler-icon"></span>
        </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Hồ sơ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cài đặt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="?act=/">Trang Chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=category">Danh mục</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=listSP">Sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Đơn Hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Phản Hồi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tài khoản</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mã Giảm Giá</a>
            </li>
        </ul>
    </div>
    <div class="content-area">
        <section class="dashboard">
            <div class="stats">
                <div class="stat-item">
                    <i class="fas fa-calendar"></i>
                    <div>
                        <h3>0</h3>
                        <p>Đơn Hàng</p>
                    </div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-user"></i>
                    <div>
                        <h3>0</h3>
                        <p>Tài khoản</p>
                    </div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-box"></i>
                    <div>
                        <h3>0</h3>
                        <p>Sản Phẩm</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var menuLinks = document.querySelectorAll('.sidebar .nav-link');
            menuLinks.forEach(function(link) {
                if (window.location.href.indexOf(link.href) > -1) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
            menuLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    menuLinks.forEach(function(link) {
                        link.classList.remove('active');
                    });
                    link.classList.add('active');
                });
            });
        });
    </script>

</body>
</html>
