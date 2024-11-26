<?php
    class danhmucModel{
    public $conn;
        function __construct(){
            $this->conn=connectDB();
        }
    
    function allCTGR(){
        $sql = "SELECT * FROM danhmuc";
        return $this->conn->query($sql);
    }
    
    function insertCTGR($CTGRname)
    {
        $sql = "INSERT INTO danhmuc VALUES(null,'$CTGRname')";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    
    function deleteCTGR($id){
        $sql = "DELETE FROM danhmuc where id_danhmuc ='$id'";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    
    function findCTGR($id)
    {
        $sql = "SELECT * FROM danhmuc WHERE id_danhmuc = $id";
        return $this->conn->query($sql)->fetch();
    }
    
    function updateCTGR($id, $nameCTGR){
        $sql = "UPDATE danhmuc set ten_danhmuc = '$nameCTGR' where id_danhmuc = '$id'";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    
    function listCateName(){
        return $this->conn->query("SELECT * FROM danhmuc")->fetchAll();
    }
    function productname(){
        return $this->conn->query("SELECT * FROM danhmuc")->fetchAll();
    }
    
    function cateProduct(){
        $sql="select * from danhmuc";
        return $this->conn->query($sql)->fetchAll();
    }
    
    function cateName($id){
        $sql="select * from danhmuc where id_danhmuc=$id";
        return $this->conn->query($sql)->fetch();
    }
    function soluongtk(){
        $sql = "SELECT COUNT(*) as soluongtk FROM user";
        return $this -> conn -> query($sql) -> fetch();
    }

}
?>