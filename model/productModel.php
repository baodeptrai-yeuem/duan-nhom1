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

    function updateProfile($username, $email, $phone, $address){
        $sql = "UPDATE user SET email = '$email', phone = '$phone', address = '$address' WHERE username = '$username'";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }

    function getProfile($id){
        $sql = "SELECT * FROM user WHERE id_user = '$id'";
        return $this->conn->query($sql)->fetch();
    }

    function showProfile(){
            $sql = "SELECT * FROM user";
            return $this->conn->query($sql)->fetch();

    }
    function getProfileByUsername($username){
        return $this->conn->query("SELECT * FROM user WHERE username='$username'")->fetch();
    }

    function checkOldPass($username,$mkcu){
        $sql="SELECT password FROM user where username='$username'";
        $checkPass = $this->conn->prepare($sql);
        $checkPass->execute();
        $result = $checkPass->fetch();
        if ($result && $result['password'] === $mkcu) {
            return true;
        } else {
            return false;
        }
    }
    function updatePass($username, $mkmoi){
        $sql = "UPDATE user set password = '$mkmoi' WHERE username = '$username'";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }

    

    





}
?>