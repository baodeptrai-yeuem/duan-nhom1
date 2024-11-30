<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Bình Luận</title>
    <link rel="stylesheet" href="../assets/cssadmin/maganetk.css">
    <style>
    .img {
        max-width: 100px;
        height: auto;
    }
    </style>
</head>
<body>
    <div>
    <?php
        require_once 'khung/header.php';
    ?>
    </div>
    <div class="content-area">
        <div class="container-main">
        <h1>Quản Lý Bình Luận</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nội dung</th>
                    <th>tên tài khoản</th>
                    <th>ID sản phẩm</th>
                    <th>Ảnh sản phẩm Được bình luận</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <?php
                foreach($BL as $key => $row){
            ?>
            <tbody>
                <tr>
                    <td><?= $row['id_binhluan']?></td>
                    <td><?= $row['noidung']?></td>
                    <td><?= $row['name_user']?></td>
                    <td><?= $row['id_sanpham']?></td>
                    <td><a href=""><img class="img" src="../assets/img/<?= $row['image_sp'] ?>" alt=""></td></a>
                    <td><a  href="?act=DeleteBL&id=<?= $row['id_binhluan']?>"><button onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"  class="delete-btn" >Xóa</button></a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>