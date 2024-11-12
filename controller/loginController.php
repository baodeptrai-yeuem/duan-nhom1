<?php
require_once 'model/loginModel.php';
class loginController{
    public $accModel;
    function __construct(){
        $this->accModel=new loginModel();
    }
    public function login() {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->accModel->checkAcc($username, $password);

            if ($user) {
                if ($user['role'] == 1) {
                    // Role 1: Admin
                    $_SESSION['user'] = $user;
                    $_SESSION['role'] = 'admin';
                    header("Location: /admin/");
                } else {
                    // Role 0: Người dùng
                    $_SESSION['user'] = $user;
                    $_SESSION['role'] = 'user';
                    header("Location: ?act=/");
                }
            } else {
                echo "Sai tên đăng nhập hoặc mật khẩu";
            }
        } else {
            echo "Vui lòng điền tên đăng nhập và mật khẩu.";
        }
    }
    
    function logout(){
        unset($_SESSION['user']);
        header('location: ../?act=/');
    }
}