<?php
    require_once 'commons/database.php';
    require_once 'controller/productController.php';
    require_once 'model/productModel.php';

    $act=$_GET['act']??'/';
    match ($act) {
        '/' => (new Controller()) -> home(),
        'dangky' => (new Controller()) -> dangky(),
        'gioithieu'          => (new dashboardController())->gioithieu(),
        'lienhe'          => (new dashboardController())->lienhe(),
        'sanpham'          =>(new Controller())->home1(),
        'detailpro' => (new Controller()) -> detailPro($_GET['id'])

        
    };
?>


