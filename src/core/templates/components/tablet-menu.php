<?php global $redux_demo; ?>
<div class="tablet-l">
    <div class="tablet-1__top">
        <div class="tablet-l__container">
            <?php
            wp_nav_menu( [
                'theme_location'  => 'primary-tablet',
                'menu'            => 'primary-tablet',
                'container'       => 'nav',
                'container_class' => 'header__tablet menu-tablet',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="menu-tablet__list">%3$s</ul>',
                'depth'           => 0,
            ] ); ?>
            <?php
            wp_nav_menu( [
                'theme_location'  => 'primary-mobile',
                'menu'            => 'primary-mobile',
                'container'       => 'nav',
                'container_class' => 'header__mobile-menu menu-mobile',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="menu-mobile__list">%3$s</ul>',
                'depth'           => 0,
            ] ); ?>
            <div class="tablet-1__lang2 lang">
                <?php get_template_part('templates/components/lang-down')?>
            </div>
        </div>
    </div>
    <div class="tablet-l__but">
        <div class="tablet-l__container tablet-l__container-flex">
            <button class="btn btn-blue btn-small js-callback">
                Обратный звонок
            </button>
            <a target="_blank" href="tel:<?php echo $redux_demo['header-phone']; ?>"
               class="tablet-1__phone phone-18-bold">
                <?php echo $redux_demo['header-phone']; ?>
            </a>
            <div class="tablet-1__lang lang">
                <?php get_template_part('templates/components/lang-down')?>
            </div>
        </div>
    </div>











</div>
