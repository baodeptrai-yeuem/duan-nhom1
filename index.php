<?php
    session_start();
    ob_start();
    require_once 'controller/loginController.php';
    require_once 'commons/database.php';
    require_once 'controller/productController.php';
    require_once 'model/productModel.php';
    require_once 'model/loginModel.php';

    $act = $_GET['act'] ?? '/';
    match ($act) {
        '/' => (new Controller())->home(),
        'dangky' => (new Controller())->dangky(),
        'gioithieu' => (new dashboardController())->gioithieu(),
        'lienhe' => (new dashboardController())->lienhe(),
        'sanpham' => (new Controller())->home1(),
        'detailpro' => (new Controller())->detailPro($_GET['id']),
        'dangnhap' => (new loginController())->login(),
        'dangxuat' => (new loginController())->logout(),
        'profile' => (new Controller())->profile(),
    };
?>
