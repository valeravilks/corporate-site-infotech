<?php

/**
 * Template Name: Estate
 */

get_header(); ?>
<section class="estate-page">
    <div class="wrapper">
        <div class="bread-crumb bread-crumb-e">
            <a href="<?php echo pll_home_url(); ?>products/" class="home">
                Направления
            </a>
            <span class="arrow">
                >
            </span>
            <span class="current-news">
                <?php the_field('estate-bread', 'option'); ?>
            </span>
        </div>
        <div class="industry">
            <h1 class="title">
                <?php the_field('estate-title', 'option'); ?>
            </h1>
            <div class="img" style="background-image: url(<?php the_field('estate-img', 'option')['url']; ?>)"></div>
            <div class="row">
                <div class="col-1">
                    <img src="<?php the_field('estate-2', 'option')['url']; ?>" alt="" class="logo">
                    <div class="help">
                        <img src="<?php the_field('estate-3', 'option')['url']; ?>" class="logo-2">
                        <div class="text">
                            <?php the_field('estate-4', 'option'); ?>
                        </div>
                    </div>
                    <button class="button js-callback">
                        <?php the_field('estate-5', 'option'); ?>
                    </button>
                </div>
                <div class="col-2">
                    <div class="text">
                        <?php the_field('estate-6', 'option'); ?>
                    </div>
                    <a href="#" class="button">
                        <?php the_field('estate-7', 'option'); ?>
                    </a>
                    <button class="button-2 js-callback">
                        <?php the_field('estate-5', 'option'); ?>
                    </button>
                </div>
            </div>
        </div>
        <div class="voz">
            <div class="title">
                <?php the_field('estate-812', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('estate-8', 'option') ): ?>
                        <?php while( have_rows('estate-8', 'option') ): the_row();
                            ?>
                            <div class="col">
                                <img src="<?php the_sub_field('estate-pov-img'); ?>" alt="">
                                <div>
                                    <?php the_sub_field('estate-pov-text'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="preim">
            <div class="title">
                <?php the_field('estate-9', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('estate-10', 'option') ): ?>
                    <?php while( have_rows('estate-10', 'option') ): the_row();
                        ?>
                        <div class="col">
                            <div class="col-1">
                                <img src="<?php the_sub_field('estate-pov2-img'); ?>" alt="">
                            </div>
                            <div class="text">
                                <?php the_sub_field('estate-pov2-text'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="polz">
            <div class="title">
                <?php the_field('estate-9-1', 'option'); ?>
            </div>
            <div class="row">
                <div class="col-1">
                    <div style="background-image: url(<?php the_field('estate-9-2', 'option')['url']; ?>"></div>
                </div>
                <div class="col-2">
                    <div class="row">
                        <?php if( have_rows('estate-11', 'option') ): ?>
                            <?php while( have_rows('estate-11', 'option') ): the_row();
                                ?>
                                <div class="col-3">
                                    <img src="<?php the_sub_field('estate-pov3-logo'); ?>" alt="">
                                    <div class="text">
                                        <?php the_sub_field('estate-pov3-text'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="system-comp">
            <div class="wrapper">
                <div class="title">
                    <?php the_field('estate-12', 'option'); ?>
                </div>
                <div class="slider js-estate-slider">
                    <?php if( have_rows('estate-10', 'option') ): ?>
                        <?php while( have_rows('estate-10', 'option') ): the_row();
                            ?>
                            <div class="img">
                                <img src="<?php the_sub_field('estate-images'); ?>" alt="">
                                <div class="i-text">
                                    <?php the_sub_field('estate-text-mini'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
