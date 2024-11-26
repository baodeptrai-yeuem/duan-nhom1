$(document).ready(function () {
    $("#flash").owlCarousel({
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
                items: 4,
                margin: 20,
            },
            1701: {
                items: 4,
                margin: 20,
            }
        }
    });

    $("#owl-news-home").owlCarousel({
        autoplay: true, //Set AutoPlay to 3 seconds
        // autoplaySpeed: 1000,
        loop: true,
        margin: 20,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 70
            },
            768: {
                items: 1,
                margin: 10,
                stagePadding: 70
            },
            1000: {
                items: 3,
                margin: 20,
            }
        }
    });

    $('.color-item').click(function () {
        var colorId = $(this).data('id');
        $(this).closest('.item').find('.box-img .img-group').removeClass('active')
        // $('.img-group').removeClass('active');
        $('.img-group' + colorId).addClass('active');
    });
});

var date_end = $('#date_end').val();
// Set the date we're counting down to
var countDownDate = new Date(date_end).getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    // Time calculations for days, hours, minutes and seconds
    var days = parseFloat(Math.floor(distance / (1000 * 60 * 60 * 24)));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


    var day_format = Number(days);
    var hours_format = Number(hours);
    var minutes_format = Number(minutes);
    var seconds_format = Number(seconds);
    // Output the result in an element with id="demo"
    $('.count-down').html('<span class="day day2">' + day_format + '</span>' + ' ngày ' + '<span class="day day2">' + hours_format + '</span>' + ' giờ ' +  '<span class="day day2">' + minutes_format + '</span>' + ' phút ' +  '<span class="day day2">' + seconds_format + "</span> giây");
    $('.count-down2').html('<span class="day day2">' + day_format + '</span>' + '<span class="day day2">' + hours_format + '</span>' +  '<span class="day day2">' + minutes_format + '</span>' +  '<span class="day day2">' + seconds_format + "</span>");
    // $('.count-day').html(day_format);
}, 1000);