<?php
    class taikhoanController{
        public $taikhoanModel;
        function __construct(){
            $this-> taikhoanModel= new taikhoanModel();
        }
        function maganetk(){
            $so = $this -> taikhoanModel -> soluongtk();
            $list = $this -> taikhoanModel ->listtk();
            require_once 'views/maganetk.php';
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

        // function soluongtk(){

        //     require_once 'views/khung/header.php';
        // }
    }
?>