<?php
require_once 'model/registerModel.php';
class registerController
{
    public $registerModel;
    function __construct()
    {
        $this->regisModel = new registerModel();
    }

    function dangky()
    {
        require_once 'views/dangki.php';
        if (isset($_POST['btn_dangky'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email    = $_POST['email'];
            $phone    = $_POST['phone'];
            $address  = $_POST['address'];
            if ($this->regisModel->dangky($username, $password, $email, $phone, $address)) {
                echo "<script>alert('Đăng ký thành công');</script>";
                header("location:?act=dangnhap");
            } else {
                echo "Lỗi";
            }
        }
    }
}
