
<?php
session_start();
ob_start();
//ket noi database
require_once '../commons/database.php';
//kết nối controller
require_once 'controller/sanphamController.php';
require_once 'controller/danhmucController.php';
require_once 'controller/trangchu.php';
require_once 'controller/taikhoanController.php';
require_once 'controller/QLbinhluanController.php';
require_once 'controller/QLdonhangController.php';

//kết nối model
require_once 'model/sanphamModel.php';
require_once 'model/danhmucModel.php';
require_once 'model/taikhoanModel.php';
require_once 'model/QLbinhluanModel.php';
require_once 'model/QLdonhangModel.php';
require_once 'model/thongkeModel.php';

$act = $_GET['act'] ?? '/';
match ($act) {
    //Quản lý danh mục
    '/'             => (new thongkeController())->statistics(),
    'category'      => (new danhmucController())->list(),
    'insertDM'      => (new danhmucController())->insert(),
    'deleteDM'      => (new danhmucController())->deleteCTGR($_GET["id"]),
    'updateDM'      => (new danhmucController())->updateCTGR($_GET["id"]),

    //Quản lý sản phẩm
    'listSP'   => (new sanphamController())->listProduct(),
    'deleteSP' => (new sanphamController())->deleteProduct($_GET['id']),
    'updateSP' => (new sanphamController())->updateProduct($_GET['id']),
    'insertproduct' => (new sanphamController())->insertProduct(),

    //Quản lý tài khoản
    'maganetk' => (new taikhoanController())->maganetk(),
    'deletetk' => (new taikhoanController())->DeleteUser($_GET['id']),

    //Quản lý bình luận
    'ShowBL'   => (new binhluanController())->ShowBL(),
    'DeleteBL' => (new binhluanController())->DeleteBL($_GET['id']),
    'QLdonhang' => (new orderItemController())->show_list_orderItem(),
    'DHchitiet' => (new orderItemController())->show_detail_orderItem(),


    default         => handleDefault($act)

};

function handleDefault($act)
{
    echo "Action '$act' is not recognized.";
}
?>
