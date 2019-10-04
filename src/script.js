import './style.scss';

import './js/jquery.formstyler';
// import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';


$(".js-main-slider").owlCarousel({
    items: 1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000
});

let slider2 = $(".js-main-slider-2").owlCarousel({
    margin:30,
    autoWidth:true,
    merge:true,
    dots:true,
    loop: false,
});


 var slides = $('.js-main-slider-2').find('.owl-item').not('.cloned').find('.js-project-cart');
 console.log('---------');
console.log(slides);
console.log('---------');
let slideMass = [];

for(let i = 0; i < slides.length; i++){
    let slid =  slides.eq(i).owlCarousel({
        margin:10,
        items:1,
        dots:true,
        touchDrag: false,
        mouseDrag: false,
    });
    slideMass.push({slide: slid, count: i });
}


console.log(slideMass);


$('.owl-theme-cart-dot').click(function () {
    slideMass[0].slide.trigger('to.owl.carousel', [3]);

    let elemJquery = $(this).parents('.project-item').not('.clone').eq(0).children('.js-project-cart');
    let nubmer = $('.js-main-slider-2').find('.owl-item').not('.cloned').find('.js-project-cart').index(elemJquery);

    // console.log(elemJquery);
    let goSlide = $(this).parents('.owl-theme-cart-dots').children('.owl-theme-cart-dot').index($(this));
    //
    console.log('Какой слайдер: ' + nubmer);
    console.log('Номер слайда: ' + goSlide);

    slideMass.forEach(function(item, i, arr) {
        if(item.count === nubmer) {
            console.log(item.slide);
            // item.slide.trigger('next.owl.carousel');
        }
    });
});




$('.select').styler({
    selectSmartPositioning: true
});

$('.wpforms-field-select select').styler({
    selectSmartPositioning: true
});


$(document).ready(function(){


    // Lang amination
    $('.lang__container').mouseenter(function(){
        $(this).find('.lang__second').stop().slideDown(300);
    });

    $('.lang__container').mouseleave(function(){
        $(this).find('.lang__second').stop().slideUp(300);
    });

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