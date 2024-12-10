<?php
require_once 'model/danhmucModel.php';
    class danhmucController{
        public $danhmucModel;
        function __construct(){
            $this->danhmucModel=new danhmucModel();
        }
        function list()
        {
            $soSP= $this->danhmucModel->SoluongSP();
            $soDH = $this->danhmucModel->soluongDH();
            $so = $this ->danhmucModel-> soluongtk();
            $category = $this->danhmucModel->allCTGR();
            require_once 'views/DM.php';
        }
    
        function insert()
        
        {
            $soSP= $this->danhmucModel->SoluongSP();
            $soDH = $this->danhmucModel->soluongDH();
            $so = $this ->danhmucModel-> soluongtk();
            require_once 'views/insertDM.php';
            if (isset($_POST['btn_insertCTGR'])) {
                $CTGRname = $_POST['cate_name'];
                if ($this->danhmucModel->insertCTGR($CTGRname)) {
                    echo "<script>
                    alert('Thêm danh mục thành công');
                    window.location.href = '?act=category';
                  </script>";                
                } else {
                    echo 'insert fail';
                }
            }
        }
    
        function deleteCTGR($id)
        {
            $soSP= $this->danhmucModel->SoluongSP();
            $so = $this ->danhmucModel-> soluongtk();
            if ($this->danhmucModel->deleteCTGR($id)) {
                header('location:index.php?act=category');
            } else {
                echo 'xóa không được mục sản phẩm này';
            }
        }
    
        function updateCTGR($id)
        {
            $soSP= $this->danhmucModel->SoluongSP();
            $soDH = $this->danhmucModel->soluongDH();
            $so = $this ->danhmucModel-> soluongtk();
            $oneCTGR = $this->danhmucModel->findCTGR($id);
            require_once 'views/updateDM.php';
            if (isset($_POST['btn_updateCTGR'])) {
                $id = $_POST['id'];
                $nameCTGR = $_POST['cate_name'];
                if ($this->danhmucModel->updateCTGR($id, $nameCTGR)) {
                    echo "<script>
                    alert('Sửa danh mục thành công');
                    window.location.href = '?act=category';
                  </script>";    
                } else {
                    echo "lỗi";
                }
            }
        }
    
}

?>