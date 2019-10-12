<?php

/**
 * Template Name: Направления деятельности
 */

get_header(); ?>
<section class="about">
    <div class="wrapper">
        <?php get_template_part('templates/mini-menu'); ?>
        <div class="modern">
            <div class="col-1">
                <div class="title">
                    <?php the_field('about_title', 'option'); ?>
                </div>
            </div>
            <div class="col-2">
                <div class="img" style="background-image: url(<?php echo get_field('about_cart', 'option');?>)">
                </div>
                <div class="text-1">
                    <?php the_field('about_text1', 'option'); ?>
                </div>
                <a href="<?php the_field('about_link', 'option'); ?>" class="link">
                    <?php the_field('about_text-link', 'option'); ?>
                </a>
            </div>
        </div>
        <div class="head-2">
            <?php the_field('about-1', 'option'); ?>
        </div>
        <div class="to">
            <?php if( have_rows('about-2', 'option')) :
                while (have_rows('about-2', 'option')) :
                    the_row();
                    ?>
                    <div class="col">
                        <div class="img" style="background-image: url(<?php echo get_sub_field('img');?>)"></div>
                        <div class="title">
                            <?php echo get_sub_field('text-1');?>
                        </div>
                        <div class="text">
                            <?php echo get_sub_field('text-2');?>
                        </div>
                    </div>
                <?php endwhile;
            endif;
            ?>
        </div>
        <div class="n-block">
            <div class="title">
                О нас пишут
            </div>
            <div class="abouts">
                <div class="col-1">
                    <div class="logo"></div>
                    <div class="date">
                        12.08.18
                    </div>
                    <div class="text">
                        Infotech Group сфокусируется на прогнозных системах
                    </div>
                    <a href="#" class="link">Читать далее</a>
                </div>
                <div class="col-2">
                    <div class="logo"></div>
                    <div class="date">
                        12.08.18
                    </div>
                    <div class="text">
                        Infotech Group сфокусируется на прогнозных системахsdfsfsdf sd d sdf sdf
                    </div>
                    <a href="#" class="link">Читать далее</a>
                </div>
                <div class="col-3">
                    <div class="logo"></div>
                    <div class="date">
                        12.08.18
                    </div>
                    <div class="text">
                        Infotech Group сфокусируется на прогнозных системах
                    </div>
                    <a href="#" class="link">Читать далее</a>
                </div>
            </div>
            <a href="#" class="to-news">Перейти ко всем новостям</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>

