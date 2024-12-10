<?php
class thongkeModel {
    public $conn;
    function __construct(){
        $this->conn = connectDB();
    }

    function statistics($start_date,$end_date){
        $sql="select coalesce(sum(total_price),0) as total, coalesce(count(*),0) as total_orders, coalesce(sum(case when status_order = 'Đã hủy' then 1 else 0 end),0) as canceled_orders from `order`   where ngaydat between '$start_date' and '$end_date'";
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute();
        return $stmt->fetch();
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

}
?>