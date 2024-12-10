<?php

require_once 'model/loginModel.php';
class loginController
{
    public $accModel;
    function __construct()
    {
        $this->accModel = new loginModel();
    }
    public function login()
    {
        require_once 'views/dangnhap.php';
        if (isset($_POST['btn_login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->accModel->checkAcc($username, $password);


            if ($user) {
                $_SESSION['username'] = $user;
                $_SESSION['role'] = $this->accModel->Role($username)['role'];
                var_dump($_SESSION['role']);
                echo "<script>
                alert('Đăng nhập thành công');
                window.location.href = '?act=/';
              </script>";
            } else {
                echo "Sai tên đăng nhập hoặc mật khẩu";
            }
        }
    }

    function logout()
    {
        unset($_SESSION['username']);
        echo "<script>
        alert('Đăng xuất thành công');
        window.location.href = '?act=/';
      </script>";
    }
}
