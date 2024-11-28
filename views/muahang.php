<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gio hang</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://savani.vn/modules/products/assets/css/cart3.css?v=8.65" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://savani.vn/templates/default/css/bootstrap.min.css?v=8.65" />

</head>
<style>
    .form_checkout .btn_checkout_order {
        border: none;
        display: block;
        width: 100%;
        padding: 10px;
        background: #ee4d2d;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        font-size: 16px;
        margin-bottom: 15px;
    }
</style>

<body>


    <main id="main">


        <div class="container">
            <div class="main-info">

                <div class="row">
                    <div class="col-md-8">
                        <a class="logo" href="index.php">
                            <img src="https://savani.vn/images/logo.png" alt="Savani">
                        </a>
                        <form action="" class="form_success" method="post" enctype="multipart/form-data">
                            <div class="cart">
                                <div class="grid-box">
                                    <div class="left">
                                        <p class="title">Thông tin giao hàng</p>
                                        <div class="box billing-box">
                                            <div class="billing_exist">
                                                <div class="">
                                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?= $_SESSION['username']['email'] ?>" disabled>
                                                </div>
                                                <div class="">
                                                    <input type="text" id="f_name" name="f_name" class="form-control" placeholder="Họ và tên" value="<?= $_SESSION['username']['username'] ?>" disabled>
                                                </div>

                                                <div class="">
                                                    <input type="text" id="telephone" name="telephone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" placeholder="Số điện thoại" value="<?= $_SESSION['username']['phone'] ?>" disabled>
                                                </div>

                                                <div class="">
                                                    <input type="text" id="add_1" name="add_1" class="form-control" placeholder="Địa chỉ" value="<?= $_SESSION['username']['address'] ?>" disabled>
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
                                                                    <path d="M1.12988 0.703125H24.8701C24.9268 0.70311 24.9829 0.71455 25.0353 0.736793C25.0877 0.759036 25.1353 0.791645 25.1754 0.832757C25.2155 0.873869 25.2472 0.92268 25.2689 0.976398C25.2906 1.03012 25.3018 1.08769 25.3018 1.14583V14.4271C25.3018 14.4852 25.2906 14.5428 25.2689 14.5965C25.2472 14.6502 25.2155 14.699 25.1754 14.7402C25.1353 14.7813 25.0877 14.8139 25.0353 14.8361C24.9829 14.8584 24.9268 14.8698 24.8701 14.8698H1.12988C1.07319 14.8698 1.01706 14.8584 0.964684 14.8361C0.912308 14.8139 0.864717 14.7813 0.824633 14.7402C0.78455 14.699 0.752754 14.6502 0.731068 14.5965C0.709381 14.5428 0.698227 14.4852 0.698242 14.4271V1.14583C0.698227 1.08769 0.709381 1.03012 0.731068 0.976398C0.752754 0.92268 0.78455 0.873869 0.824633 0.832757C0.864717 0.791645 0.912308 0.759036 0.964684 0.736793C1.01706 0.71455 1.07319 0.70311 1.12988 0.703125ZM1.56152 13.9844H24.4385V1.58854H1.56152V13.9844Z" fill="#EE4D2D"></path>
                                                                    <path d="M22.7119 10.8854C22.3686 10.8858 22.0394 11.0258 21.7967 11.2748C21.5539 11.5238 21.4174 11.8614 21.417 12.2135C21.417 12.2716 21.4059 12.3292 21.3842 12.3829C21.3625 12.4367 21.3307 12.4855 21.2906 12.5266C21.2505 12.5677 21.2029 12.6003 21.1506 12.6225C21.0982 12.6448 21.042 12.6562 20.9854 12.6562H16.8848C16.7703 12.6562 16.6605 12.6096 16.5795 12.5265C16.4986 12.4435 16.4531 12.3309 16.4531 12.2135C16.4531 12.0961 16.4986 11.9835 16.5795 11.9005C16.6605 11.8174 16.7703 11.7708 16.8848 11.7708H20.5971C20.6825 11.3458 20.8874 10.9559 21.1866 10.6491C21.4857 10.3422 21.8659 10.1321 22.2803 10.0445V5.52834C21.8659 5.44077 21.4857 5.23059 21.1866 4.92378C20.8874 4.61698 20.6825 4.227 20.5971 3.80204H16.8848C16.7703 3.80204 16.6605 3.7554 16.5795 3.67238C16.4986 3.58935 16.4531 3.47675 16.4531 3.35933C16.4531 3.24192 16.4986 3.12932 16.5795 3.04629C16.6605 2.96327 16.7703 2.91663 16.8848 2.91663H20.9854C21.042 2.91661 21.0982 2.92805 21.1506 2.95029C21.2029 2.97254 21.2505 3.00515 21.2906 3.04626C21.3307 3.08737 21.3625 3.13618 21.3842 3.1899C21.4059 3.24362 21.417 3.30119 21.417 3.35933C21.4174 3.71146 21.5539 4.04905 21.7967 4.29804C22.0394 4.54703 22.3686 4.68708 22.7119 4.68746C22.7686 4.68744 22.8247 4.69888 22.8771 4.72113C22.9295 4.74337 22.9771 4.77598 23.0172 4.81709C23.0572 4.8582 23.089 4.90701 23.1107 4.96073C23.1324 5.01445 23.1436 5.07203 23.1436 5.13017V10.4427C23.1436 10.5008 23.1324 10.5584 23.1107 10.6121C23.089 10.6658 23.0572 10.7146 23.0172 10.7557C22.9771 10.7969 22.9295 10.8295 22.8771 10.8517C22.8247 10.874 22.7686 10.8854 22.7119 10.8854Z" fill="#EE4D2D"></path>
                                                                    <path d="M9.11523 3.80204H5.40308C5.31769 4.227 5.11277 4.61698 4.81363 4.92378C4.5145 5.23059 4.13427 5.44077 3.71994 5.52834V10.0445C4.13427 10.1321 4.5145 10.3422 4.81363 10.6491C5.11277 10.9559 5.31769 11.3458 5.40308 11.7708H9.11523C9.22971 11.7708 9.3395 11.8174 9.42045 11.9005C9.5014 11.9835 9.54688 12.0961 9.54688 12.2135C9.54688 12.3309 9.5014 12.4435 9.42045 12.5265C9.3395 12.6096 9.22971 12.6562 9.11523 12.6562H5.01486C4.95817 12.6562 4.90203 12.6448 4.84966 12.6225C4.79728 12.6003 4.74969 12.5677 4.70961 12.5266C4.66952 12.4855 4.63773 12.4367 4.61604 12.3829C4.59436 12.3292 4.5832 12.2716 4.58322 12.2135C4.58284 11.8614 4.44629 11.5238 4.20353 11.2748C3.96077 11.0258 3.63162 10.8858 3.2883 10.8854C3.23161 10.8854 3.17547 10.874 3.1231 10.8517C3.07072 10.8295 3.02313 10.7969 2.98305 10.7557C2.94296 10.7146 2.91117 10.6658 2.88948 10.6121C2.86779 10.5584 2.85664 10.5008 2.85666 10.4427V5.13017C2.85664 5.07203 2.86779 5.01445 2.88948 4.96073C2.91117 4.90701 2.94296 4.8582 2.98305 4.81709C3.02313 4.77598 3.07072 4.74337 3.1231 4.72113C3.17547 4.69888 3.23161 4.68744 3.2883 4.68746C3.63162 4.68708 3.96077 4.54703 4.20353 4.29804C4.44629 4.04905 4.58284 3.71146 4.58322 3.35933C4.5832 3.30119 4.59436 3.24362 4.61604 3.1899C4.63773 3.13618 4.66952 3.08737 4.70961 3.04626C4.74969 3.00515 4.79728 2.97254 4.84966 2.95029C4.90203 2.92805 4.95817 2.91661 5.01486 2.91663H9.11523C9.22971 2.91663 9.3395 2.96327 9.42045 3.04629C9.5014 3.12932 9.54688 3.24192 9.54688 3.35933C9.54688 3.47675 9.5014 3.58935 9.42045 3.67238C9.3395 3.7554 9.22971 3.80204 9.11523 3.80204Z" fill="#EE4D2D"></path>
                                                                    <path d="M13 11.5495C12.2744 11.5495 11.565 11.3288 10.9616 10.9153C10.3583 10.5018 9.88803 9.91411 9.61034 9.22651C9.33264 8.5389 9.25999 7.78229 9.40155 7.05233C9.54312 6.32238 9.89255 5.65187 10.4057 5.1256C10.9188 4.59933 11.5725 4.24094 12.2842 4.09574C12.9959 3.95055 13.7336 4.02507 14.404 4.30988C15.0745 4.5947 15.6475 5.07701 16.0506 5.69584C16.4538 6.31466 16.6689 7.04221 16.6689 7.78646C16.6678 8.78412 16.2809 9.74059 15.5931 10.446C14.9053 11.1515 13.9727 11.5483 13 11.5495ZM13 4.90886C12.4451 4.90886 11.9026 5.07762 11.4413 5.39382C10.9799 5.71002 10.6203 6.15944 10.4079 6.68525C10.1955 7.21106 10.14 7.78965 10.2482 8.34785C10.3565 8.90605 10.6237 9.41879 11.0161 9.82123C11.4085 10.2237 11.9084 10.4977 12.4526 10.6088C12.9969 10.7198 13.561 10.6628 14.0737 10.445C14.5863 10.2272 15.0245 9.85839 15.3328 9.38517C15.6411 8.91195 15.8057 8.3556 15.8057 7.78646C15.8048 7.02354 15.5089 6.29212 14.983 5.75266C14.457 5.21319 13.7438 4.90973 13 4.90886Z" fill="#EE4D2D"></path>
                                                                    <path d="M1.12988 16.1979H24.8701C24.9846 16.1979 25.0944 16.2445 25.1753 16.3275C25.2563 16.4106 25.3018 16.5232 25.3018 16.6406C25.3018 16.758 25.2563 16.8706 25.1753 16.9536C25.0944 17.0367 24.9846 17.0833 24.8701 17.0833H1.12988C1.0154 17.0833 0.905615 17.0367 0.824667 16.9536C0.743719 16.8706 0.698242 16.758 0.698242 16.6406C0.698242 16.5232 0.743719 16.4106 0.824667 16.3275C0.905615 16.2445 1.0154 16.1979 1.12988 16.1979Z" fill="#EE4D2D"></path>
                                                                    <path d="M1.12988 18.4115H24.8701C24.9846 18.4115 25.0944 18.4581 25.1753 18.5412C25.2563 18.6242 25.3018 18.7368 25.3018 18.8542C25.3018 18.9716 25.2563 19.0842 25.1753 19.1672C25.0944 19.2503 24.9846 19.2969 24.8701 19.2969H1.12988C1.0154 19.2969 0.905615 19.2503 0.824667 19.1672C0.743719 19.0842 0.698242 18.9716 0.698242 18.8542C0.698242 18.7368 0.743719 18.6242 0.824667 18.5412C0.905615 18.4581 1.0154 18.4115 1.12988 18.4115Z" fill="#EE4D2D"></path>
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
                        </form>
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
                                    echo "<p>Giỏ hàng trống</p>"; // Or display a more appropriate message
                                }
                                ?>
                            </div>
                            <p class="total_before temporary fix">
                                <span>Tạm tính</span><span class="right"><?= $_SESSION['totalPrice'] ?></span>
                            </p>
                            <p class="ship-fee fix"><span>Phí vận chuyển</span><span class="right">-</span></p>

                            <p class="discount-fee fix"><span>Mã giảm giá</span><span class="right">-</span></p>

                            <p class="total temporary fix">
                                <span>Tổng cộng</span><span class="right" id="total_price"><?= $_SESSION['totalPrice'] ?></span>
                            </p>
                            <div class="continue-shopping">
                                <a href="index.php?act=giohang">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.09396 12.1875C6.15565 12.1878 6.21681 12.176 6.27392 12.1527C6.33103 12.1293 6.38297 12.095 6.42677 12.0515C6.47071 12.008 6.50558 11.9561 6.52938 11.899C6.55318 11.8419 6.56543 11.7806 6.56543 11.7187C6.56543 11.6568 6.55318 11.5956 6.52938 11.5384C6.50558 11.4813 6.47071 11.4295 6.42677 11.3859L2.53615 7.49997L6.42677 3.61403C6.51504 3.52576 6.56463 3.40604 6.56463 3.28121C6.56463 3.15639 6.51504 3.03667 6.42677 2.9484C6.33851 2.86014 6.21879 2.81055 6.09396 2.81055C5.96913 2.81055 5.84942 2.86014 5.76115 2.9484L1.5424 7.16715C1.49846 7.21073 1.46359 7.26257 1.43979 7.31969C1.416 7.37682 1.40374 7.43808 1.40374 7.49997C1.40374 7.56185 1.416 7.62311 1.43979 7.68024C1.46359 7.73736 1.49846 7.7892 1.5424 7.83278L5.76115 12.0515C5.80495 12.095 5.85689 12.1293 5.91401 12.1527C5.97112 12.176 6.03227 12.1878 6.09396 12.1875Z" fill="#EE4D2D"></path>
                                        <path d="M1.875 7.96875H13.125C13.2493 7.96875 13.3685 7.91936 13.4565 7.83146C13.5444 7.74355 13.5938 7.62432 13.5938 7.5C13.5938 7.37568 13.5444 7.25645 13.4565 7.16854C13.3685 7.08064 13.2493 7.03125 13.125 7.03125H1.875C1.75068 7.03125 1.63145 7.08064 1.54354 7.16854C1.45564 7.25645 1.40625 7.37568 1.40625 7.5C1.40625 7.62432 1.45564 7.74355 1.54354 7.83146C1.63145 7.91936 1.75068 7.96875 1.875 7.96875Z" fill="#EE4D2D"></path>
                                    </svg>
                                    Quay về giỏ hàng</a>
                                <form action="index.php?act=checkout" class="form_checkout" method="POST">
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