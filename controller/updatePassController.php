<?php
require_once 'model/updatePassModel.php';

class updatePassController {
    public $homeModel;

    function __construct() {
        $this->homeModel = new updatePassModel();
    }

    function home() {
        // $product = $this->homeModel->allProduct();
        require_once 'views/trangchu.php';
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
                            echo "<script>alert('Mật khẩu đã được thay đổi thành công!');</script>";
                        }else{
                            echo "<script>alert('Lỗi');</script>";
                        }
                    }else{
                        echo "<script>alert('Mật Khẩu không trùng nhau');</script>";
                    }
                }else{
                    echo "<script>alert('Mật khẩu hiện tại không đúng');</script>";
                }
            }
        }
    }

    



}
?>