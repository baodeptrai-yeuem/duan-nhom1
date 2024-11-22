<?php
    class profileModel{
        public $conn;
        function __construct() {
            $this->conn = connectDB();
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
    
    }
?>