<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<style>
    .khung {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 1920px;
        margin: 0 auto;
        padding: 20px 30px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .trai,
    .func,
    .icon-container {
        display: flex;
        align-items: center;
    }

    .left {
        flex: 1;
    }

    .func {
        flex: 2;
        justify-content: center;
    }

    .icon-container {
        display: flex;
        align-items: center;
        gap: 20px;
        justify-content: flex-end;
    }



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
        width: 200px;
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
</style>

<div class="khung">
    <div class="trai">
        <a href="#sideMenuMobile" class="toggle-menu-side-bar">
            <div class="bar">
                <span class="line-bar"></span>
                <span class="line-bar"></span>
                <span class="line-bar"></span>
            </div>
        </a>
        <a class="logo-fix" href="?act=/">
            <img src="assets/img/logo.jpg" alt="Savani">
        </a>
    </div>

    <div class="menu-container">
        <ul id="megamenu" class="menu selected">
            <li class="li1 level_0"><a href="?act/" class="menu_item_a_0">Trang chủ</a></li>
            <li class="li2 level_0"><a href="?act=DMspSM" class="menu_item_a_0">Áo Sơ mi</a></li>
            <li class="li3 level_0"><a href="?act=DMspPL" class="menu_item_a_0">Áo Pô lô</a></li>
            <li class="li4 level_0"><a href="?act=DMspAT" class="menu_item_a_0">Áo thun</a></li>
            <li class="li331 level_0"><a href="#" class="menu_item_a_0">Hướng dẫn chọn size</a></li>
        </ul>
    </div>

    <div class="icon-container">
        <div class="search-bar" id="searchBar">
            <form action="?act=timkiem" method="POST">
                <input type="text" class="search-input" name="search" placeholder="Tìm kiếm...">
                <button hidden name="btn_search"></button>
            </form>
        </div>
        <img src="https://img.icons8.com/ios-glyphs/30/000000/search.png" alt="Search" class="search-icon" id="searchIcon">

        <div class="dropdown">
            <?php if (isset($_SESSION['username'])) { ?>
                <div class="dropdown-toggle" id="userIcon">
                    <img src="assets/img/user.png" width="25px" height="30px" alt="User">
                </div>
            <?php } else { ?>
                <div class="dropdown-toggle" id="userIcon">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/user.png" alt="User">
                </div>
            <?php } ?>
            <div class="dropdown-menu" id="userMenu">
                <?php if (isset($_SESSION['username'])) { ?>
                    <a class="dropdown-item" href="#">Xin chào: <?php echo $_SESSION['username']['username']; ?></a>
                    <a class="dropdown-item" href="?act=profile">Thông tin cá nhân</a>
                    <?php if ($_SESSION['role'] == 1) { ?>
                        <a href="admin" class="dropdown-item">Vào trang admin</a>
                    <?php } ?>
                    <a class="dropdown-item" href="?act=lichsudonhang">Đơn hàng của bạn</a>
                    <a class="dropdown-item" id="dangxuat" href="?act=dangxuat">Đăng xuất</a>
                <?php } else { ?>
                    <a href="?act=dangnhap" class="dropdown-item">Đăng nhập</a>
                <?php } ?>
            </div>
        </div>
        <a href="index.php?act=giohang" class="nav-link">
            <img src="https://img.icons8.com/ios-glyphs/30/000000/shopping-cart.png" alt="Cart">
            <span id="total_cart" style="color:red">0</span>
        </a>
    </div>
</div>

<script>
    document.getElementById('dangxuat')

    document.getElementById('searchIcon').addEventListener('click', function() {
        var searchBar = document.getElementById('searchBar');
        if (searchBar.classList.contains('expanded')) {
            searchBar.classList.remove('expanded');
        } else {
            searchBar.classList.add('expanded');
        }
    });

    document.getElementById('userIcon').addEventListener('click', function() {
        var userMenu = document.getElementById('userMenu');
        if (userMenu.style.display === 'block') {
            userMenu.style.display = 'none';
        } else {
            userMenu.style.display = 'block';
        }
    });

    document.addEventListener('click', function(event) {
        var userIcon = document.getElementById('userIcon');
        var userMenu = document.getElementById('userMenu');
        if (!userIcon.contains(event.target) && !userMenu.contains(event.target)) {
            userMenu.style.display = 'none';
        }
    });


    function getCartItemsFromLocalStorage() {
        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        return cartItems.length; // Return the number of items
    }

    const total_cart = getCartItemsFromLocalStorage();

    if (total_cart > 0) {
        document.getElementById('total_cart').innerHTML = total_cart;
    }
</script>