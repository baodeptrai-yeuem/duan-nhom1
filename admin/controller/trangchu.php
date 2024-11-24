<?php
class dashboardController{
    public $trangchu;
    function __construct(){
        $this-> taikhoanModel= new taikhoanModel();
    }
    function dashboard(){
        $so = $this -> taikhoanModel -> soluongtk();
        require_once 'views/trangchu.php';
    }
}
?>