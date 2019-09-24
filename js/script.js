$(document).ready(function(){
    $(".js-main-slider").owlCarousel({
        items: 1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000
    });

    // Lang amination
    $('.lang__container').mouseenter(function(){
        $('.lang__second').stop().slideDown(300);
    });

    $('.lang__container').mouseleave(function(){
        $('.lang__second').stop().slideUp(300);
    });
});