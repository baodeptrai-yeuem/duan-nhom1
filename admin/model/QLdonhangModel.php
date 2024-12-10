<?php
class orderItemModel
{
    public $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }
    function getOrders()
    {
        $sql = "SELECT * , `order`.id as orderid FROM `order` JOIN user ON order.id_user = user.id_user  ORDER BY `order`.id DESC";
        return $this->conn->query($sql)->fetchAll();
    }
    function getDetailOrder($id_user, $id_order)
    {
        $sql = "SELECT oi.*, sp.*, o.*, u.username 
                FROM `order_item` oi
                INNER JOIN `order` o ON oi.id_order = o.id
                INNER JOIN `sanpham` sp ON oi.id_sanpham = sp.id_sanpham
                INNER JOIN `user` u ON oi.id_user = u.id_user
                WHERE oi.id_order = :id_order AND oi.id_user = :id_user";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id_order', $id_order);
        $stmt->bindParam(':id_user', $id_user);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    
    function soluongtk(){
        $sql = "SELECT COUNT(*) as soluongtk FROM user";
        return $this -> conn -> query($sql) -> fetch();
    }
    function SoluongDH(){
        $sql = "SELECT COUNT(*) as soluongDH FROM `order`";
        return $this->conn->query($sql)->fetch();
    }
    function SoluongSP(){
        $sql = "SELECT COUNT(*) as soluongSP FROM `sanpham`";
        return $this->conn->query($sql)->fetch();
    }

    function UpdateStatus($id,$status_order){
        $sql = "UPDATE `order` SET status_order = '$status_order', ngayUpdate = NOW() where id = '$id'";
        return $this->conn->prepare($sql)->execute();
    }

    function checkOrderStatus($order_id)
    {
        $sql = "SELECT status_order FROM `order` WHERE id = :order_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':order_id' => $order_id]);
        $order = $stmt->fetch();
        return $order ? $order['status_order'] : null;
    }

}
