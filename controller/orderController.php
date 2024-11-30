<?php
require_once 'model/orderModel.php';
class orderController
{
    public $orderModel;
    function __construct()
    {
        $this->orderModel = new orderModel();
    }

    public function show_cart_to_buy()
    {
        $cartItemsJson = $_POST['cartItems'];
        $totalPriceJson = $_POST['totalPrice'];

        $cartItems = json_decode($cartItemsJson, true);
        $totalPrice = json_decode($totalPriceJson, true);


        $_SESSION['totalPrice'] = $totalPrice;
        $_SESSION['cartItems'] = $cartItems;

        require_once 'views/muahang.php';
    }

    public function checkout()
    {
        if (isset($_POST['btn_checkout_order'])) {

            $user_id =  $_SESSION['username']['id_user'];
            $status_order   = "Chờ xác nhận";
            $address_order  = $_SESSION['username']['address'];
            $total_price    = $_SESSION['totalPrice'];
            $method_pay     = 'CDO';
            $orderId = (int)$this->orderModel->checkout_order($user_id, $status_order, $address_order, $total_price, $method_pay);
            foreach ($_SESSION['cartItems'] as $item) {
                $this->orderModel->add_order_item($item['id'], $item['quantity'], $user_id, $orderId);
            }
            unset($_SESSION['cartItems']);
            echo "<script>alert('Thanh toán thành công. Mã đơn hàng của bạn là: " . $orderId . ". Vui lòng kiểm tra email để biết thêm chi tiết.');</script>";
            header("location:index.php");
            header("location:index.php?act=lichsudonhang");
            echo "<script>alert('Thanh toán thành công. Mã đơn hàng của bạn là: " . $orderId . ". Vui lòng kiểm tra email để biết thêm chi tiết.');</script>";
            header("location:index.php");
        }
    }
}
