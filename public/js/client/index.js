$(document).ready(function() {
    $('#darkmode').click(function(e) {
        $('.dm-main').toggleClass('bg-bg');

        // var main_bg = $('.main-bg-i'),
        //     bside_bg = $('.bside-bg-i');

        // if (main_bg.length > 0) {
        //     main_bg.toggleClass('.main-bg-i');
        //     main_bg.toggleClass('bside-bg-i');
        // } else {
        //     bside_bg.toggleClass('bside-bg-i');
        //     bside_bg.toggleClass('.main-bg-i');
        // }

    });
});

var last_scroll = 0; //vị trí vừa lăn chuột
$(document).scroll(function() {
    //lấy thuộc tính của thanh menu banner
    var header_table = $("#header-nav"),
        carousel = $('#carouselExampleIndicators');

    // nếu vị trí lăn chuột = 0  thì vẫn giữ nguyên trạng thái ban đầu
    if ($(this).scrollTop() >= 160) {
        header_table.parents(".container").addClass('fixed-top');

        var nav_height = header_table.parent().height();
        carousel.css('margin-top', nav_height);
    }
    // nếu đang lăn chuột : 
    else {
        header_table.parents(".container").removeClass('fixed-top');
        carousel.removeAttr('style');
    }
});