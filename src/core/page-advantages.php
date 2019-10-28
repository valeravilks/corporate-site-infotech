<?php

/**
 * Template Name: Преимущества
 */

get_header(); ?>
<section class="advantages">
    <div class="wrapper">
        <div class="help">
            <?php get_template_part('templates/mini-menu'); ?>
        </div>
        <div class="title">
            <?php the_field('advan-1', 'option'); ?>
        </div>
        <div class="row">
            <?php if( have_rows('advan-2', 'option') ): ?>
                <?php while( have_rows('advan-2', 'option') ): the_row();
                    ?>
                    <div class="col">
                        <div class="image"
                             style="background-image: url(<?php the_sub_field('advan-3');?>)">
                        </div>
                        <div class="text">
                            <?php the_sub_field('advan-4');?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="ad-works">
    <div class="wrapper">
        <div class="row">
            <div class="col-1">
                <div class="text-1">
                    <?php the_field('advan-5', 'option'); ?>
                </div>
            </div>
            <div class="col-1">
                <div class="rows">
                    <ul class="list">
                        <?php if( have_rows('advan-6', 'option') ): ?>
                            <?php while( have_rows('advan-6', 'option') ): the_row();
                                ?>
                                <li>
                                    <?php the_sub_field('advan-6-1');?>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <ul class="list">
                        <?php if( have_rows('advan-7', 'option') ): ?>
                            <?php while( have_rows('advan-7', 'option') ): the_row();
                                ?>
                                <li>
                                    <?php the_sub_field('advan-6-1');?>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="adv-instrum">
    <div class="wrapper">
        <div class="title">
            <?php the_field('advan-8', 'option'); ?>
        </div>
        <div class="row">
            <?php if( have_rows('advan-9', 'option') ): ?>
                <?php while( have_rows('advan-9', 'option') ): the_row();
                    ?>
                    <div class="col-2">
                        <img src="<?php the_sub_field('advan-10');?>" alt="">
                        <div class="text-3">
                            <?php the_sub_field('advan-11');?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

