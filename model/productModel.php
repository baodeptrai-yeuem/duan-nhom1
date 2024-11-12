<?php
class Model {
    public $conn;
    function __construct() {
        $this->conn = connectDB();
    }

    function allProduct() {
        $sql = "SELECT * FROM sanpham";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function dangky($username, $password, $email, $phone, $address){
        $sql ="INSERT INTO user(username, password, email, phone, address) values ('$username', '$password', '$email', '$phone' ,'$address')";
        $stsm=$this->conn->prepare($sql);
        return $stsm->execute();
    }

    





}
?>