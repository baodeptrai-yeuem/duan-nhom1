<?php
    require_once 'model/sanphamModel.php';
    class showSP{
        public $SP;
        function __construct() {
            $this->SP = new sanphamModel();
        }
        function showSP(){
            $sanpham = $this ->SP->showSP();
            require_once 'views/trangchu.php';
        }
    }
?>