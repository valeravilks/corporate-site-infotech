<?php get_header();
global $redux_demo;
?>
<body>
    <header class="header">
        <div class="container header__container">
            <a class="header__logo logo" href="https://google.com">
                <img src="<?php echo $redux_demo['header-logo']['url'] ?>"
                     alt=""
                     class="logo__img">
            </a>
            <nav class="header__menu menu">
             <!--   --><?php /*wp_nav_menu(); */?>
                <ul class="menu__list">
                    <li class="menu_item">
                        <a href="" class="menu__link menu__link_lvl_1">
                            Продукты
                        </a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="menu__link menu__link_lvl_1">
                         О компании
                        </a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="menu__link menu__link_lvl_1">
                            Карьера
                        </a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="menu__link menu__link_lvl_1">
                            Пресс-центр
                        </a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="menu__link menu__link_lvl_1">
                            Контакты
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="" class="header__phone">
                8(800)707-36-15
            </a>
            <button class="header__callback btn btn-primary">
                Обратный звонок
            </button>
            <div class="header__lang">
                RU
            </div>
        </div>
    </header>
    <section class="main-screen">
        <div class="js-main-slider owl-carousel">
            <div class="main-screen__container">
                <img src="<?php echo get_template_directory_uri() ?>/img/main/1.jpg" alt="" class="main-screen__bg">
            </div>
            <div class="main-screen__container">
                2
            </div>
            <div class="main-screen__container">
                3
            </div>
        </div>
    </section>

<?php
get_footer() ?>