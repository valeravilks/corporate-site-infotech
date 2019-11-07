<?php

/**
 * Template Name: Reference
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
                <?php the_field('re-1', 'option'); ?>
            </span>
            </div>
        </div>
    </section>
    <section class="head-img">
        <div class="wrapper">
            <div class="img" style="background-image: url(<?php the_field('re-2', 'option')['url']; ?>)"></div>
        </div>
    </section>
    <section class="head-cont">
        <div class="wrapper">
            <div class="row">
                <div class="col-1">
                    <img src="<?php the_field('re-3', 'option')['url']; ?>" alt="" class="logo">
                    <div class="help">
                        <img src="<?php the_field('re-4', 'option')['url']; ?>" class="logo-2">
                        <div class="text">
                            <?php the_field('re-5', 'option'); ?>
                        </div>
                    </div>
                    <button class="button js-callback">
                        <?php the_field('re-6', 'option'); ?>
                    </button>
                </div>
                <div class="col-2">
                    <div class="text">
                        <?php the_field('re-7', 'option'); ?>
                    </div>
                    <a target="_blank" href="<?php the_field('re-9', 'option'); ?>" class="button">
                        <?php the_field('re-8', 'option'); ?>
                    </a>
                    <button class="button-2 js-callback">
                        <?php the_field('in-6', 'option'); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="items-head-text">
        <div class="wrapper">
            <div class="title">
                <?php the_field('re-10', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('re-11', 'option') ): ?>
                    <?php while( have_rows('re-11', 'option') ): the_row();
                        ?>
                        <div class="col">
                            <img class="h-80" src="<?php the_sub_field('re-12'); ?>" alt="">
                            <div class="text-1">
                                <?php the_sub_field('re-13'); ?>
                            </div>
                            <div class="text-2">
                                <?php the_sub_field('re-14'); ?>
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
                <?php the_field('re-15', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('re-16', 'option') ): ?>
                    <?php while( have_rows('re-16', 'option') ): the_row();
                        ?>
                        <div class="col">
                            <div class="image"
                                 style="background-image: url(<?php the_sub_field('re-17'); ?>">
                            </div>
                            <div class="text-1">
                                <?php the_sub_field('re-18'); ?>
                            </div>
                            <div class="text-2">
                                <?php the_sub_field('re-19'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="h-text">
        <div class="wrapper">
            <div class="row">
                <div class="col-1">
                    <?php the_field('re-20', 'option'); ?>
                </div>
                <div class="col-2">
                    <?php the_field('re-21', 'option'); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <div class="wrapper">
            <div class="row">
                <div class="col-1">
                    <?php the_field('re-22', 'option'); ?>
                </div>
                <div class="col-2">
                    <div class="text">
                        <?php the_field('re-23', 'option'); ?>
                    </div>
                    <button class="button js-callback">
                        <?php the_field('re-24', 'option'); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>s