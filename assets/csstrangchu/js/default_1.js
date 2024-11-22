$(document).ready(function () {
    $("#slidePopup").owlCarousel({
        autoplay: true, //Set AutoPlay to 3 seconds
        // autoplaySpeed: 1000,
        loop: true,
        margin: 30,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        dots: true,
        items: 1,
    });

    $(".owl-cat").owlCarousel({
        autoplay: true, //Set AutoPlay to 3 seconds
        // autoplaySpeed: 1000,
        loop: false,
        margin: 10,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        responsive: {
            450: {
                items: 4,
            },
            768: {
                items: 6,
            },
            1000: {
                items: 11,
            },
        }
    });

    $(".banner-cat-lv0").owlCarousel({
        autoplay: true, //Set AutoPlay to 3 seconds
        // autoplaySpeed: 1000,
        loop: true,
        margin: 10,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
        items: 1,
    });

    $(".cat-lv0").owlCarousel({
        autoplay: true, //Set AutoPlay to 3 seconds
        // autoplaySpeed: 1000,
        loop: false,
        margin: 20,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 2,
                margin: 10,
            },
            450: {
                items: 2,
                margin: 10,
            },
            768: {
                items: 3,
                margin: 10,
            },
            1000: {
                items: 3,
                margin: 20,
            },
            1701: {
                items: 3,
                margin: 20,
            }
        }
    });

    $('#list-color-item > .color-item').click(function (e) {
        $('#list-color-item .color-item').removeClass('active');
        $(this).addClass('active');

        e.preventDefault();
    });
    // $('#list-size-item > .size-item').click(function (e) {
    //     $('#list-size-item .size-item').removeClass('active');
    //     $(this).addClass('active');
    //     let id = $(this).attr('id');
    //     e.preventDefault();
    // }); 
    $('.color-item').click(function () {
        var colorId = $(this).data('id');
        $(this).closest('.item').find('.box-img .img-group .img-album').removeClass('active')
        // $('.img-group').removeClass('active');
        $('.img-album' + colorId).addClass('active');
    });

 

});

window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function switchSub(imgElement) {
    var firstImage = imgElement.getAttribute('data-first-image');
    var secondImage = imgElement.getAttribute('data-second-image');
    var imgGroupActive = imgElement.closest('.item').querySelector('.img-group.active img');
    imgGroupActive.src = firstImage;
    imgGroupActive.setAttribute('data-hover-image', secondImage);
}

 

function myFunction2() {
    if ($("#myDropdown2").hasClass('show-drop')) {
        $('#myDropdown2').removeClass('show-drop');
    } else {
        $('#myDropdown2').addClass('show-drop');
    }
}
function myFunction() {
    if ($("#myDropdown").hasClass('show-drop')) {
        $('#myDropdown').removeClass('show-drop');
    } else {
        $('#myDropdown').addClass('show-drop');
    }
}