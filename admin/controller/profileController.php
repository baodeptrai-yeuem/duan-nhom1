<?php
    class taikhoanController{
        public $taikhoanModel;
        function __construct(){
            $this-> taikhoanModel= new taikhoanModel();
        }
        function maganetk(){
            $so = $this -> taikhoanModel -> soluongtk();
            $list = $this -> taikhoanModel ->listtk();
            require_once 'views/adminProfile.php';
        }
    
        function DeleteUser($id){
            $so = $this -> taikhoanModel -> soluongtk();
            $check = $this->taikhoanModel->DeleteUser($id);
            if($check){
                header("location: ?act=maganetk");
                
            }else{
                echo "lỗi";
            }
        }
    }
?>