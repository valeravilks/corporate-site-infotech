<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta id="vp" name="viewport" content="width=device-width">
    <title>Info-tech</title>
    <?php wp_head(); ?>
</head>
<?php global $redux_demo; ?>
<body>
<header class="header">
    <div class="container-fluid header__container">
        <a class="header__logo logo" href="<?php echo pll_home_url(); ?>">
            <img src="<?php echo $redux_demo['header-logo']['url'] ?>"
                 alt=""
                 class="logo__img">
        </a>
        <?php wp_nav_menu( [
            'theme_location'  => 'primary',
            'menu'            => 'primary',
            'container'       => 'nav',
            'container_class' => 'header__menu menu',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="menu__list">%3$s</ul>',
            'depth'           => 0,
        ] ); ?>
        <a target="_blank" href="tel:<?php echo $redux_demo['header-phone']; ?>"
           class="header__phone">
            <?php echo $redux_demo['header-phone']; ?>
        </a>
        <button class="header__callback js-callback">
            Обратный звонок
        </button>
        <div class="header__lang lang">
            <?php get_template_part('templates/components/lang-up')?>
        </div>
        <img class="header__mobile" src="<?php echo get_template_directory_uri(); ?>/img/main/main-menu.svg">
        <img class="header__close d-none" src="<?php echo get_template_directory_uri(); ?>/img/main/close-menu.svg">

        <?php get_template_part('templates/components/tablet-menu'); ?>


    </div>

</header>
<?php get_template_part('templates/components/callback'); ?>
<div class="background d-none"></div>