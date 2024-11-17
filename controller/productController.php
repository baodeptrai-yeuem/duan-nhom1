<?php
require_once 'model/productModel.php';

class Controller {
    public $homeModel;

    function __construct() {
        $this->homeModel = new Model();
    }

    function home() {
        $product = $this->homeModel->allProduct();
        if (isset($_POST['btn_search'])) {
            $kyw = $_POST['search'];
            $product = $this->homeModel->allProduct($kyw);
        }
        require_once 'views/trangchu.php';
    }

    function dangky(){
        require_once 'views/dangki.php';
        if(isset($_POST['btn_dangky'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email    = $_POST['email'];
            $phone    = $_POST['phone'];
            $address  = $_POST['address'];
            if($this->homeModel->dangky($username, $password, $email, $phone, $address)){
                header("location:?act=/");
            } else {
                echo "Lỗi";
            }
        }
    }

    function profile(){
        
        $show = $this->homeModel->getProfileByUsername($_SESSION['username']['username']);
        if(isset($_POST['btn_update'])){
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            if($this->homeModel->updateProfile($_SESSION['username']['username'], $email, $phone, $address)){
                header("location:?act=profile");
            }else{
                echo "loi";
            }
        }
        require_once 'views/profile.php';
    }


    function showProfile()
    {
        $profile = $this->homeModel->showProfile();
        require_once 'views/profile.php';
    }

    



}
?>