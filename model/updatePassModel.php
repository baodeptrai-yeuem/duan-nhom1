<?php
class updatePassModel {
    public $conn;
    function __construct() {
        $this->conn = connectDB();
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