<?php

/**
 * Template Name: 4Sides
 */

get_header(); ?>
<main class="reference">
    <section class="breadcrumb">
        <div class="wrapper">
            <div class="bread-crumb bread-crumb-e">
                <a href="<?php echo pll_home_url(); ?>platform/" class="home">
                    Платформа Infotech
                </a>
                <span class="arrow">
                >
            </span>
                <span class="current-news">
                <?php the_field('sid-1', 'option'); ?>
            </span>
            </div>
        </div>
    </section>
    <section class="head-img">
        <div class="wrapper">
            <div class="img" style="background-image: url(<?php the_field('sid-2', 'option')['url']; ?>)"></div>
        </div>
    </section>
    <section class="head-cont">
        <div class="wrapper">
            <div class="row">
                <div class="col-1">
                    <img src="<?php the_field('sid-3', 'option')['url']; ?>" alt="" class="logo">
                    <div class="help">
                        <img src="<?php the_field('sid-4', 'option')['url']; ?>" class="logo-2">
                        <div class="text">
                            <?php the_field('sid-5', 'option'); ?>
                        </div>
                    </div>
                    <button class="button js-callback">
                        <?php the_field('sid-6', 'option'); ?>
                    </button>
                </div>
                <div class="col-2">
                    <div class="text">
                        <?php the_field('sid-7', 'option'); ?>
                    </div>
                    <a target="_blank" href="<?php the_field('sid-9', 'option'); ?>" class="button">
                        <?php the_field('sid-8', 'option'); ?>
                    </a>
                    <button class="button-2 js-callback">
                        <?php the_field('sid-6', 'option'); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="items-head-text">
        <div class="wrapper">
            <div class="title">
                <?php the_field('sid-10', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('sid-11', 'option') ): ?>
                    <?php while( have_rows('sid-11', 'option') ): the_row();
                        ?>
                        <div class="col">
                            <img class="h-80" src="<?php the_sub_field('sid-12'); ?>" alt="">
                            <div class="text-1">
                                <?php the_sub_field('sid-13'); ?>
                            </div>
                            <div class="text-2">
                                <?php the_sub_field('sid-14'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="items-img-head-text">
        <div class="wrapper">
            <div class="title">
                <?php the_field('sid-15', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('sid-16', 'option') ): ?>
                    <?php while( have_rows('sid-16', 'option') ): the_row();
                        ?>
                        <div class="col">
                            <div class="image"
                                 style="background-image: url(<?php the_sub_field('sid-17'); ?>">
                            </div>
                            <div class="text-1">
                                <?php the_sub_field('sid-18'); ?>
                            </div>
                            <div class="text-2">
                                <?php the_sub_field('sid-19'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="tabs">
        <div class="wrapper">
            <div class="title">
                <?php the_field('sid-20', 'option'); ?>
            </div>
            <div class="row">
                <ul class="col-1">
                    <?php
                    $bool = true;
                    if( have_rows('sid-21', 'option') ): ?>
                        <?php while( have_rows('sid-21', 'option') ): the_row(); ?>
                            <li class="<?php if($bool){
                                echo 'active';
                                $bool = false;
                            } ?>">
                                <?php the_sub_field('sid-22'); ?>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <div class="col-2">
                    <?php
                    $bool = true;
                    if( have_rows('sid-21', 'option') ): ?>
                        <?php while( have_rows('sid-21', 'option') ): the_row();
                            ?>
                            <div class="content <?php if($bool){
                                echo 'active';
                                $bool = false;
                            } ?>">
                                <h2>
                                    <?php the_sub_field('sid-23'); ?>
                                </h2>
                                <?php the_sub_field('sid-24'); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-3">
                    <div class="owl-nav">
                        <button class="owl-prev">
                            <span><</span>
                        </button>
                        <span class="count">

                            </span>
                        <button class="owl-next">
                            <span>></span>
                        </button>
                    </div>
                    <div class="slider js-tabs">
                        <?php if( have_rows('sid-21', 'option') ): ?>
                            <?php while( have_rows('sid-21', 'option') ): the_row(); ?>
                                <div class="content">
                                    <h2><?php the_sub_field('sid-23'); ?></h2>
                                    <?php the_sub_field('sid-24'); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <div class="wrapper">
            <div class="row">
                <div class="col-1">
                    <?php the_field('sid-25', 'option'); ?>
                </div>
                <div class="col-2">
                    <div class="text">
                        <?php the_field('sid-26', 'option'); ?>
                    </div>
                    <button class="button js-callback">
                        <?php the_field('sid-27', 'option'); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>s