<?php
require_once 'model/orderItemModel.php';

class orderItemController
{
    public $orderItemModel;
    function __construct()
    {
        $this->orderItemModel = new orderItemModel();
    }
    public function show_list_orderItem()
    {
        $list_order = $this->orderItemModel->getOrders($_SESSION['username']['id_user']);
        require_once 'views/donhangCT.php';


    }

        public function cancel_order()
     {
        if(isset($_POST['btn_updateST'])){
        $id_order = (int)$_POST['id_order'];
         var_dump($id_order);
         $status = "Đã hủy";
         $result = $this->orderItemModel->updateST($id_order, $status);
         if ($result) {
             $_SESSION['message'] = "Đơn hàng #$id_order đã được hủy thành công.";
         } else {
             $_SESSION['error'] = "Không thể hủy đơn hàng. Vui lòng thử lại.";
         }
         header('Location: ?act=lichsudonhang');
         exit;
        }

     }

    public function DHdagiao(){
        $list_order = $this->orderItemModel->getOrders($_SESSION['username']['id_user']);
        require_once 'views/DHhoanthanh.php';
    }
    public function DHdahuy(){
        $list_order = $this->orderItemModel->getOrders($_SESSION['username']['id_user']);
        require_once 'views/DHdahuy.php';
    }

    public function show_detail_orderItem()
    {
        $id_order = $_GET['id_order'];
        $id_user = $_SESSION['username']['id_user'];
        $list_detail_order = $this->orderItemModel->getDetailOrder($id_user, $id_order);

        $total_price = 0;
        foreach ($list_detail_order as $item) {
            $total_price = $item['total_price'];
        }
        require_once 'views/chitietdonhang.php';
    }
}
