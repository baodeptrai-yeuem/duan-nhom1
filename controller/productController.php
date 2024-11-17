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


    function changePass(){
        require_once 'views/doimk.php'; 
        if(isset($_SESSION['username']['username'])){
            $username = $_SESSION['username']['username'];
            if (isset($_POST['btn_updatemk'])) {  
                $mkcu = $_POST['mkcu'];
                $mkmoi = $_POST['mkmoi'];
                $nhaplaimk = $_POST['nhaplaimk'];

                if($this->homeModel->checkOldPass($username,$mkcu)){
                    if($nhaplaimk == $mkmoi){
                        if($this->homeModel->updatePass($username,$mkmoi)){
                            echo "doi mk x";
                        }else{
                            echo "loi";
                        }
                    }else{
                        echo "mat khau deo trung";
                    }
                }else{
                    echo "mk cu k chinh xac";
                }
            }
        }
    }

    



}
?>