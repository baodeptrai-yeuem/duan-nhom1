<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            width: 60%;
            margin: 50px auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #343a40;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group p {
            font-weight: 600;
            color: #495057;
            margin-bottom: 8px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus, .form-group select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-group img {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            padding: 12px 24px;
            width: 100%;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 5px;
        }

        .error-message:empty {
            display: none;
        }
    </style>
</head>
<body>
    <?php require_once 'khung/header.php'; ?>
    <div class="content-area">
        <div class="wrapper">
            <h2>Sửa sản phẩm</h2>
            <form action="" method="post" enctype="multipart/form-data" class="insert">
                <input type="hidden" name="id" value="<?= $oneProduct['id_sanpham'] ?>">

                <div class="form-group">
                    <p>Tên sản phẩm</p>
                    <input type="text" name="name" value="<?= $oneProduct['name'] ?>">
                    <div class="error-message" id="name-error"></div>
                </div>

                <div class="form-group">
                    <p>Ảnh sản phẩm</p>
                    <img src="../assets/img/<?= $oneProduct['image'] ?>" alt="Ảnh sản phẩm">
                    <input type="file" name="img">
                </div>

                <div class="form-group">
                    <p>Giá sản phẩm</p>
                    <input type="text" name="price" value="<?= $oneProduct['price'] ?>">
                    <div class="error-message" id="price-error"></div>
                </div>

                <div class="form-group">
                    <p>Chi tiết sản phẩm</p>
                    <input type="text" name="description" value="<?= $oneProduct['description'] ?>">
                    <div class="error-message" id="description-error"></div>
                </div>

                <div class="form-group">
                    <p>Số lượng</p>
                    <input type="text" name="quantity" value="<?= $oneProduct['quantity'] ?>">
                    <div class="error-message" id="quantity-error"></div>
                </div>

                <div class="form-group">
                    <p>Danh mục sản phẩm</p>
                    <select name="cate" required>
                        <option value="<?= $oneProduct['id_cate'] ?>"><?= $cateName["ten_danhmuc"] ?></option>
                        <?php foreach ($cateProduct as $value) {
                            if ($oneProduct["id_cate"] == $value["id_danhmuc"]) {
                                continue;
                            } else {
                                echo "<option value='" . $value["id_danhmuc"] . "'>" . $value["ten_danhmuc"] . "</option>";
                            }
                        } ?>
                    </select>
                    <div class="error-message" id="cate-error"></div>
                </div>

                <div class="form-group">
                    <input type="submit" name="btn_update" value="Sửa sản phẩm" class="btn">
                </div>
            </form>
        </div>
    </div>

    <script>
        function validateForm() {
            let isValid = true;
            document.querySelectorAll('.error-message').forEach(function(errorElement) {
                errorElement.textContent = '';
            });
            const name = document.querySelector('input[name="name"]').value.trim();
            const price = document.querySelector('input[name="price"]').value.trim();
            const description = document.querySelector('input[name="description"]').value.trim();
            const quantity = document.querySelector('input[name="quantity"]').value.trim();
            const cate = document.querySelector('select[name="cate"]').value.trim();
            if (!name) {
                document.getElementById("name-error").textContent = "Vui lòng nhập tên sản phẩm.";
                isValid = false;
            }
            if (!price || isNaN(price) || price <= 0) {
                document.getElementById("price-error").textContent = "Vui lòng nhập giá sản phẩm hợp lệ.";
                isValid = false;
            }
            if (!description) {
                document.getElementById("description-error").textContent = "Vui lòng nhập chi tiết sản phẩm.";
                isValid = false;
            }
            if (!quantity || isNaN(quantity) || quantity <= 0) {
                document.getElementById("quantity-error").textContent = "Vui lòng nhập số lượng hợp lệ.";
                isValid = false;
            }
            if (!cate) {
                document.getElementById("cate-error").textContent = "Vui lòng chọn danh mục sản phẩm.";
                isValid = false;
            }
            return isValid;
        }
        document.querySelector('.insert').addEventListener('submit', function(event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
