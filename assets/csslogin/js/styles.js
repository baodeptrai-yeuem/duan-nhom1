$(document).ready(function () {
    // $('.see-products-menu').hover(function () {
    //         $('.full2').show();
    //         $('.show_list_see_pr').show();
    // });
    // $(".full2, header").hover(function () {
    //     $(".show_list_see_pr").hide();
    //     $('.full2').hide();
    // });
    $("li.activated").parents('ul.dropdown-menu').show();
    $("li.activated").children('ul.dropdown-menu').show();
});
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 5) {
        //clearHeader, not clearheader - caps H
        $("ul.dropdown-menu").addClass("darkHeader");
        $(".products-menu").hide();
    }else {
        $("ul.dropdown-menu").removeClass("darkHeader");
        $(".products-menu").show();
    }
});