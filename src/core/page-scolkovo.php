<?php

/**
 * Template Name: Проект в Сколково
 */

get_header(); ?>
<section class="scolkovo">
    <div class="wrapper">
        <?php get_template_part('templates/mini-menu'); ?>
        <div class="title">
            <?php the_field('scol-title', 'option'); ?>
        </div>
        <div class="img"
             style="background-image: url(<?php the_field('scol-mail-img', 'option')['url']; ?>)"
        >
            <img class="in-img"  src="<?php the_field('scol-mini-logo', 'option')['url']; ?>" alt="">
        </div>
        <div class="children">
            <div class="col-1">
                <img class="logo" src="<?php the_field('scol-logo-child', 'option')['url']; ?>">
                <div class="text">
                    <?php the_field('scol-text-1', 'option'); ?>
                </div>
                <a href="http://<?php the_field('scol-link-1', 'option'); ?>" class="link">
                    <?php the_field('scol-link-1', 'option'); ?>
                </a>
            </div>
            <div class="col-2">
                <div class="text-2">
                    <?php the_field('scol-text-2', 'option'); ?>
                </div>
            </div>
        </div>
        <div class="dop">

            <?php if( have_rows('scol-cart-1', 'option') ):
                while( have_rows('scol-cart-1', 'option') ): the_row();
                    ?>
                    <div class="col">
                        <div class="img-d" style="background-image: url(<?php echo get_sub_field('scol-cart-img')?>)">
                        </div>
                        <div class="text">
                            <?php echo get_sub_field('scol-cart-text');?>
                        </div>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
            <?php if( have_rows('scol-cart-2', 'option') ):
                while( have_rows('scol-cart-2', 'option') ): the_row();
                    ?>
                    <div class="col">
                        <div class="img-d" style="background-image: url(<?php echo get_sub_field('scol-cart-img')?>)">
                        </div>
                        <div class="text">
                            <?php echo get_sub_field('scol-cart-text');?>
                        </div>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
            <?php if( have_rows('scol-cart-3', 'option') ):
                while( have_rows('scol-cart-3', 'option') ): the_row();
                    ?>
                    <div class="col">
                        <div class="img-d" style="background-image: url(<?php echo get_sub_field('scol-cart-img')?>)">
                        </div>
                        <div class="text">
                            <?php echo get_sub_field('scol-cart-text');?>
                        </div>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

        </div>
        <div class="analog" style="background-image: url(<?php the_field('scolT-bg', 'option')['url']; ?>)">
            <div class="block">
                <div class="col-1">
                    <div class="text-1">
                        <?php the_field('scolT-text-1', 'option'); ?>
                    </div>
                    <div class="text-2">
                        <?php the_field('scolT-text-2', 'option'); ?>
                    </div>
                </div>
                <div class="col-2">
                    <div class="text-3">
                        <?php the_field('scolT-text-3', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="technolog">
        <div class="wrapper">
            <div class="title-t">
                Стек технологий
            </div>
            <div class="row">
                <?php if( have_rows('scol-stak', 'option')) :
                    while (have_rows('scol-stak', 'option')) :
                        the_row();
                    ?>
                        <div class="col">
                            <div class="icon">
                                <img src="<?php echo get_sub_field('scol-cart2-img'); ?>" alt="" class="image">
                            </div>
                            <div class="text">
                                <?php echo get_sub_field('scol-cart2-text');?>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="benefits">
            <div class="head">
                Преимущества
            </div>
            <div class="row">
                <?php if( have_rows('scol-good', 'option')) :
                    while (have_rows('scol-good', 'option')) :
                        the_row();
                        ?>
                        <div class="col">
                            <div class="icon">
                                <img src="<?php echo get_sub_field('scol-cart3-icon'); ?>" alt="" class="image">
                            </div>
                            <div class="text-1">
                                <?php echo get_sub_field('scol-cart3-head');?>
                            </div>
                            <div class="text-2">
                                <?php echo get_sub_field('scol-cart3-text');?>
                            </div>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="decision">
            <div class="col-1">
                <div class="head">
                    <?php the_field('scol-got-title', 'option'); ?>
                </div>
            </div>
            <div class="col-2">
                <div class="image" style="background-image: url(<?php the_field('scol-good-img1', 'option'); ?>)"></div>
                <div class="text-1">
                    <?php the_field('scol-good-head1', 'option'); ?>
                </div>
                <div class="text-2">
                    <?php the_field('scol-good-text1', 'option'); ?>
                </div>
            </div>
            <div class="col-3">
                <div class="image" style="background-image: url(<?php the_field('scol-good-img2', 'option'); ?>)"></div>
                <div class="text-1">
                    <?php the_field('scol-good-head2', 'option'); ?>
                </div>
                <div class="text-2">
                    <?php the_field('scol-good-text2', 'option'); ?>
                </div>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>

