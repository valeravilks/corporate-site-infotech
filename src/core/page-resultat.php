<?php

/**
 * Template Name: Resultat
 */

get_header(); ?>
    <main class="resultat">
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
                <?php the_field('rez-0', 'option'); ?>
            </span>
                </div>
            </div>
        </section>
        <section class="head-img">
            <div class="wrapper">
                <h1 class="title">
                    <?php the_field('rez-1', 'option'); ?>
                </h1>
                <div class="img" style="background-image: url(<?php the_field('rez-2', 'option')['url']; ?>)"></div>
            </div>
        </section>
        <section class="head-cont">
            <div class="wrapper">
                <div class="row">
                    <div class="col-1">
                        <img src="<?php the_field('rez-3', 'option')['url']; ?>" alt="" class="logo">
                        <div class="help">
                            <img src="<?php the_field('rez-4', 'option')['url']; ?>" class="logo-2">
                            <div class="text">
                                <?php the_field('rez-5', 'option'); ?>
                            </div>
                        </div>
                        <button class="button js-callback">
                            <?php the_field('rez-6', 'option'); ?>
                        </button>
                    </div>
                    <div class="col-2">
                        <div class="text">
                            <?php the_field('rez-7', 'option'); ?>
                        </div>
                        <a target="_blank" href="<?php the_field('rez-9', 'option'); ?>" class="button">
                            <?php the_field('rez-8', 'option'); ?>
                        </a>
                        <button class="button-2 js-callback">
                            <?php the_field('rez-6', 'option'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="tabs">
            <div class="wrapper">
                <div class="title">
                    <?php the_field('rez-10', 'option'); ?>
                </div>
                <div class="row">
                    <ul class="col-1">
                        <?php
                        $bool = true;
                        if( have_rows('rez-11', 'option') ): ?>
                            <?php while( have_rows('rez-11', 'option') ): the_row(); ?>
                                <li class="<?php if($bool){
                                    echo 'active';
                                    $bool = false;
                                } ?>">
                                    <?php the_sub_field('rez-11-1'); ?>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <div class="col-2">
                        <?php
                        $bool = true;
                        if( have_rows('rez-11', 'option') ): ?>
                            <?php while( have_rows('rez-11', 'option') ): the_row();
                                ?>
                                <div class="content <?php if($bool){
                                    echo 'active';
                                    $bool = false;
                                } ?>">
                                    <h2>
                                        <?php the_sub_field('rez-11-2'); ?>
                                    </h2>
                                    <?php the_sub_field('rez-11-3'); ?>
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
                            <?php if( have_rows('rez-11', 'option') ): ?>
                                <?php while( have_rows('rez-11', 'option') ): the_row(); ?>
                                    <div class="content">
                                        <h2><?php the_sub_field('rez-11-2'); ?></h2>
                                        <?php the_sub_field('rez-11-3'); ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-1">
            <div class="wrapper">
                <div class="text-1">
                    <?php the_field('rez-12', 'option'); ?>
                </div>
                <button class="btn js-callback">
                    <?php the_field('rez-13', 'option'); ?>
                </button>
            </div>
        </section>
        <section class="items-1">
            <div class="wrapper">
                <div class="title">
                    <?php the_field('rez-14', 'option'); ?>
                </div>
                <div class="row">
                    <?php if( have_rows('rez-15', 'option') ): ?>
                        <?php while( have_rows('rez-15', 'option') ): the_row();
                            ?>
                            <div class="col">
                                <img src="<?php the_sub_field('rez-15-1'); ?>" alt="">
                                <div>
                                    <?php the_sub_field('rez-15-2'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="head-img head-img-240">
            <div class="wrapper">
                <h1 class="title">
                    <?php the_field('rez-16', 'option'); ?>
                </h1>
                <div class="img" style="background-image: url(<?php the_field('rez-17', 'option')['url']; ?>)"></div>
            </div>
        </section>
        <section class="items-3">
            <div class="wrapper">
                <div class="row">
                    <?php if( have_rows('rez-18', 'option') ): ?>
                        <?php while( have_rows('rez-18', 'option') ): the_row();
                            ?>
                            <div class="col">
                                <div class="title">
                                    <?php the_sub_field('rez-18-1', 'option'); ?>
                                </div>
                                <div class="content">
                                    <?php the_sub_field('rez-18-2'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="resultat-add">
            <div class="wrapper-c">
                <div class="row">
                    <div class="col-1">
                        <img src="<?php the_field('rez-19', 'option')['url']; ?>" alt="">
                        <div class="help">
                            <div class="text-1">
                                <?php the_field('rez-20', 'option'); ?>
                            </div>
                            <div class="text-2">
                                <?php the_field('rez-21', 'option'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="text-3">
                        <?php the_field('rez-22', 'option'); ?>
                    </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?><?php
