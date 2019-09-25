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
        </div>
    </div>
    <div class="tablet-l__but">
        <div class="tablet-l__container tablet-l__container-flex">
            <button class="btn btn-primary">
                Обратный звонок
            </button>
            <a target="_blank" href="tel:<?php echo $redux_demo['header-phone']; ?>" class="header__phone">
                <?php echo $redux_demo['header-phone']; ?>
            </a>
            <div class="header__lang lang">
                <?php get_template_part('templates/components/lang')?>
            </div>
        </div>
    </div>











</div>
