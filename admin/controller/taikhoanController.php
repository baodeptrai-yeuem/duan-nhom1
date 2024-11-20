<?php
    class taikhoanController{
        public $taikhoanModel;
        function __construct(){
            $this-> taikhoanModel= new taikhoanModel();
        }
        function maganetk(){
            $list = $this -> taikhoanModel ->listtk();
            require_once 'views/maganetk.php';
        }
    
        function DeleteUser($id){
            $check = $this->taikhoanModel->DeleteUser($id);
            if($check){
                header("location: ?act=maganetk");
                
            }else{
                echo "lỗi";
            }
        }

        function soluongtk(){
            $so = $this -> taikhoanModel -> soluongtk();
            require_once 'views/khung/header.php';
        }
    }
?>