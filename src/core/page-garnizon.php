<?php

/**
 * Template Name: Garnizon
 */

get_header(); ?>
<main class="garnizon">
    <section class="breadcrumb">
        <div class="wrapper">
            <div class="bread-crumb bread-crumb-e">
                <a href="<?php echo pll_home_url(); ?>products/" class="home">
                    Направления
                </a>
                <span class="arrow">
                >
            </span>
                <span class="current-news">
                <?php the_field('gar-0', 'option'); ?>
            </span>
            </div>
        </div>
    </section>
    <section class="head-img">
        <div class="wrapper">
            <h1 class="title">
                <?php the_field('gar-1', 'option'); ?>
            </h1>
            <div class="img" style="background-image: url(<?php the_field('gar-2', 'option')['url']; ?>)"></div>
        </div>
    </section>
    <section class="head-cont">
        <div class="wrapper">
            <div class="row">
                <div class="col-1">
                    <img src="<?php the_field('gar-3', 'option')['url']; ?>" alt="" class="logo">
                    <div class="help">
                        <img src="<?php the_field('gar-4', 'option')['url']; ?>" class="logo-2">
                        <div class="text">
                            <?php the_field('gar-5', 'option'); ?>
                        </div>
                    </div>
                    <button class="button js-callback">
                        <?php the_field('estate-5', 'option'); ?>
                    </button>
                </div>
                <div class="col-2">
                    <div class="text">
                        <?php the_field('gar-6', 'option'); ?>
                    </div>
                    <a target="_blank" href="<?php the_field('gar-7', 'option'); ?>" class="button">
                        <?php the_field('estate-7', 'option'); ?>
                    </a>
                    <button class="button-2 js-callback">
                        <?php the_field('estate-5', 'option'); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="items-1">
        <div class="wrapper">
            <div class="title">
                <?php the_field('gar-8', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('gar-9', 'option') ): ?>
                    <?php while( have_rows('gar-9', 'option') ): the_row();
                        ?>
                        <div class="col">
                            <img src="<?php the_sub_field('gar-9-1'); ?>" alt="">
                            <div>
                                <?php the_sub_field('gar-9-2'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="items-bg">
        <div class="wrapper">
            <div class="title">
                <?php the_field('gar-10', 'option');?>
            </div>
            <div class="row">
                <?php if( have_rows('gar-11', 'option') ): ?>
                    <?php while( have_rows('gar-11', 'option') ): the_row();
                        ?>
                        <div class="col">
                            <img src="<?php the_sub_field('gar-11-1'); ?>" alt="" class="img">
                            <div class="text-c">
                                <?php the_sub_field('gar-11-2'); ?>
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
                <?php the_field('gar-12', 'option'); ?>
            </div>
            <div class="text">
                <?php the_field('gar-13', 'option'); ?>
            </div>
            <div class="row">
                <ul class="col-1">
                    <?php
                    $bool = true;
                    if( have_rows('gar-14', 'option') ): ?>
                        <?php while( have_rows('gar-14', 'option') ): the_row(); ?>
                            <li class="<?php if($bool){
                                echo 'active';
                                $bool = false;
                            } ?>">
                                <?php the_sub_field('gar-14-1'); ?>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <div class="col-2">
                    <?php
                    $bool = true;
                    if( have_rows('gar-14', 'option') ): ?>
                        <?php while( have_rows('gar-14', 'option') ): the_row();
                            ?>
                            <div class="content <?php if($bool){
                                echo 'active';
                                $bool = false;
                            } ?>">
                                <h2>
                                    <?php the_sub_field('gar-14-3'); ?>
                                </h2>
                                <?php the_sub_field('gar-14-2'); ?>
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
                        <?php if( have_rows('gar-14', 'option') ): ?>
                            <?php while( have_rows('gar-14', 'option') ): the_row(); ?>
                                <div class="content">
                                    <h2><?php the_sub_field('gar-14-3'); ?></h2>
                                    <?php the_sub_field('gar-14-2'); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="image-cart">
        <div class="wrapper">
            <div class="title">
                <?php the_field('gar-15', 'option')?>
            </div>
            <div class="x-row">
                <?php if( have_rows('gar-16', 'option') ): ?>
                    <?php while( have_rows('gar-16', 'option') ): the_row();
                        ?>
                        <div class="col" style="background-image: url(<?php the_sub_field('gar-16-1'); ?>)">
                            <div class="i-text">
                                <?php the_sub_field('gar-16-2'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>