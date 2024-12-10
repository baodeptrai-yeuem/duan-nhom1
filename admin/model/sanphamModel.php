<?php
class sanphamModel{
    public $conn;
    function __construct(){
        $this->conn=connectDB();
    }
        function getAllProduct(){
            $sql="select * from sanpham join danhmuc on sanpham.id_cate=danhmuc.id_danhmuc ";
            return $this->conn->query($sql)->fetchAll();    
        }


        function findProductById($id){
            $sql="select * from sanpham where id_sanpham=$id";
            return $this->conn->query($sql)->fetch(); 
        }
        function deleteProduct($id){
            $sql = "DELETE FROM sanpham WHERE id_sanpham = $id";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
        function updateProduct($id, $name, $img, $price, $description, $cate_id) {
            if(empty($img)) {
                $sql = "UPDATE sanpham SET name='$name', price=$price, description='$description',  id_cate=$cate_id WHERE id_sanpham=$id";
            } else {
                $sql = "UPDATE sanpham SET name='$name', image='$img', price=$price, description='$description',  id_cate=$cate_id WHERE id_sanpham=$id";
            }
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
    


        function insertProduct($name, $img, $price, $description, $cate_id) {
            $sql = "INSERT INTO sanpham (name, image, price, description, id_cate) VALUES ('$name', '$img', '$price','$description', '$cate_id')";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }

        function SoluongSP(){
            $sql = "SELECT COUNT(*) as soluongSP FROM `sanpham`";
            return $this->conn->query($sql)->fetch();
        } 

        function soluongtk(){
            $sql = "SELECT COUNT(*) as soluongtk FROM user";
            return $this -> conn -> query($sql) -> fetch();
        }

        function headerCT() {
            $sql = "SELECT * FROM sanpham JOIN binhluan ON binhluan.image_sp = sanpham.image";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll();
        }
        function SoluongDH(){
            $sql = "SELECT COUNT(*) as soluongDH FROM `order`";
            return $this->conn->query($sql)->fetch();
        }

}
?>