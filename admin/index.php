
<?php
session_start();
ob_start();
//ket noi database
require_once '../commons/database.php';
//kết nối controller
require_once 'controller/SPController.php';
require_once 'controller/DMController.php';
require_once 'controller/trangchu.php';
require_once 'controller/profileController.php';
//kết nối model
require_once 'model/SPController.php';
require_once 'model/DMModel.php';
require_once 'model/profileModel.php';

$act = $_GET['act'] ?? '/';
match ($act) {
    //Quản lý danh mục
    '/'             => (new dashboardController())->dashboard(),
    'category'          => (new danhmucController())->list(),
    'insertDM'      => (new danhmucController())-> insert(),
    'deleteDM'      => (new danhmucController())->deleteCTGR($_GET["id"]),
    'updateDM'      => (new danhmucController())->updateCTGR($_GET["id"]),

    //Quản lý sản phẩm
    'listSP'   => (new sanphamController())->listProduct(),
    'deleteSP' => (new sanphamController())->deleteProduct($_GET['id']),
    'updateSP' => (new sanphamController())->updateProduct($_GET['id']),
    'insertproduct' => (new sanphamController())->insertProduct(),

    //Quản lý tài khoản
    'maganetk' => (new taikhoanController())-> maganetk(),
    'deletetk' => (new taikhoanController()) ->DeleteUser($_GET['id']),
    default         => handleDefault($act)


};

function handleDefault($act) {
    echo "Action '$act' is not recognized.";
}
?>
