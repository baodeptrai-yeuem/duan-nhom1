<?php
    class taikhoanController{
        public $taikhoanModel;
        function __construct(){
            $this-> taikhoanModel= new taikhoanModel();
        }
        function maganetk(){
            $soSP= $this->taikhoanModel->SoluongSP();
            $soDH = $this->taikhoanModel->soluongDH();
            $so = $this -> taikhoanModel -> soluongtk();
            $list = $this -> taikhoanModel ->listtk();
            require_once 'views/maganetk.php';
        }
    
        function DeleteUser($id){
            $soSP= $this->taikhoanModel->SoluongSP();
            $soDH = $this->taikhoanModel->soluongDH();
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