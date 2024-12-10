<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gio hang</title>

    <link rel="stylesheet" type="text/css" media="screen" href="https://savani.vn/modules/products/assets/css/step.css?v=8.65" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://savani.vn/templates/default/scss/font-awesome/css/font-awesome.css?v=8.65" />
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

.main-info {
    padding: 20px;
}

.grid-box {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.left, .right {
    flex: 1;
    min-width: 45%;
}

.title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
    font-size: 16px;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #ff6f61;
    background-color: #fff;
    outline: none;
    box-shadow: 0 0 8px rgba(255, 111, 97, 0.2);
}

/* Đơn hàng */
.order {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border: none;
}

.list-in-order .item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
    padding: 10px;
    position: relative;
}

.list-in-order .item img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
    position: relative;
}

/* Hiển thị số lượng với vòng tròn đỏ */
.item .quant-per {
    position: absolute;
    top: -10px;
    right: -10px;
    background-color: #ff4a3a;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    padding: 6px 10px;
    border-radius: 50%;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.mid .name {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    text-decoration: none;
    margin-bottom: 5px;
}

.detail {
    color: #999;
}

/* Giá và tổng cộng màu đỏ */
.right .price-per-prd,
.total_before .right,
.ship-fee .right,
.discount-fee .right,
.total .right {
    font-weight: bold;
    color: #ff4a3a;
}

/* Tính phí */
.total_before, .ship-fee, .discount-fee, .total {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    font-size: 16px;
}

.total {
    font-size: 18px;
    font-weight: bold;
}

/* Nút */
.btn_checkout_order {
    background-color: #ff6f61;
    color: #fff;
    border: none;
    padding: 15px 20px;
    width: 100%;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn_checkout_order:hover {
    background-color: #ff4a3a;
}

.continue-shopping a {
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    color: #007bff;
    font-size: 14px;
}

.continue-shopping a:hover {
    text-decoration: underline;
}


</style>

<body>
    <header>
        <?php require_once 'khung/header.php'; ?>
    </header>
    <main id="main">
        <div class="container">
            <div class="main-info">
                <div class="row">
                    <div class="col-md-8">
                        <form action="index.php?act=checkout" class="form_checkout" method="POST">
                            <div class="cart">
                                <div class="grid-box">
                                    <div class="left">
                                        <p class="title">Thông tin giao hàng</p>
                                        <div class="box billing-box">
                                            <div class="billing_exist">
                                                <div class="">
                                                    <input type="text" id="f_name" name="name" class="form-control" placeholder="Họ và tên" value="<?= $_SESSION['username']['username'] ?>" disabled>
                                                </div>
                                                <div class="">
                                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?= $_SESSION['username']['email'] ?>" >
                                                </div>
                                                <div class="">
                                                    <input type="text" id="telephone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" placeholder="Số điện thoại" value="<?= $_SESSION['username']['phone'] ?>" >
                                                </div>

                                                <div class="">
                                                    <input type="text" id="add_1" name="address" class="form-control" placeholder="Địa chỉ" value="<?= $_SESSION['username']['address'] ?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <p class="title">Vận chuyển</p>
                                        <p class="condition">Vui lòng nhập thông tin giao hàng</p>
                                        <div class="checkout">
                                            <div class="box-list box-list-full">
                                                <h3 class="title-cart-right title-cart-payment">Mua hàng</h3>
                                                <div class="list-thanh-toan">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <div class="flex-box">
                                                                <label class="control control--radio control--pay_book control-inline">
                                                                    <input checked="" type="radio" id="cod" name="pay_book" value="2" onclick="yesnoCheck()">
                                                                    <div class="control__indicator"></div>
                                                                </label>
                                                                <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                </svg>
                                                                <label for="cod" class="pay_radio tien-mat">Thanh toán khi giao hàng (COD) </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="order">
                            <p class="outer-title">
                                <span class="title">Đơn hàng </span>
                            </p>
                            <div class="list-in-order">
                                <?php
                                if (!empty($_SESSION['cartItems'])) {
                                    foreach ($_SESSION['cartItems'] as $item) {
                                ?>
                                        <div class="item">
                                            <div class="left">
                                                <img class="img" src="./assets/img/<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="hinh-anh-san-pham">
                                            </div>
                                            <div class="mid">
                                                <a href="?act=CTsanpham&id=<?= $item['id'] ?>" class="name">
                                                    <?= $item['name'] ?>
                                                </a>

                                                <p class="detail">
                                                    <?= number_format($item['price'], 3, '.', ',') ?>đ
                                                </p>
                                            </div>

                                            <div class="right">
                                                <p class="price-per-prd">
                                                    <?= number_format($item['price'] * $item['quantity'], 3, '.', ',') ?>đ
                                                </p>
                                            </div>
                                            <p class="quant-per"><?= $item['quantity'] ?></p>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "<p>Giỏ hàng trống</p>";
                                }
                                ?>
                            </div>
                            <p class="total_before temporary fix">
                                <span>Tạm tính: </span><span class="right"><?= $_SESSION['totalPrice'], '.', 0, 0, 0 ?>đ</span>
                            </p>
                            <p class="ship-fee fix"><span>Phí vận chuyển</span><span class="right">-</span></p>

                            <p class="discount-fee fix"><span>Mã giảm giá</span><span class="right">-</span></p>

                            <p class="total temporary fix">
                                <span>Tổng cộng: </span><span class="right" id="total_price"><?= $_SESSION['totalPrice'], '.', 0, 0, 0 ?>đ</span>
                            </p>
                            <div class="continue-shopping">
                                <a href="index.php?act=giohang">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    </svg>
                                    Quay về giỏ hàng</a>
                                    <?php
                                    if (!empty($_SESSION['cartItems'])) {
                                    ?>
                                        <button type="submit" name="btn_checkout_order" class="btn_checkout_order" id="btn_checkout_order">
                                            Thanh Toán
                                        </button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>
       <?php require_once 'khung/footer.php'; ?> 
    </footer>


    <script>
        const btn_checkout_order = document.getElementById('btn_checkout_order');
        btn_checkout_order.addEventListener('click', () => {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            localStorage.removeItem('cartItems');
        });
        function getCartItemsFromLocalStorage() {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            return cartItems;
        }
    </script>
</body>
</html>
