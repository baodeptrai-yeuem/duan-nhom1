<?php
require_once 'models/homeModel.php';

class homeController {
    public $homeModel;

    function __construct() {
        $this->homeModel = new homeModel();
    }


}
?>