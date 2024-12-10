<?php
class loginModel
{
    public $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }
    function checkAcc($user, $pass)
    {
        // $pass=sha1($pass);
        $sql = "SELECT * FROM user where username='$user' and password='$pass'";
        return $this->conn->query($sql)->fetch();
    }

    function Role($username)
    {
        $sql = "SELECT role from user WHERE username = '$username'";
        $stsm = $this->conn->query($sql);
        return $stsm->fetch();
    }
}
