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
