<?php
class orderModel
{
    public $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }

    function checkout_order($id_user, $status_order, $address_order, $total_price, $method_pay)
    {
        $sql = "INSERT INTO `order`(id_user, status_order, address_order, total_price, method_pay) 
            VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        if ($stmt->execute([$id_user, $status_order, $address_order, $total_price, $method_pay])) {
            $last_id = $this->conn->lastInsertId();
            return $last_id; // Return the inserted ID
        } else {
            return false; // Or handle the error appropriately
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
