<?php

/**
 * Template Name: Intellect
 */

get_header(); ?>
    <main class="intellect">
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
                <?php the_field('in-1', 'option'); ?>
            </span>
                </div>
            </div>
        </section>
        <section class="head-img">
            <div class="wrapper">
                <div class="img" style="background-image: url(<?php the_field('in-2', 'option')['url']; ?>)"></div>
            </div>
        </section>
        <section class="head-cont">
            <div class="wrapper">
                <div class="row">
                    <div class="col-1">
                        <img src="<?php the_field('in-3', 'option')['url']; ?>" alt="" class="logo">
                        <div class="help">
                            <img src="<?php the_field('in-4', 'option')['url']; ?>" class="logo-2">
                            <div class="text">
                                <?php the_field('in-5', 'option'); ?>
                            </div>
                        </div>
                        <button class="button js-callback">
                            <?php the_field('in-6', 'option'); ?>
                        </button>
                    </div>
                    <div class="col-2">
                        <div class="text">
                            <?php the_field('in-7', 'option'); ?>
                        </div>
                        <div class="text-2">
                            <?php the_field('in-8', 'option'); ?>
                        </div>
                        <a target="_blank" href="<?php the_field('in-10', 'option'); ?>" class="button">
                            <?php the_field('in-9', 'option'); ?>
                        </a>
                        <button class="button-2 js-callback">
                            <?php the_field('in-6', 'option'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="message">
            <div class="wrapper">
                <div class="text">
                    <?php the_field('in-11', 'option');?>
                </div>
            </div>
        </section>
        <section class="items-1">
            <div class="wrapper">
                <div class="title">
                    <?php the_field('in-12', 'option'); ?>
                </div>
                <div class="row">
                    <?php if( have_rows('in-13', 'option') ): ?>
                        <?php while( have_rows('in-13', 'option') ): the_row();
                            ?>
                            <div class="col">
                                <img class="h-80" src="<?php the_sub_field('in-14'); ?>" alt="">
                                <div>
                                    <?php the_sub_field('in-15'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="head-text">
            <div class="wrapper">
                <div class="title">
                    <?php the_field('in-16', 'option');?>
                </div>
                <div class="text">
                    <?php the_field('in-17', 'option');?>
                </div>
            </div>
        </section>
        <?php if( have_rows('in-18', 'option') ): ?>
            <?php while( have_rows('in-18', 'option') ): the_row();
                ?>
                <section class="content-1">
                    <div class="wrapper">
                        <div class="title">
                            <?php the_sub_field('in-19');?>
                        </div>
                        <div class="img" style="background-image: url(<?php the_sub_field('in-20')['url']; ?>)"></div>
                        <div class="row">
                            <?php if( have_rows('in-21') ): ?>
                                <?php while( have_rows('in-21') ): the_row();
                                    ?>
                                    <div class="col">
                                        <div class="text-1">
                                            <?php the_sub_field('in-22');?>
                                        </div>
                                        <div class="content">
                                            <?php the_sub_field('in-23');?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
        <section class="image-cart mt-100">
            <div class="wrapper">
                <div class="title">
                    <?php the_field('in-24', 'option')?>
                </div>
                <div class="x-row">
                    <?php if( have_rows('in-25', 'option') ): ?>
                        <?php while( have_rows('in-25', 'option') ): the_row();
                            ?>
                            <div class="col" style="background-image: url(<?php the_sub_field('in-26'); ?>)">
                                <div class="i-text">
                                    <?php the_sub_field('in-27'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="items-2">
            <div class="wrapper">
                <div class="title">
                    <?php the_field('in-28', 'option'); ?>
                </div>
                <div class="row">
                    <?php if( have_rows('in-29', 'option') ): ?>
                        <?php while( have_rows('in-29', 'option') ): the_row();
                            ?>
                            <div class="col">
                                <img src="<?php the_sub_field('in-30'); ?>" alt="">
                                <div>
                                    <?php the_sub_field('in-31'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="items-1">
            <div class="wrapper">
                <div class="title">
                    <?php the_field('in-32', 'option'); ?>
                </div>
                <div class="row">
                    <?php if( have_rows('in-33', 'option') ): ?>
                        <?php while( have_rows('in-33', 'option') ): the_row();
                            ?>
                            <div class="col">
                                <img src="<?php the_sub_field('in-34'); ?>" alt="">
                                <div>
                                    <?php the_sub_field('in-35'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="cta">
            <div class="wrapper">
                <div class="row">
                    <div class="col-1">
                        <?php the_field('in-36', 'option'); ?>
                    </div>
                    <div class="col-2">
                        <div class="text">
                            <?php the_field('in-37', 'option'); ?>
                        </div>
                        <button class="button js-callback">
                            <?php the_field('in-38', 'option'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>s