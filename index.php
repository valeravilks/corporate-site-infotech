<?php get_header(); ?>
    <section class="main-screen">
        <!--<div class="js-main-slider owl-carousel">
            <div class="main-screen__container">
                <img src="<?php /*echo get_template_directory_uri() */?>/img/main/1.jpg" alt="" class="main-screen__bg">
            </div>
            <div class="main-screen__container">
                2
            </div>
            <div class="main-screen__container">
                3
            </div>
        </div>-->
    </section>
<div class="container">dfdf</div>
<div class="container">
    <div class="row">
        <div class="col col-xl-6">1</div>
        <div class="col col-xl-6">2</div>
        <div class="col col-xl-6">3</div>

    </div>
    <div style="position: relative;">
        <label for="select-1">ss</label>
        <select id="select-1" class="select">
            <option value="0">Сейчас</option>
            <option value="1">Audi</option>
            <option value="2">BMW</option>
            <option value="3">Citroen</option>
            <option value="4">Ford</option>
            <option value="5">Honda</option>
            <option value="6">Jaguar</option>
            <option value="7">Land Rover</option>
            <option value="8">Mercedes</option>
            <option value="9">Mini</option>
            <option value="10">Nissan</option>
            <option value="11">Toyota</option>
            <option value="12">Volvo</option>
        </select>
    </div>
    <?php get_template_part('templates/components/input-text'); ?>
    </div>

    <label class="check">
        <input class="check__input" type="checkbox">
        <span class="check__box"></span>
        Первый
    </label>

    <label class="check">
        <input class="check__input" type="checkbox" checked>
        <span class="check__box"></span>
        Первый
    </label>

    <label class="check">
        <input class="check__input" type="checkbox" disabled>
        <span class="check__box"></span>
        Первый
    </label>

    <label class="check">
        <input class="check__input" type="checkbox" disabled checked>
        <span class="check__box"></span>
        Первый
    </label>

</div>
    <div class="container-photo">
    </div>
<?php
get_footer() ?>