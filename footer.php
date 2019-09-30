<?php
wp_footer();
global  $redux_demo;
?>

<footer class="footer">
    <div class="container">
        <div class="row footer__row1">
            <?php wp_nav_menu( [
                'theme_location'  => 'footer-menu',
                'menu'            => 'footer-menu',
                'container'       => 'nav',
                'container_class' => 'footer__menu menu-f col-xl-9',
                'container_id'    => '',
                'menu_class'      => 'menu-f',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="menu-f__list row">%3$s</ul>',
                'depth'           => 0,
            ] ); ?>
            <div class="col-xl-3">
                <button class="btn btn-blue btn-large js-callback">
                    Обратный звонок
                </button>
                <a target="_blank" href="tel:<?php echo $redux_demo['header-phone']; ?>"
                   class="header__phone menu-16-medium">
                    <?php echo $redux_demo['header-phone']; ?>
                </a>
                <div class="footer__phone menu-16-medium">
                    info@infotech.group
                </div>
                <div class="footer__work">
                    Работаем с 9 до 18
                </div>
            </div>
        </div>
        <div class="row footer__row2">
            <div class="col col-xl-3 footer__company f-comp">
                <div class="f-comp__img">

                </div>
                <div class="f-comp__text help-14-regular">
                    Дочерняя компания Holocron - участник проекта “Сколково”
                </div>
            </div>
            <div class="col offset-xl-1 col-xl-3 footer__company f-comp">
                <div class="f-comp__img">

                </div>
                <div class="f-comp__text help-14-regular">
                    Участник объединения РУССОФТ
                </div>
            </div>
        </div>
        <div class="row footer__row3">
            <div class="col col-xl-3">
                <a class="footer__logo logo" href="<?php echo pll_home_url(); ?>">
                    <img src="<?php echo $redux_demo['header-logo']['url'] ?>"
                         alt=""
                         class="logo__img">
                </a>
                <p class="footer__copyright help-14-regular">
                    © 2016-2019, Infotech Group. Все права защищены. При копировании материалов ссылка на сайт обязательна.
                </p>
            </div>
            <div class="col offset-xl-1 col-xl-3">
                <?php wp_nav_menu( [
                    'theme_location'  => 'footer-menu2',
                    'menu'            => 'footer-menu2',
                    'container'       => 'nav',
                    'container_class' => 'footer__menu2 menu-f2',
                    'container_id'    => '',
                    'menu_class'      => 'menu-f',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="menu-f2__list">%3$s</ul>',
                    'depth'           => 0,
                ] ); ?>
                <div class="footer__soc f-soc">
                    <div class="f-soc__text">
                        Мы в социальных сетях:
                    </div>
                    <div class="f-soc__block">
                        <a href="" class="f-soc__item">
                            facebook
                        </a>
                        <a href="" class="f-soc__item">
                            vkontakte
                        </a>
                        <a href="" class="f-soc__item">
                            instagram
                        </a>
                    </div>
                </div>
            </div>
            <div class="col offset-xl-1 col-xl-4">
                <div class="footer__help f-help">
                    <div class="f-help__text">
                        Техническая поддержка:
                    </div>
                    <div class="f-help__phone">
                        +7 (495) 22-65-222
                    </div>
                    <div class="f-help__mail">
                        support@infotech.team
                    </div>
                    <div class="f-help__text2">
                        Заявки принимаются круглосуточно
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>