<?php
class thongkeController
{
    public $thongke;

    function __construct()
    {
        $this->thongke = new thongkeModel();
    }

    function statistics(){
        $soSP= $this->thongke->SoluongSP();
        $soDH = $this->thongke->soluongDH();
        $so = $this -> thongke -> soluongtk();
        if(isset($_POST['btn_statistics'])){
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $data = [];
            if($start_date && $end_date){
                $data = $this->thongke->statistics($start_date,$end_date);
            }
            
        }
        require_once 'views/trangchu.php';    
    }
}
