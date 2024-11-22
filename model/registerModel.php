<?php
    class registerModel{
        public $conn;
        function __construct() {
            $this->conn = connectDB();
        }
    
        function dangky($username, $password, $email, $phone, $address){
            $sql ="INSERT INTO user(username, password, email, phone, address) values ('$username', '$password', '$email', '$phone' ,'$address')";
            $stsm=$this->conn->prepare($sql);
            return $stsm->execute();
        }
    }
?>