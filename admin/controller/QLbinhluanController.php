<?php
require_once 'model/QLbinhluanModel.php';
    class binhluanController{
        public $binhluan;
        function __construct(){
            $this->binhluan = new binhluanModel();
        }
        function ShowBL(){
            $so = $this ->binhluan-> soluongtk();
            $BL = $this->binhluan->binhluan();
            require_once 'views/QLbinhluan.php';
        }
        function DeleteBL($id){
            if($this->binhluan->DeleteBinhluan($id)){
                echo "<script>alert('Xóa thành công bình luận.')</script>";
                header('location:?act=ShowBL');
            }else{
                echo "<script>alert('Xóa thất bại.')</script>";
            }
        }
    }
?>