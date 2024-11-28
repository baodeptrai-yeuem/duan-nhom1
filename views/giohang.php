<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gio hang</title>

    <link rel="stylesheet" type="text/css" media="screen" href="https://savani.vn/modules/products/assets/css/step.css?v=8.65" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://savani.vn/templates/default/scss/font-awesome/css/font-awesome.css?v=8.65" />

    <?php require_once 'khung/style_link.php'; ?>


</head>
<style>
    .main-step .right-box .total button {
        border: none;
        display: block;
        width: 100%;
        padding: 10px;
        background: #EE4D2D;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        font-size: 16px;
        margin-bottom: 15px;
    }
</style>

<body>
    <header>
        <?php require_once 'khung/header.php'; ?>
    </header>

    <div class="main-step">
        <div class="row">
            <div class="col-md-8">
                <div class="flex-top">
                    <p class="title-bag"><span class="bold">Đơn hàng của bạn</span><span id="total_cart"></span>
                    </p>
                    <a href="https://savani.vn/">Tiếp tục mua hàng <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.38305 10.9283C7.32233 10.9287 7.26213 10.9161 7.20591 10.8912C7.14969 10.8663 7.09855 10.8297 7.05544 10.7833C7.01219 10.7368 6.97786 10.6816 6.95443 10.6206C6.93101 10.5597 6.91895 10.4944 6.91895 10.4284C6.91895 10.3624 6.93101 10.2971 6.95443 10.2361C6.97786 10.1752 7.01219 10.1199 7.05544 10.0735L10.8853 5.92932L7.05544 1.78517C6.96855 1.69104 6.91973 1.56337 6.91973 1.43024C6.91973 1.29712 6.96855 1.16945 7.05544 1.07531C7.14233 0.981182 7.26017 0.928299 7.38305 0.928299C7.50593 0.928299 7.62378 0.981182 7.71067 1.07531L11.8636 5.57439C11.9068 5.62086 11.9411 5.67615 11.9646 5.73707C11.988 5.79799 12.0001 5.86332 12.0001 5.92932C12.0001 5.99531 11.988 6.06065 11.9646 6.12157C11.9411 6.18248 11.9068 6.23777 11.8636 6.28424L7.71067 10.7833C7.66755 10.8297 7.61642 10.8663 7.5602 10.8912C7.50398 10.9161 7.44378 10.9287 7.38305 10.9283Z" fill="#232020"></path>
                            <path d="M11.5358 6.42922H0.461433C0.339053 6.42922 0.221686 6.37655 0.135151 6.2828C0.0486151 6.18905 0 6.0619 0 5.92931C0 5.79673 0.0486151 5.66958 0.135151 5.57583C0.221686 5.48208 0.339053 5.42941 0.461433 5.42941H11.5358C11.6582 5.42941 11.7756 5.48208 11.8621 5.57583C11.9486 5.66958 11.9973 5.79673 11.9973 5.92931C11.9973 6.0619 11.9486 6.18905 11.8621 6.2828C11.7756 6.37655 11.6582 6.42922 11.5358 6.42922Z" fill="#232020"></path>
                        </svg>
                    </a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody id="list_cart">
                        <!-- list cart -->
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 right-box">
                <div class="freeship">
                    <svg width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.58 10.8661L32.5588 7.14286L31.5788 5.35714C31.2932 4.81949 30.8713 4.37005 30.3572 4.05589C29.843 3.74173 29.2555 3.57441 28.6562 3.57143H21C21 2.62423 20.6313 1.71582 19.9749 1.04605C19.3185 0.376274 18.4283 0 17.5 0H3.5C2.57174 0 1.6815 0.376274 1.02513 1.04605C0.368749 1.71582 0 2.62423 0 3.57143V16.9643C0 17.9115 0.368749 18.8199 1.02513 19.4897C1.6815 20.1594 2.57174 20.5357 3.5 20.5357H3.5875C3.78833 21.5449 4.32489 22.4522 5.10627 23.1039C5.88766 23.7556 6.86581 24.1116 7.875 24.1116C8.88419 24.1116 9.86234 23.7556 10.6437 23.1039C11.4251 22.4522 11.9617 21.5449 12.1625 20.5357H22.8375C23.0383 21.5449 23.5749 22.4522 24.3563 23.1039C25.1377 23.7556 26.1158 24.1116 27.125 24.1116C28.1342 24.1116 29.1123 23.7556 29.8937 23.1039C30.6751 22.4522 31.2117 21.5449 31.4125 20.5357H31.6575C32.544 20.5357 33.3942 20.1764 34.021 19.5367C34.6478 18.8971 35 18.0296 35 17.125V12.5C34.9999 11.9276 34.8553 11.3648 34.58 10.8661ZM31.5 8.92857L32.4625 10.7143L32.9525 11.6071H27.125C26.8929 11.6071 26.6704 11.5131 26.5063 11.3456C26.3422 11.1782 26.25 10.9511 26.25 10.7143V9.82143C26.25 9.58463 26.3422 9.35753 26.5063 9.19008C26.6704 9.02264 26.8929 8.92857 27.125 8.92857H31.5ZM7.875 22.3214C7.26367 22.3195 6.67216 22.1 6.20253 21.7006C5.73289 21.3013 5.41458 20.7472 5.3025 20.1339C5.26732 19.9727 5.24971 19.808 5.25 19.6429C5.25 18.9325 5.52656 18.2512 6.01884 17.7488C6.51113 17.2465 7.17881 16.9643 7.875 16.9643C8.57119 16.9643 9.23887 17.2465 9.73116 17.7488C10.2234 18.2512 10.5 18.9325 10.5 19.6429C10.5003 19.808 10.4827 19.9727 10.4475 20.1339C10.3354 20.7472 10.0171 21.3013 9.54747 21.7006C9.07784 22.1 8.48633 22.3195 7.875 22.3214ZM12.1625 18.75V18.6696C12.1111 18.4292 12.0409 18.1933 11.9525 17.9643L11.8125 17.6786C11.7472 17.5301 11.6712 17.3869 11.585 17.25L11.375 16.9643C11.289 16.8451 11.1955 16.7317 11.095 16.625C11.0171 16.5321 10.9323 16.4456 10.8412 16.3661L10.5 16.0714C10.4043 15.9978 10.305 15.9293 10.2025 15.8661L9.8 15.6429L9.49375 15.5C9.33097 15.4358 9.16439 15.3821 8.995 15.3393L8.75 15.2679C8.20198 15.1487 7.63552 15.1487 7.0875 15.2679L6.81625 15.3393C6.64686 15.3821 6.48028 15.4358 6.3175 15.5L6.01125 15.6429L5.60875 15.8661C5.48532 15.9273 5.36553 15.9959 5.25 16.0714L4.9175 16.3571C4.82649 16.4366 4.74165 16.5232 4.66375 16.6161C4.55993 16.7254 4.46347 16.8417 4.375 16.9643C4.305 17.0625 4.235 17.1518 4.165 17.2589C4.07885 17.3958 4.0028 17.5391 3.9375 17.6875C3.9375 17.7857 3.84125 17.875 3.7975 17.9732C3.70915 18.2022 3.63892 18.4381 3.5875 18.6786V18.7589H3.5C3.03587 18.7589 2.59075 18.5708 2.26256 18.2359C1.93437 17.901 1.75 17.4468 1.75 16.9732V3.57143C1.75 3.09783 1.93437 2.64362 2.26256 2.30874C2.59075 1.97385 3.03587 1.78571 3.5 1.78571H17.5C17.9641 1.78571 18.4092 1.97385 18.7374 2.30874C19.0656 2.64362 19.25 3.09783 19.25 3.57143V11.6071H6.125C5.89294 11.6071 5.67038 11.7012 5.50628 11.8687C5.34219 12.0361 5.25 12.2632 5.25 12.5C5.25 12.7368 5.34219 12.9639 5.50628 13.1313C5.67038 13.2988 5.89294 13.3929 6.125 13.3929H19.25V18.75H12.1625ZM27.125 22.3214C26.5137 22.3195 25.9222 22.1 25.4525 21.7006C24.9829 21.3013 24.6646 20.7472 24.5525 20.1339C24.5173 19.9727 24.4997 19.808 24.5 19.6429C24.5 18.9325 24.7766 18.2512 25.2688 17.7488C25.7611 17.2465 26.4288 16.9643 27.125 16.9643C27.8212 16.9643 28.4889 17.2465 28.9812 17.7488C29.4734 18.2512 29.75 18.9325 29.75 19.6429C29.7503 19.808 29.7327 19.9727 29.6975 20.1339C29.5854 20.7472 29.2671 21.3013 28.7975 21.7006C28.3278 22.1 27.7363 22.3195 27.125 22.3214ZM33.25 17.125C33.2477 17.5553 33.0792 17.9672 32.781 18.2715C32.4829 18.5757 32.0791 18.7477 31.6575 18.75H31.4125V18.6696C31.3611 18.4292 31.2909 18.1933 31.2025 17.9643L31.0625 17.6786C30.9972 17.5301 30.9212 17.3869 30.835 17.25C30.765 17.1429 30.695 17.0536 30.625 16.9554C30.539 16.8361 30.4455 16.7228 30.345 16.6161C30.2671 16.5232 30.1823 16.4366 30.0912 16.3571L29.75 16.0714C29.6543 15.9978 29.555 15.9293 29.4525 15.8661L29.05 15.6429L28.7437 15.5C28.581 15.4358 28.4144 15.3821 28.245 15.3393L28 15.2679C27.452 15.1487 26.8855 15.1487 26.3375 15.2679L26.0662 15.3393C25.8969 15.3821 25.7303 15.4358 25.5675 15.5L25.2612 15.6429L24.8587 15.8661C24.7353 15.9273 24.6155 15.9959 24.5 16.0714L24.1675 16.3571C24.0765 16.4366 23.9917 16.5232 23.9137 16.6161C23.8099 16.7254 23.7135 16.8417 23.625 16.9643L23.415 17.2589C23.3288 17.3958 23.2528 17.5391 23.1875 17.6875L23.0475 17.9732C22.9591 18.2022 22.8889 18.4381 22.8375 18.6786V18.7589H21V5.35714H28.6562C28.9404 5.35764 29.2193 5.43573 29.464 5.58331C29.7086 5.73089 29.9101 5.94259 30.0475 6.19643L30.5638 7.14286H27.125C26.4288 7.14286 25.7611 7.42506 25.2688 7.92739C24.7766 8.42972 24.5 9.11103 24.5 9.82143V10.7143C24.5 11.4247 24.7766 12.106 25.2688 12.6083C25.7611 13.1107 26.4288 13.3929 27.125 13.3929H33.25V17.125Z" fill="#232020"></path>
                    </svg>
                    <div class="text">
                        <p class="bold">Miễn phí giao hàng</p>
                        <p>Mua thêm
                            <span class="for-freeship red">
                                280,000đ
                            </span>
                            để được
                            <span class="red">Freeship!</span>
                        </p>
                    </div>
                </div>
                <div class="total">
                    <p>
                        Tổng cộng: <span class="right" id="total_price">0,000đ</span>
                    </p>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <form id="cartForm" action="index.php?act=muangay" method="post">
                            <input type="hidden" name="cartItems" id="cartItemsInput">
                            <input type="hidden" name="totalPrice" id="totalPriceInput">
                            <button type="submit">Mua hàng</button>
                        </form>
                    <?php } else { ?>
                        <a href="index.php?act=dangnhap" onclick="return confirm('Vui lòng đăng nhập để tiếp tục.');">Vui lòng đăng nhập</a>
                    <?php } ?>
                    <p class="code-alert">Mã giảm giá vui lòng chọn ở bước thanh toán</p>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <?php require_once 'khung/footer.php'; ?>
    </footer>

    <script>
        const list_cart = document.getElementById('list_cart');

        // só sán phẩm trong giỏ hàng
        function removeCartItemById(itemId) {
            const confirmed = confirm(`Bạn có chắc muốn xóa: ${itemId}?`);
            if (confirmed) {
                console.log(`Removing item with ID: ${itemId}`);
                const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                const updatedCartItems = cartItems.filter(item => item.id !== itemId);
                localStorage.setItem('cartItems', JSON.stringify(updatedCartItems));
                window.location.reload();
            } else {
                console.log('Item removal cancelled.');
            }
        }


        function getCartItemsFromLocalStorage() {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            return cartItems; // Return the array of cart items
        }

        function totalPriceCart() {
            const cartItems = getCartItemsFromLocalStorage();
            let totalPrice = 0;
            cartItems.forEach(item => {
                totalPrice += item.total;
            });
            total_price = document.getElementById('total_price').innerHTML = totalPrice.toFixed(3);
            document.getElementById('totalPriceInput').value = JSON.stringify(total_price);

        }
        totalPriceCart()

        const cartItems = getCartItemsFromLocalStorage();
        document.getElementById('cartItemsInput').value = JSON.stringify(cartItems);

        cartItems.forEach(item => {
            const detailCart = document.createElement('tr');

            detailCart.innerHTML = `
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                               <img class="img" src="./assets/img/${item.image}" alt="Sản phẩm 1" class="hinh-anh-san-pham">
                            </div>
                            <div class="col-md-9">
                             <a href="?act=CTsanpham&id=${item.id}" class="name">${item.name}</a>

                                <span class="discount-buy-multi">
                                </span>

                                <div class="bottom">
                                    <a href="javascript: void (0)" class="del-pro-link" data-id="1535" onclick="removeCartItemById(${item.id})">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.0625 5.0625H3.9375V17.4375H14.0625V5.0625Z" stroke="#232020" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M15.1875 2.8125H2.8125V5.0625H15.1875V2.8125Z" stroke="#232020" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M6.75 2.8125V0.5625H11.25V2.8125" stroke="#232020" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M7.3125 7.875V17.4375" stroke="#232020" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.6875 7.875V17.4375" stroke="#232020" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Xóa</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        ${item.price.toFixed(3)}đ
                    <td>
                        <div class="count-number">
                            <input id="quantity-44081" class="quantity" type="text" value="${item.quantity}" disabled="">
                        </div>
                    </td>
                    <td class="money-per-prd money-sprd-4408">
                        ${item.total.toFixed(3)}đ
                        </td>
                `;
            list_cart.appendChild(detailCart);
        });
    </script>

</body>

</html>