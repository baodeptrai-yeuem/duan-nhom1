<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="../assets/cssadmin/maganetk.css">
</head>
<body>
    <div>
    <?php
        require_once 'khung/header.php';
    ?>
    </div>
    <div class="content-area">
        <div class="container-main">
        <h1>Quản Lý Tài Khoản</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Adress</th>
                    <th>Actions</th>
                    <th>Lock</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <?php
                foreach($list as $key => $row){
            ?>
            <tbody>
                <tr>
                    <td><?= $row['id_user']?></td>
                    <td><?= $row['username']?></td>
                    <td><?= $row['password']?></td>
                    <td><?= $row['email']?></td>
                    <td><?= $row['phone']?></td>
                    <td><?= $row['address']?></td>
                    <td><?= $row['role']?></td>
                    <td><button class="edit-btn" href="?act=updatetk&id=<?= $row['id_user'] ?>">Khóa tài khoản</button></td>
                    <td><a  href="?act=deletetk&id=<?= $row['id_user']?>"><button onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"  class="delete-btn" >Xóa</button></a></td>
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