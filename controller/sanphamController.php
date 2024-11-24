<?php
    require_once 'model/sanphamModel.php';
    class showSP{
        public $SP;
        function __construct() {
            $this->SP = new sanphamModel();
        }
        function showSP(){
            $sanpham = $this ->SP->showSP();
            if (isset($_POST['btn_search'])) {
                $kyw = $_POST['search'];
                $sanpham = $this->SP->listpro($kyw);
            }
            require_once 'views/trangchu.php';
        }
        function timkiem(){
            $sanpham = $this ->SP->showSP();
            if (isset($_POST['btn_search'])) {
                $kyw = $_POST['search'];
                $sanpham = $this->SP->listpro($kyw);
            }
            require_once 'views/timkiem.php';
        }
    }
?>