<?php
    class binhluanModel{
        public $conn;
        function __construct(){
            $this->conn=connectDB();
        }

        function binhluan(){
            $sql = "SELECT * FROM binhluan";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll();
        }
        function getIdBinhluan($id){
            $sql = "SELECT * FROM binhluan WHERE id_binhluan = $id";
            $stmt = $this->conn->query($sql);
            return $stmt->fetch();
        }
        function DeleteBinhluan($id){
            $sql = "DELETE FROM binhluan WHERE id_binhluan = $id";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
        function soluongtk()
        {
            $sql = "SELECT COUNT(*) as soluongtk FROM user";
            return $this->conn->query($sql)->fetch();
        }
    }

?>