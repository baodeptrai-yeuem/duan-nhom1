<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    margin: 0;
    padding: 0;
}
.noi-dung-chinh {
    gap: 30px;
    margin-top: 20px;
}
.khu-vuc-container {
    width: 1820px;
    margin-right: auto;
    padding-left: 20px;
    justify-content: flex-start;
}
.khu-vuc-san-pham {
                    width: 1820px;
                    display: flex;
                    flex-wrap: wrap;
                    gap: 35px;
                    justify-content: center;
                    text-align: center;
}

.the-san-pham {
    height: 400px;
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    width: 270px;
}

.the-san-pham:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.hinh-anh-san-pham {
    width: 100%;
    height: 70%;
    object-fit: cover;
}

.thong-tin-san-pham {
    padding: 10px;
    text-align: left;
}

.ten-san-pham {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}

.gia-san-pham {
    font-size: 14px;
    font-weight: bold;
    color: #ff0000;
    margin-bottom: 5px;
}
footer{
    margin-top: 5%;
}
.div {
    background-color: #f4f7fb;
    padding: 10px 20px;
    margin-bottom: 20px;
    margin-top: 20px;
    border-radius: 5px;
    font-size: 20px;
    color: #6c757d;
    display: flex;
    align-items: center;
}

.div h4 {
    margin: 0;
    font-size: 16px;
    font-weight: normal;
    color: #6c757d;
}

.div h4 a {
    color: #007bff;
    text-decoration: none;
    margin-right: 5px;
}

.div h4 a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <header><?php require_once 'views/khung/header.php'; ?></header>
<div class="div">
    <h4>Trang Chủ / Search</h4>
</div>

<div class="khu-vuc-san-pham">
    <div class="noi-dung-chinh">
        <div class="khu-vuc-container">
            <div class="noi-dung-chinh">
                <div class="khu-vuc-san-pham">
                <?php foreach($PL as $row){ ?>
                    <?php if($row['id_cate'] == '11'){?>
                    <div class="the-san-pham">
                        <img src="assets/img/<?= $row['image'] ?>" alt="Sản phẩm 1" class="hinh-anh-san-pham">
                        <div class="thong-tin-san-pham">
                            <div class="ten-san-pham"><?= $row['name'] ?></div>
                            <div class="gia-san-pham"><?= $row['price'] ?>đ</div>
                        </div>
                    </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer><?php require_once 'views/khung/footer.php'; ?></footer>
</body>
</html>