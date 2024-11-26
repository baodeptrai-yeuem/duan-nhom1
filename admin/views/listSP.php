<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sản phẩm</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .content-area {
            padding: 20px;
        }
        .search-bar-container {
            position: relative;
            display: inline-block;
        }
        .search-bar-container .search-input {
            display: none;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 250px;
            padding: 8px 15px;
            border-radius: 50px;
            border: 1px solid #ced4da;
            z-index: 10;
            transition: all 0.3s ease;
        }

        .search-bar-container .search-btn {
            border-radius: 50px;
            padding: 8px 15px;
            font-size: 14px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-bar-container .search-btn:hover {
            background-color: #0056b3;
        }

        .search-bar-container.active .search-input {
            display: inline-block;
        }

        .search-bar-container.active .search-btn {
            background-color: #0056b3;
        }

        .product img {
            max-width: 100px;
            height: auto;
        }

        .product th, .product td {
            vertical-align: middle;
            text-align: center;
        }

        .product tbody tr {
            margin-bottom: 20px;
        }

        .product tbody tr:not(:last-child) {
            border-bottom: 2px solid #dee2e6;
        }

        .product thead {
            background-color: #007bff;
            color: white;
        }

        .btn {
            border-radius: 5px;
            padding: 8px 15px;
            font-size: 14px;
        }

        .btn-primary, .btn-outline-secondary {
            background-color: #007bff;
            color: white;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover, .btn-outline-secondary:hover {
            background-color: #0056b3;
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        @media (max-width: 768px) {
            .product th, .product td {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div>
        <?php require_once 'khung/header.php'; ?>
    </div>
    <div class="content-area">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="?act=insertproduct" class="btn btn-primary">Thêm sản phẩm</a>
            <div class="search-bar-container">
            </div>
        </div>

        <table class="table table-bordered table-striped product">
            <thead class="thead-dark">
                <tr>
                    <th>Mã Sp</th>
                    <th>Tên sp</th>
                    <th>Ảnh sp</th>
                    <th>Giá sp</th>
                    <th>Chi tiết sp</th>
                    <th>Số lượng</th>
                    <th>Lượt xem</th>
                    <th>Danh mục sp</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                $filteredProducts = [];

                foreach ($allProduct as $product) {
                    if (stripos($product['name'], $search) !== false) {
                        $filteredProducts[] = $product;
                    }
                }

                foreach($filteredProducts as $key => $rows): ?>
                <tr>
                    <td><?= $rows['id_sanpham'] ?></td>
                    <td><?= $rows['name'] ?></td>
                    <td><img src="../assets/img/<?= $rows['image'] ?>" alt=""></td>
                    <td><?= $rows['price']?></td>
                    <td><?= $rows['description'] ?></td>
                    <td><?= $rows['quantity'] ?></td>
                    <td><?= $rows['view'] ?></td>
                    <td><?= $rows['ten_danhmuc'] ?></td>
                    <td><a href="?act=updateSP&id=<?= $rows['id_sanpham'] ?>" class="btn btn-warning">Sửa</a></td>
                    <td>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="?act=deleteSP&id=<?= $rows['id_sanpham']?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function toggleSearch() {
            const searchContainer = document.querySelector('.search-bar-container');
            searchContainer.classList.toggle('active');
        }
    </script>
</body>
</html>
