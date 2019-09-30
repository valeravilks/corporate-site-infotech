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
        $('.header__menu').addClass('d-none');
        $('.header__phone').addClass('d-none');
        $('.header__lang').addClass('d-none');
        $('.header__mobile').addClass('d-none');
        $('.header__close').removeClass('d-none');
        $('.tablet-l').addClass('d-flex');
        $('.background').removeClass('d-none');
        $('body').append('<div class=""></div>')
    });

    $('.header__close').click(function(){
        $('.header__menu').removeClass('d-none');
        $('.header__phone').removeClass('d-none');
        $('.header__lang').removeClass('d-none');
        $('.header__mobile').removeClass('d-none');
        $('.header__close').addClass('d-none');
        $('.background').addClass('d-none');
        $('.tablet-l').removeClass('d-flex');
    });

    var lastWidth = $(window).width();
    $(window).resize(function(e){
        if($(window).width()!=lastWidth){
            $('.header__menu').removeClass('d-none');
            $('.header__phone').removeClass('d-none');
            $('.header__lang').removeClass('d-none');
            $('.header__mobile').removeClass('d-none');
            $('.header__close').addClass('d-none');
            $('.background').addClass('d-none');
            $('.tablet-l').removeClass('d-flex');
            lastWidth = $(window).width();
        }
    });

    $('.background').click(function(){
        $('.header__menu').removeClass('d-none');
        $('.header__phone').removeClass('d-none');
        $('.header__lang').removeClass('d-none');
        $('.header__mobile').removeClass('d-none');
        $('.header__close').addClass('d-none');
        $('.background').addClass('d-none');
        $('.tablet-l').removeClass('d-flex');
    });

     // $('.header__mobile-menu').show();

    //input text
    $('.wpforms-field-text input').focus(function(){
        $(this).siblings('.wpforms-field-text label').addClass('mdc-floating-label-in');
    });

    $('.wpforms-field-text input').focusout(function(){
        if($(this).val() === '') {
            $(this).siblings('.wpforms-field-text label').removeClass('mdc-floating-label-in');
        }
    });

    $('.select').styler({
        selectSmartPositioning: true
    });

    $('.wpforms-field-select select').styler({
        selectSmartPositioning: true
    });

    $('.wpforms-field-checkbox label').append('<span class="check__box"></span>');

    $('.js-callback').click(function(){
        $('.callback').addClass('callback-show');
        $('.callback-bg').fadeIn();
    });

    $('.callback-bg').click(function () {
        $('.callback-bg').fadeOut();
        $('.callback').removeClass('callback-show');
    });

    $('.callback__close').click(function () {
        $('.callback-bg').fadeOut();
        $('.callback').removeClass('callback-show');
    });

});