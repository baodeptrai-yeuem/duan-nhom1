<?php
    class sanphamModel{
        public $conn;
        function __construct() {
            $this->conn = connectDB();
        }
        function showSP(){
            $sql = "SELECT * FROM sanpham";
            return $this->conn->query($sql)->fetchAll();
        }

        function listpro($kyw = "") {

            $sql = "SELECT * FROM sanpham WHERE name LIKE ? ORDER BY id_sanpham DESC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['%' . $kyw . '%']);
            return $stmt->fetchAll();
        }

        function chitietsanpham($id){
            $sql = "SELECT * FROM sanpham WHERE id_sanpham = $id";
            $stmt = $this->conn->query($sql);
            return $stmt->fetch();
        }
    }     
?>