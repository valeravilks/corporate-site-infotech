<?php
wp_footer();
?>

<footer class="footer">
    <div class="wrapper">
        <div class="footer__row1">
            <?php wp_nav_menu( [
                'theme_location'  => 'footer-menu',
                'menu'            => 'footer-menu',
                'container'       => 'nav',
                'container_class' => 'footer__menu',
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
            <div class="footer__info">
                <button class="footer__callback js-callback">
                    Обратный звонок
                </button>
                <a target="_blank" href="tel:<?php the_field('phone', 'option'); ?>"
                   class="footer__phone">
                    <?php the_field('phone', 'option'); ?>
                </a>
                <div class="footer__mail">
                    <?php the_field('email', 'option'); ?>
                </div>
                <div class="footer__work">
                    <?php the_field('time-work', 'option'); ?>
                </div>
            </div>
        </div>
        <div class="footer__row2">
            <div class="footer__company1 f-comp">
                <div class="f-comp__img">
                    <img src="<?php the_field('logo1', 'option')['url']; ?>"
                         alt=""
                         class="f-comp__img-1">
                </div>
                <div class="f-comp__text">
                    <?php the_field('logo-text1', 'option'); ?>
                </div>
            </div>
            <div class="footer__company2 f-comp">
                <div class="f-comp__img">
                    <img src="<?php the_field('logo2', 'option')['url']; ?>"
                         alt=""
                         class="f-comp__img-2">
                </div>
                <div class="f-comp__text">
                    <?php the_field('logo-text2', 'option'); ?>
                </div>
            </div>
        </div>
        <div class="footer__row3">
            <div class="footer__col-31">
                <a class="footer__logo logo" href="<?php echo pll_home_url(); ?>">
                    <img src="<?php the_field('logo', 'option')['url']; ?>"
                         alt=""
                         class="logo__img">
                </a>
                <p class="footer__copyright">
                    <?php the_field('copyright', 'option'); ?>
                </p>
            </div>
            <div class="footer__col-32">
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
                        <a href="<?php the_field('facebook', 'option'); ?>" class="f-soc__item">
                            facebook
                        </a>
                        <a href="<?php the_field('vkontakte', 'option'); ?>" class="f-soc__item">
                            vkontakte
                        </a>
                        <a href="<?php the_field('instagram', 'option'); ?>" class="f-soc__item">
                            instagram
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer__col-33">
                <div class="footer__help f-help">
                    <div class="f-help__text">
                        Техническая поддержка:
                    </div>
                    <div class="f-help__phone">
                        <?php the_field('tech-phone', 'option'); ?>
                    </div>
                    <div class="f-help__mail">
                        <?php the_field('email-tech', 'option'); ?>
                    </div>
                    <div class="f-help__text2">
                        <?php the_field('tech-text', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>