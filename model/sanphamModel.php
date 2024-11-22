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
    }     
?>