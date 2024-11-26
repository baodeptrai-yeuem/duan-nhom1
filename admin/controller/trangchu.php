<?php
class dashboardController
{
    public $taikhoanModel; // Unused property

    function __construct()
    {
        $this->taikhoanModel = new taikhoanModel();
    }

    function dashboard()
    {
        $so = $this->taikhoanModel->soluongtk(); // Fetches account count
        require_once 'views/trangchu.php'; // Includes the view
    }
}
