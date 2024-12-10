<?php
class orderModel
{
    public $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }

    function checkout_order($id_user, $status_order, $address_order, $total_price, $method_pay, $ngaydat, $phone)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngaydat = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `order` (id_user, status_order, address_order, total_price, method_pay, ngaydat, phone) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt->execute([$id_user, $status_order, $address_order, $total_price, $method_pay, $ngaydat, $phone])) {
            $last_id = $this->conn->lastInsertId();
            return $last_id;
        } else {
            return false;
        }
    }

    function add_order_item($id_sanpham, $quantity, $id_user, $id_order)
    {

        $sql = "INSERT INTO `order_item`(id_sanpham, quantity, id_user, id_order) 
                    VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id_sanpham, $quantity, $id_user, $id_order]);
    }
}
