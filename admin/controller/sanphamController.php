<?php
require_once 'model/sanphamModel.php';
class sanphamController
{
    public $sanphamModel;



    function __construct()
    {
        $this->sanphamModel = new sanphamModel();
    }
    function listProduct()
    {
        $soSP= $this->sanphamModel->SoluongSP();
        $soDH = $this->sanphamModel->soluongDH();
        $so = $this->sanphamModel->soluongtk();
        $allProduct = $this->sanphamModel->getAllProduct();
        require_once 'views/listSP.php';
    }

    function deleteProduct($id)
    {
        $soDH = $this->sanphamModel->soluongDH();
        $so = $this->sanphamModel->soluongtk();
        $check = $this->sanphamModel->deleteProduct($id);
        if ($check) {
            header("Location: ?act=listSP");
        } else {
            echo "Lỗi";
        }
    }

    function updateProduct($id)
    {
        $soSP= $this->sanphamModel->SoluongSP();
        $soDH = $this->sanphamModel->soluongDH();
        $so = $this->sanphamModel->soluongtk();
        $oneProduct = $this->sanphamModel->findProductById($id);
        $cateProduct = $this->sanphamModel->cateProduct();
        $cateName = $this->sanphamModel->cateName($oneProduct['id_cate']);
        require_once 'views/updateSP.php';

        if (isset($_POST['btn_update'])) {
            $oneProduct = $this->sanphamModel->findProductById($id);
            $cateProduct = $this->sanphamModel->cateProduct();
            $cateName = $this->sanphamModel->cateName($oneProduct['id_cate']);
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $detail = $_POST['description'];
            $cate_id = $_POST['cate'];

            if (empty($_FILES['img']['name'])) {
                $img = "";
            } else {
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, '../assets/img/' . $img);
            }

            if ($this->sanphamModel->updateProduct($id, $name, $img, $price, $detail,  $cate_id)) {
                echo "<script>
                alert('Sửa sản phẩm thành công');
                window.location.href = '?act=listSP';
              </script>";
            } else {
                echo "Lỗi";
            }
        }
    }

    function insertProduct()
    {
        $soSP= $this->sanphamModel->SoluongSP();
        $soDH = $this->sanphamModel->soluongDH();
        $so = $this->sanphamModel->soluongtk();
        $listCateName = $this->sanphamModel->listCateName();
        require_once 'views/insertSP.php';

        if (isset($_POST['btn_insert'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $cate_id = $_POST['cate'];


            if (empty($_FILES['img']['name'])) {
                $img = "";
            } else {
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, '../assets/img/' . $img);
            }


            if ($this->sanphamModel->insertProduct($name, $img, $price, $description, $cate_id)) {
                echo "<script>
                alert('Thêm sản phẩm thành công');
                window.location.href = '?act=listSP';
              </script>";
            } else {
                echo "Lỗi khi thêm sản phẩm";
            }
        }
    }


}
