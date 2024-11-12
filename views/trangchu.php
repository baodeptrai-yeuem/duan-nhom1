<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slideshow</title>
    <style>
        .slideshow-container {
            position: relative;
            max-width: 1920px;
            max-height: 1080px;
            margin: auto;
            overflow: hidden;
        }
        .slides {
            display: none;
            width: 100%;
            height: 60%;
            transition: opacity 0.5s ease-in-out;
        }
        .slides img {
            width: 100%;
            height: 60%;
            object-fit: cover;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
    </style>
</head>
<body>
    <div class="">
        <?php require_once 'views/khung/header.php'; ?>
    </div>
        
    <div class="slideshow-container">
        <div class="slides fade">
            <img src="./assets/img/banner1.webp" alt="Hình 1">
        </div>
        <div class="slides fade">
            <img src="./assets/img/banner2.webp" alt="Hình 2">
        </div>
        <div class="slides fade">
            <img src="./assets/img/banner3.webp" alt="Hình 3">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
        
    <div class="">
        <?php require_once 'views/khung/footer.php'; ?>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("slides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex - 1].style.display = "block";  
            slides[slideIndex - 1].style.opacity = "1";
            setTimeout(showSlides, 3000); // Thay đổi hình ảnh mỗi 3 giây
        }

        function plusSlides(n) {
            slideIndex += n - 1; // Điều chỉnh chỉ số slide
            if (slideIndex >= document.getElementsByClassName("slides").length) {slideIndex = 0}
            if (slideIndex < 0) {slideIndex = document.getElementsByClassName("slides").length - 1}
            showSlides();
        }
    </script>
</body>
</html>
