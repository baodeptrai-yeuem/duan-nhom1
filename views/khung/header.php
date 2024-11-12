<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Header</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
            max-width: 1920px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .logo {
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
        }
        .nav-link {
            color: #333 !important;
        }
        .nav-link:hover {
            color: #007bff !important;
        }
        .search-box {
            position: relative;
        }
        .search-input {
            display: none;
            position: absolute;
            top: 40px;
            right: 0; /* Đảm bảo rằng nó xổ sang bên phải */
            width: 400px; /* Tăng chiều rộng */
            padding: 10px; /* Tăng padding */
            margin-top: 5px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000; /* Đảm bảo nó nổi trên các phần tử khác */
        }
        .search-icon {
            cursor: pointer;
        }
        .dropdown-menu {
            right: 0;
            left: auto;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('.search-icon').addEventListener('click', function() {
                var searchInput = document.querySelector('.search-input');
                if (searchInput.style.display === 'none' || searchInput.style.display === '') {
                    searchInput.style.display = 'block';
                    searchInput.focus();
                } else {
                    searchInput.style.display = 'none';
                }
            });
        });
    </script>
</head>
<body>
    <header class="header">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                My Website
            </div>
            <nav class="d-flex align-items-center">
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">About</a>
                <a href="#" class="nav-link">Services</a>
                <a href="#" class="nav-link">Contact</a>
                <a href="?act=dangky" class="nav-link">dang ký</a>
            </nav>
            <div class="d-flex align-items-center">
                <!-- Search -->
                <div class="search-box">
                    <span class="search-icon">
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/search.png" alt="Search">
                    </span>
                    <input type="text" class="search-input form-control" placeholder="Tìm kiếm sản phẩm...">
                </div>
                <!-- User Icon -->
                <div class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/user.png" alt="User">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>
                <!-- Cart Icon -->
                <a href="#" class="nav-link">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/shopping-cart.png" alt="Cart">
                </a>
            </div>
        </div>
    </header>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
