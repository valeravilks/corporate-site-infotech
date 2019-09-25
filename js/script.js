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
        $(this).find('.lang__second').stop().slideDown(300);
    });

    $('.lang__container').mouseleave(function(){
        $(this).find('.lang__second').stop().slideUp(300);
    });

    // Custom menu class
    $('.menu__item_lvl_1:first-child .menu__link_lvl_2').addClass('section-12-medium');
    $('.menu__item_lvl_1:not(:first-child) .menu__link_lvl_2').addClass('menu-16-medium');

    // Manu helper
    $(".menu__sub_lvl_2").before("<div class='menu__helper'></div>");

    //Mobile menu open and close
    $('.header__mobile').click(function(){
        $('.header__menu').hide();
        $('.header__phone').hide();
        $('.header__lang').hide();
        $('.header__mobile').hide();
        $('.header__close').show();
        $('.tablet-l').addClass('d-flex');
    });

    $('.header__close').click(function(){
        $('.header__menu').show();
        $('.header__phone').show();
        $('.header__lang').show();
        $('.header__mobile').show();
        $('.header__close').hide();
        $('.tablet-l').removeClass('d-flex');
    });

    $(window).resize(function(){
        $('.header__menu').show();
        $('.header__phone').show();
        $('.header__lang').show();
        $('.header__mobile').show();
        $('.header__close').hide();
        $('.tablet-l').removeClass('d-flex');
    });
});