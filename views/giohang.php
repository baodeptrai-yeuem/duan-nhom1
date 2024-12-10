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
    .main-step table th:first-child {
        width: 10%;
    }
    table tr th{
        width: 17%;
        text-align: center;


    }
    table tr td{
        height: 150px;
        text-align: center;
    }
    .btn{
        background-color: #EE4D2D;
        padding: 10px;
    }
    .the{
        padding: 10px;
    }
    .the button{
        margin-left: 20px;
        background-color: #EE4D2D;
        color: #fff;
        font-size: 16px;
        border : 0;
    }
    .the button a{
        background-color: #EE4D2D;
        color: #fff;
        font-size: 16px;
    }
    .the input{
        color: #fff;
        font-size: 16px;
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
                    <p class="title-bag"><span class="bold">Đơn hàng của bạn</span><span id="total_cart"></span></p>
                    <a href="https://savani.vn/">Tiếp tục mua hàng <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg"></svg></a>
                </div>
                <div class="the">
                    <input type="checkbox" onclick="selectAllCheckboxes()"> Chọn tất cả
                    <button><a href="javascript: void(0)" class="del-pro-link" onclick="deleteSelectedItems()">
                        <span>Xóa</span></button>
                    </a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Lựa chọn</th>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody id="list_cart" >
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 right-box">
                <div class="freeship">
                    <svg width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
                    <div class="text">
                        <p class="bold">Miễn phí giao hàng</p>
                        <p>Mua thêm <span class="for-freeship red">280,000đ</span> để được <span class="red">Freeship!</span></p>
                    </div>
                </div>
                <div class="total">
                    <p>
                        Tổng cộng: <span class="right" id="total_price">0000đ</span>
                    </p>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <form id="cartForm" action="index.php?act=muangay" method="post">
                            <input type="hidden" name="cartItems" id="cartItemsInput">
                            <input type="hidden" name="totalPrice" id="totalPriceInput">
                            <button type="button" onclick="purchaseSelectedItems()">Mua hàng</button>
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

function selectAllCheckboxes() {
    const checkboxes = document.querySelectorAll('.cartItemCheckbox');
    const isAllSelected = Array.from(checkboxes).every(checkbox => checkbox.checked);

    checkboxes.forEach(checkbox => {
        checkbox.checked = !isAllSelected;
    });

    totalPriceCart();
}

function deleteSelectedItems() {
    const checkboxes = document.querySelectorAll('.cartItemCheckbox:checked');
    if (checkboxes.length === 0) {
        alert('Bạn chưa chọn sản phẩm nào để xóa.');
        return;
    }

    const isConfirmed = confirm("Bạn có chắc chắn muốn xóa tất cả sản phẩm đã chọn?");
    if (!isConfirmed) {
        return;
    }

    const selectedIds = Array.from(checkboxes).map(checkbox => checkbox.getAttribute('data-id'));

    let cartItems = getCartItemsFromLocalStorage();
    cartItems = cartItems.filter(item => !selectedIds.includes(item.id.toString()));

    localStorage.setItem('cartItems', JSON.stringify(cartItems));

    selectedIds.forEach(id => {
        const itemRow = document.getElementById(`item-${id}`);
        if (itemRow) {
            itemRow.remove();
        }
    });

    totalPriceCart();
}

function totalPriceCart() {
    const checkboxes = document.querySelectorAll('.cartItemCheckbox:checked');
    let totalPrice = 0;

    checkboxes.forEach(checkbox => {
        const itemId = checkbox.getAttribute('data-id');
        const cartItems = getCartItemsFromLocalStorage();
        const item = cartItems.find(item => item.id == itemId);

        if (item && typeof item.price === 'number' && typeof item.quantity === 'number') {
            totalPrice += item.price * item.quantity;
        } else {
            console.error(`Sản phẩm có ID ${itemId} không có giá trị hợp lệ.`);
        }
    });

    document.getElementById('total_price').innerHTML = totalPrice.toFixed(3) + 'đ';
    document.getElementById('totalPriceInput').value = totalPrice.toFixed(3);
}

function updateQuantity(itemId, newQuantity) {
    const cartItems = getCartItemsFromLocalStorage();
    const itemIndex = cartItems.findIndex(item => item.id == itemId);

    if (itemIndex !== -1) {
        cartItems[itemIndex].quantity = newQuantity;
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        totalPriceCart();
        updateCartItemRow(itemId, cartItems[itemIndex]);
    }
}

function updateCartItemRow(itemId, item) {
    const row = document.getElementById(`item-${itemId}`);
    if (row) {
        row.querySelector('.quantity').value = item.quantity;
        row.querySelector('.money-per-prd').innerText = (item.price * item.quantity).toFixed(3) + 'đ';
    }
}

function increaseQuantity(itemId) {
    const cartItems = getCartItemsFromLocalStorage();
    const item = cartItems.find(item => item.id == itemId);
    if (item) {
        updateQuantity(itemId, item.quantity + 1);
    }
}

function decreaseQuantity(itemId) {
    const cartItems = getCartItemsFromLocalStorage();
    const item = cartItems.find(item => item.id == itemId);
    if (item && item.quantity > 1) {
        updateQuantity(itemId, item.quantity - 1);
    }
}

function purchaseSelectedItems() {
    const checkboxes = document.querySelectorAll('.cartItemCheckbox:checked');
    if (checkboxes.length === 0) {
        alert('Bạn chưa chọn sản phẩm nào để mua. Vui lòng chọn sản phẩm trước khi tiếp tục.');
        return;
    }

    const selectedItems = [];
    checkboxes.forEach(checkbox => {
        const itemId = checkbox.getAttribute('data-id');
        const cartItems = getCartItemsFromLocalStorage();
        const item = cartItems.find(item => item.id == itemId);
        if (item) {
            selectedItems.push(item);
        }
    });

    document.getElementById('cartItemsInput').value = JSON.stringify(selectedItems);
    document.getElementById('cartForm').submit();
}

function getCartItemsFromLocalStorage() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    return cartItems;
}

function removeCartItemById(itemId) {
    const cartItems = getCartItemsFromLocalStorage();
    const updatedCartItems = cartItems.filter(item => item.id !== itemId); 

    localStorage.setItem('cartItems', JSON.stringify(updatedCartItems));

    const itemRow = document.getElementById(`item-${itemId}`);
    if (itemRow) {
        itemRow.remove();
    }

    totalPriceCart(); 
}

const cartItems = getCartItemsFromLocalStorage();
cartItems.forEach(item => {
    const detailCart = document.createElement('tr');
    detailCart.id = `item-${item.id}`;
    detailCart.innerHTML = `
        <td><input type="checkbox" class="cartItemCheckbox" data-id="${item.id}" onchange="totalPriceCart()"></td>
        <td>
            <img class="img-fluid rounded" src="./assets/img/${item.image}" alt="${item.name}">
        </td>
        <td>
            <a href="?act=CTsanpham&id=${item.id}" class="name h5 text-dark text-decoration-none">${item.name}</a>
        </td>
        <td>${item.price.toFixed(3)}đ</td>
        <td>
            <button onclick="decreaseQuantity(${item.id})">-</button>
            <input id="quantity-${item.id}" class="quantity" type="text" value="${item.quantity}" disabled>
            <button onclick="increaseQuantity(${item.id})">+</button>
        </td>
        <td class="money-per-prd money-sprd-${item.id}">
            ${(item.price * item.quantity).toFixed(3)}đ
        </td>
    `;
    list_cart.appendChild(detailCart);
});

totalPriceCart();

</script>

</body>
</html>
