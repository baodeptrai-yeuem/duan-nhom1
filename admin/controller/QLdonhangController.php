<?php
require_once 'model/QLdonhangModel.php';

class orderItemController
{
    public $orderItemModel;
    function __construct()
    {
        $this->orderItemModel = new orderItemModel();
    }
    public function show_list_orderItem()
    {
        if (isset($_POST['btn_update'])) {
            $current_status = $this->orderItemModel->checkOrderStatus($_POST['order_id']);
            $new_status = $_POST['status'];
            if ($new_status === $current_status) {
                echo "<script>alert('Trạng thái mới không được giống với trạng thái hiện tại.');</script>";
            } else {
                $this->orderItemModel->UpdateStatus($_POST['order_id'], $new_status);
                echo "<script>alert('Cập nhật trạng thái thành công.');</script>";
            }
        }
        $soDH = $this->orderItemModel->soluongDH();
        $so = $this -> orderItemModel -> soluongtk();
        $soSP= $this->orderItemModel->SoluongSP();
        $list_order = $this->orderItemModel->getOrders($_SESSION['username']['id_user']);
        require_once 'views/QLdonhang.php';
    }
    public function show_detail_orderItem()
    {
        $soSP= $this->orderItemModel->SoluongSP();
        $soDH = $this->orderItemModel->soluongDH();
        $so = $this -> orderItemModel -> soluongtk();
        $id_order = $_GET['id_order'];
        $id_user = $_SESSION['username']['id_user'];
        $list_detail_order = $this->orderItemModel->getDetailOrder($id_user, $id_order);
        $total_price = 0;
        foreach ($list_detail_order as $item) {
            $total_price = $item['total_price'];
        }
        require_once 'views/DHchitiet.php';
    }
    
}
