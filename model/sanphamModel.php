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
        function ShowBL(){
            $sql = "SELECT * FROM binhluan";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll();
        }
        function newComment($id_user,$noidung,$username,$id,$image
        ){
            $sql ="INSERT INTO binhluan (id_user, noidung, name_user, id_sanpham, image_sp) values ('$id_user','$noidung','$username', '$id', '$image')";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
    }     
?>