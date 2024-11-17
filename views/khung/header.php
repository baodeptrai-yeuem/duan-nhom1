<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Header</title>
    
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        /* Reset mặc định */
        body, h1, h2, h3, h4, h5, h6, p, ul, li, a, nav, div, header {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
        }

        /* Header */
        .header {
            max-width: 1920px;
            margin: 0 auto;
            padding: 20px 30px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8em;
            font-weight: 700;
            color: #333;
        }

        /* Navigation styles */
        nav {
            display: flex;
            flex: 1;
            justify-content: center;
            margin: 0 20px;
        }

        .nav-link {
            text-decoration: none;
            color: #555;
            padding: 10px 20px;
            font-size: 16px;
            transition: color 0.3s, background-color 0.3s;
            border-radius: 5px;
        }

        .nav-link:hover {
            color: #007bff;
            background-color: #f0f2f5;
        }

        /* Search bar styles */
        .search-bar {
            position: relative;
            display: flex;
            align-items: center;
            border-radius: 20px;
            background-color: #f8f9fa;
            transition: width 0.4s ease;
            width: 0;
            overflow: hidden;
            border: 1px solid #ccc;
        }

        .search-bar.expanded {
            width: 250px;
        }

        .search-input {
            border: none;
            padding: 8px 15px;
            background: none;
            outline: none;
            font-size: 15px;
            width: 100%;
            border-radius: 20px;
        }

        .search-icon {
            cursor: pointer;
            margin-left: 10px;
            transition: transform 0.2s;
        }

        .search-icon:hover {
            transform: scale(1.1);
        }

        /* Dropdown styles */
        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            position: absolute;
            top: 110%;
            right: 0;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 8px;
            padding: 10px 0;
            display: none;
            min-width: 160px;
            z-index: 10;
        }

        .dropdown-item {
            color: #555;
            padding: 10px 20px;
            text-decoration: none;
            display: block;
            font-size: 14px;
            transition: background-color 0.2s ease;
        }

        .dropdown-item:hover {
            background-color: #f0f0f0;
        }

        /* Icon container */
        .icon-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .khung {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="logo">
            My Website
        </div>
        <nav>
            <div class="khung">
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">About</a>
                <a href="#" class="nav-link">Services</a>
                <a href="#" class="nav-link">Liên Hệ</a>
                
            </div>
        </nav>
        <div class="icon-container">
            <!-- Search -->
            <div class="search-bar" id="searchBar">
                <input type="text" class="search-input" placeholder="Tìm kiếm...">
            </div>
            <img src="https://img.icons8.com/ios-glyphs/30/000000/search.png" alt="Search"
                class="search-icon" id="searchIcon">

            <!-- User Icon -->
            <div class="dropdown">
             <?php
                if(isset($_SESSION['username'])){
             ?>
                <div class="dropdown-toggle" id="userIcon">
                    <img src="assets/img/user.png" width="25px" height="30px" alt="User">
                </div>
             <?php
                }else{
             ?>
            
                <div class="dropdown-toggle" id="userIcon">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/user.png" alt="User">
                </div>
            <?php
            }
            ?>
                <div class="dropdown-menu" id="userMenu">
                    <?php
                        if (isset($_SESSION['username'])) {?>
                            <a class="dropdown-item" href="?act=profile">Thông tin cá nhân</a>
                            <?php if ($_SESSION['role'] == 1) { ?>                         
                            <a href="admin" class="dropdown-item">Vào trang admin</a>
                                <?php
                            }
                            ?>
                            <a class="dropdown-item" href="?act=changePass">doi mk</a>
                            <a class="dropdown-item" href="#">Giỏ Hàng</a>
                            <a class="dropdown-item" href="?act=dangxuat">Đăng xuất</a>
                            <?php
                        } else {
                            ?>
                            <a href="?act=dangky" class="dropdown-item">Đăng ký</a>
                            <a href="?act=dangnhap" class="dropdown-item">Đăng nhập</a>
                            <?php
                        }
                    ?>

                </div>
            </div>
            <a href="#" class="nav-link">
                <img src="https://img.icons8.com/ios-glyphs/30/000000/shopping-cart.png" alt="Cart">
            </a>
        </div>
    </header>

    <script>
        document.getElementById('searchIcon').addEventListener('click', function () {
            var searchBar = document.getElementById('searchBar');
            if (searchBar.classList.contains('expanded')) {
                searchBar.classList.remove('expanded');
            } else {
                searchBar.classList.add('expanded');
            }
        });

        document.getElementById('userIcon').addEventListener('click', function () {
            var userMenu = document.getElementById('userMenu');
            if (userMenu.style.display === 'block') {
                userMenu.style.display = 'none';
            } else {
                userMenu.style.display = 'block';
            }
        });

        document.addEventListener('click', function (event) {
            var userIcon = document.getElementById('userIcon');
            var userMenu = document.getElementById('userMenu');
            if (!userIcon.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu.style.display = 'none';
            }
        });
    </script>
</body>

</html>
