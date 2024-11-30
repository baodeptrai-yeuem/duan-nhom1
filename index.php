<?php
session_start();
ob_start();
//ket noi database
require_once 'commons/database.php';
//dangnhap
require_once 'controller/loginController.php';
require_once 'model/loginModel.php';
//dang ky
require_once 'controller/registerController.php';
require_once 'model/registerModel.php';
//trang ca nhan
require_once 'controller/profileController.php';
require_once 'model/profileModel.php';
//doi mat khau
require_once 'controller/updatePassController.php';
require_once 'model/updatePassModel.php';
//san pham 
require_once 'controller/sanphamController.php';
require_once 'model/sanphamModel.php';
// gio hang
require_once 'controller/cartController.php';
require_once 'controller/orderController.php';
require_once 'controller/orderItemController.php';


$act = $_GET['act'] ?? '/';


match ($act) {
    '/' => (new showSP())->showSP(),
    'dangky' => (new registerController())->dangky(),
    'gioithieu' => (new dashboardController())->gioithieu(),
    'lienhe' => (new dashboardController())->lienhe(),
    'sanpham' => (new Controller())->home1(),
    'detailpro' => (new Controller())->detailPro($_GET['id']),
    'dangnhap' => (new loginController())->login(),
    'dangxuat' => (new loginController())->logout(),
    'profile' => (new profileController())->profile(),
    'changePass' => (new updatePassController())->changePass(),
    'timkiem' => (new showSP())->timkiem(),
    'CTsanpham' => (new showSP())->chitietsanpham($_GET['id'],),
    'giohang' => (new cartController())->show_list_cart(),
    'muangay' => (new orderController())->show_cart_to_buy(),
    'checkout' => (new orderController())->checkout(),
    'lichsudonhang' => (new orderItemController())->show_list_orderItem(),
    'chitietdonhang' => (new orderItemController())->show_detail_orderItem()
    'CTsanpham' => (new showSP())->chitietsanpham($_GET['id']),
    'giohang' => (new cartController())->show_list_cart(),
    'muangay' => (new orderController())->show_cart_to_buy(),
    'checkout' => (new orderController())->checkout()
    'giohang' => (new cartController())->show_list_cart(),
    'muangay' => (new orderController())->show_cart_to_buy(),
    'checkout' => (new orderController())->checkout()
};
