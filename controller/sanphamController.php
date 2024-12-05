<?php
require_once 'model/sanphamModel.php';
class showSP
{
    public $SP;
    function __construct()
    {
        $this->SP = new sanphamModel();
    }
    function showSP()
    {
        $sanpham = $this->SP->showSP();
        if (isset($_POST['btn_search'])) {
            $kyw = $_POST['search'];
            $sanpham = $this->SP->listpro($kyw);
        }
        require_once 'views/trangchu.php';
    }
    function timkiem()
    {
        $sanpham = $this->SP->showSP();
        if (isset($_POST['btn_search'])) {
            $kyw = $_POST['search'];
            $sanpham = $this->SP->listpro($kyw);
        }
        require_once 'views/timkiem.php';
    }
    function chitietsanpham($id)
    {
        $sanpham = $this->SP->chitietsanpham($id);
        $binhluan = $this->SP->ShowBL();
        if (isset($_POST['btn_insertCM'])) {
            if (!isset($_SESSION['username']['username'])) {
                echo "<script>alert('Chưa đăng nhập, vui lòng đăng nhập để bình luận.')</script>";
                require_once 'views/dangnhap.php';
                return;
            }
            $id_user = $_SESSION['username']['id_user'];
            $username = $_SESSION['username']['username'];
            $noidung = $_POST['noidung'];
            $image = $_POST['img'];
            if ($this->SP->newComment($id_user, $noidung, $username,$id,$image)) {
                echo "<script>alert('Bình luận thành công.');</script>";
            } else {
                echo "<script>alert('Bình luận thất bại.')</script>";
            }
            echo "<script>window.location.href='?act=CTsanpham&id=$id';</script>";
            return;
        }
        require_once 'views/chitietsanpham.php';
    }
    function DMspAT(){
        $AT = $this->SP->DmSP();
        require_once 'views/DMaothun.php';
    }
    function DMspSM(){
        $SM = $this->SP->DmSP();
        require_once 'views/DMaoSomi.php';
    }
    function DMspPL(){
        $PL = $this->SP->DmSP();
        require_once 'views/DMaoPolo.php';
    }

}
