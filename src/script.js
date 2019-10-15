import './style.scss';

import './js/jquery.formstyler';
import 'owl.carousel';

// Settings owl carousel

let mainSlider = $(".js-main-slider").owlCarousel({
    items: 1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000
});

mainSlider.on('drag.owl.carousel', function(){
    mainSlider.trigger('stop.owl.autoplay');
});

let slider2 = $(".js-main-slider-2").owlCarousel({
    margin:30,
    autoWidth:true,
    merge:true,
    dots:true,
    loop: false,
    responsive : {
        0 : {
            items: 1,
            autoWidth:false
        },
        550 : {
            items: 3,
            autoWidth:true,
        },
    }
});

var slides = $('.js-main-slider-2').find('.owl-item').not('.cloned').find('.js-project-cart');
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

if($('*').is('.js-main-slider-2')) {
    $(window).resize(function(){
        $('.js-main-slider-2 > .owl-stage-outer').css("padding-left", $('.hp4__head').offset().left);
        $('.js-main-slider-2 > .owl-dots').css("margin-left", $('.hp4__head').offset().left);
        $('.js-main-slider-2 > .owl-dots').css("margin-right", $('.hp4__head').offset().left);
    });
}

//Carousel team
$('.js-team-owl').owlCarousel({
    margin: 30,
    items: 1,
    autoWidth:true,
    dots: false,
    loop: false,
    nav: true,
    onInitialized  : insertItemTeam, //When the plugin has initialized.
    onTranslated : counterTeam
});

function insertItemTeam(e){
    $('.js-team-owl .owl-prev').after('<div class="owl-count2"></div>');
    counterTeam(e);
}

function counterTeam(event) {
    var element   = event.target;         // DOM element, in this example .owl-carousel
    var items     = event.item.count;     // Number of items
    var item      = event.item.index + 1;     // Position of the current item

    // it loop is true then reset counter from 1
    if(item > items) {
        item = item - items
    }
    $('.owl-count2').html(item+"/"+items)
}



$(".js-client-cart").owlCarousel({
    items: 1,
    loop:true,
    nav: true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    onInitialized  : insertItem, //When the plugin has initialized.
    onTranslated : counter
});

function insertItem(e){
    $('.js-client-cart .owl-prev').after('<div class="owl-count"></div>');
    counter(e);
}

function counter(event) {
    var element   = event.target;         // DOM element, in this example .owl-carousel
    var items     = event.item.count;     // Number of items
    var item      = event.item.index + 1;     // Position of the current item

    // it loop is true then reset counter from 1
    if(item > items) {
        item = item - items
    }
    $('.owl-count').html(item+"/"+items)
}

// Styler select

$('.select').styler({
    selectSmartPositioning: false
});

$('.wpforms-field-select select').styler({
    selectSmartPositioning: false
});

$('.hp2__col').hover(function(){
    let url = $(this).data('bg');
    $(this).css('background', 'url(' + url + ') no-repeat bottom, rgba(21, 37, 75, 0)').css('background-size', 'cover');
}, function(){
    let url = $(this).data('bg');
    $(this).css('background', 'url(' + url + ') no-repeat bottom, rgba(21, 37, 75, 0.5)').css('background-size', 'cover');
});

$('.hp2__col').each(function() {
    let url = $(this).data('bg');
    $(this).css('background', 'url(' + url + ') no-repeat bottom, rgba(21, 37, 75, 0.5)').css('background-size', 'cover');
});

$(document).ready(function(){

    if($('*').is('.js-main-slider-2')) {
        $('.js-main-slider-2 > .owl-stage-outer').css("padding-left", $('.hp4__head').offset().left);
        $('.js-main-slider-2 > .owl-dots').css("margin-left", $('.hp4__head').offset().left);
        $('.js-main-slider-2 > .owl-dots').css("margin-right", $('.hp4__head').offset().left);
    }
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