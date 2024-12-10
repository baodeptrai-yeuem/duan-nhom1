<?php
class orderItemModel
{
    public $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }

    function getOrders($id)
    {
        $sql = "SELECT o.*, u.* 
                FROM `order` o 
                INNER JOIN `user` u ON o.id_user = u.id_user 
                WHERE o.id_user = $id
                ORDER BY o.id DESC";
        return $this->conn->query($sql)->fetchAll();
    }

    function updateST($id_order, $status)
    {
        $sql = "UPDATE `order` SET status_order = :status WHERE id = :id_order";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':status' => $status,
            ':id_order' => (int)$id_order,
        ]);
    }
    
    function getDetailOrder($id_user, $id_order)
    {
        $sql = "SELECT oi.*, sp.*, o.* 
                FROM `order_item` oi
                INNER JOIN `order` o ON oi.id_order = o.id
                INNER JOIN `sanpham` sp ON oi.id_sanpham = sp.id_sanpham
                WHERE oi.id_order = $id_order AND oi.id_user = $id_user";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
}
