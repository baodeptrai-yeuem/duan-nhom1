$(document).ready(function () {
    $('#search-icon').click(function () {
        $(".frmSearch").toggle();
        $("#keyword").focus();
        
        return false;
    })

    const expirationDuration = 1000 * 60 * 60 * 24;
    const prevAccepted = localStorage.getItem("accepted");
    const currentTime = new Date().getTime();

    const notAccepted = prevAccepted == undefined;
    const prevAcceptedExpired = prevAccepted != undefined && currentTime - prevAccepted > expirationDuration;
    if (notAccepted || prevAcceptedExpired) {
        if ($("#popup-form").val() == 1) {

            let delay_form = parseInt($("#modal-form-delay").val());
            setTimeout(() => $("#formModal").modal('show'), delay_form * 1000)
        }
        if ($("#popup-image").val() == 1) {
            let delay_image = parseInt($("#modal-image-delay").val());
            setTimeout(() => $("#imageModal").modal('show'), delay_image * 1000)
        }
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn().addClass('active');
            //$('.group-modal').fadeIn().addClass('active');
        } else {
            $('.scrollToTop').fadeOut().removeClass('active');
            //$('.group-modal').fadeOut().removeClass('active');
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });


    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 5) {
            $('header').addClass('fixed');
            $('#cssmenu').addClass('fixed-main-menu');
            // $('.home_banner').addClass('slide-fixed');
        } else {
            $('header').removeClass('fixed');
            $('#cssmenu').removeClass('fixed-main-menu');
            // $('.home_banner').removeClass('slide-fixed');
        }

        if ($(window).scrollTop() > 400) {
            $('header').addClass('fixed2');
            $('.boxAddCart').addClass('fixed-mobile');
            $('.buy-now').addClass('fixed-mobile2');
            // $('.home_banner').addClass('slide-fixed');
        } else {
            $('.boxAddCart').removeClass('fixed-mobile');
            $('.buy-now').removeClass('fixed-mobile2');
            // $('.home_banner').removeClass('slide-fixed');
        }


        if ($(window).scrollTop() > 750) {
            $('.row-fixed-pos').addClass('fixed-row-menu');
        } else {
            $('.row-fixed-pos').removeClass('fixed-row-menu');
            // $('.home_banner').removeClass('slide-fixed');
        }
    });




    var alert_sub_info = $('#alert_sub_info').val();
    alert_sub_frm = alert_sub_info ? JSON.parse(alert_sub_info) : [];

    $('#sub_submit').click(function () {
        if (checkSubForm())
            $('#frmSub').submit();
    });

    $('#sideMenuMobile').mmenu(
        {
            navbar:{
                title: "Savani.vn"
            },
            // counters: true,
            // navbars: [
            //     {
            //         type: 'tabs',
            //         content: [
            //             '<a href="#panel-menu"><i class="fa fa-bars"></i> <span>Menu</span></a>',
            //             '<a href="#panel-account"><i class="fa fa-user"></i> <span>Account</span></a>',
            //             '<a href="#panel-cart"><i class="fa fa-shopping-cart"></i> <span>Cart</span></a>',
            //         ],
            //     },
            //
            //
            // ],
        }
    )

    // if ($('#modalPopupHome').attr('data-show') == 1) {
    //     if (width <= 960) {
    //         $('#modalPopupHome').remove();
    //         $('.modal-backdrop').remove();
    //     }
    // }
    // if ($('#modalPopupHome').attr('data-show') == 0) {
    //     if (width > 960) {
    //         $('#modalPopupHome').remove();
    //         $('.modal-backdrop').remove();
    //     }
    // }
    //
    // var modal = localStorage.getItem('modal');
    // if (modal != 'turn_off') {
    //     $('#modalPopupHome').modal('show');
    // }
    // $('#modalPopupHome').on('hidden.bs.modal', function () {
    //     localStorage.setItem('modal', 'turn_off');
    // });

});

$('#submit_ft').click(function () {
    if (!notEmpty("receive-email", "Vui lòng điền vào trường này")) {
        return false;
    }

    $('#form-ft').submit();
})

function checkSubForm() {
    $('label.label_error').prev().remove();
    $('label.label_error').remove();
    if (!notEmpty("sub_email", alert_sub_frm[0])) {
        return false;
    }
    if (!emailValidator("sub_email", alert_sub_frm[0])) {
        return false;
    }
    else {

    }
    return true;
}

function submitSearch() {
    url = '';
    var keyword = $('#keyword').val().replace(/ /g, '-');
    // keyword = encodeURIComponent(encodeURIComponent(keyword));
    var link_search = $('#link_search').val();
    if (keyword != 'Search' && keyword != '') {

        url += '&keyword=' + keyword;
        var check = 1;
    } else {
        var check = 0;
    }

    if (check == 0) {
        alert('You must enter search parameters ');
        $('#keyword').focus();
        return false;
    }
    var link = link_search + '/' + keyword + '.html';
    window.location.href = link;
    return false;
}

$(document).ready(function () {
    $('#keyword').devbridgeAutocomplete({
        serviceUrl: "/index.php?module=search&view=search&raw=1&task=get_ajax_search",
        // groupBy:"brand",
        minChars: 2,
        formatResult: function (n, t) {
            t = t.replace(/[^a-z0-9\s]/gi, "");
            var i = n.data.text.split(" "), r = "";
            for (j = 0; j < i.length; j++)
                r += t.toLowerCase().indexOf(i[j].toLowerCase()) >= 0 ? "<strong>" + i[j] + "</strong> " : i[j] + " ";
            return ' <a href = "' + n.value + '" > ' +
                '<span> <img src = "' + n.data.image + '" /> </span> ' +
                '<div> ' +
                '<h3> ' + r + ' </h3>' + "</div>" + "</a>"
        },
        onSelect: function (n) {
            $(".frmSearch input[name=keyword]").val(n.data.text);
        }
    });
});


