<?php
    require_once 'model/profileModel.php';
    class profileController{
        public $profileModel;
        function __construct() {
            $this->profileModel = new profileModel();
        }
        function profile(){
            $show = $this->profileModel->getProfileByUsername($_SESSION['username']['username']);
            
            if(isset($_POST['btn_update'])){
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                
                if($this->profileModel->updateProfile($_SESSION['username']['username'], $email, $phone, $address)){
                    header("location:?act=profile");
                    exit(); 
                } else {
                    echo "Có lỗi xảy ra, vui lòng thử lại!";
                }
            }
            
            if (isset($_GET['updated']) && $_GET['updated'] == 1) {
                echo "<script>alert('Sửa thành công');</script>";
            }
        
            require_once 'views/profile.php';
        }
    }
?>