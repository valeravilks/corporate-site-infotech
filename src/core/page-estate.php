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
                    <a target="_blank" href="<?php the_field('estate-7-1', 'option'); ?>" class="button">
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
                                    <div class="text-2">
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
            <div class="title">
                <?php the_field('estate-12', 'option'); ?>
            </div>
            <div class="slider">
                <div class="sl owl-carousel owl-theme-estate js-estate-slider">
                    <?php if( have_rows('estate-13', 'option') ): ?>
                        <?php while( have_rows('estate-13', 'option') ): the_row();
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
        <div class="scope">
            <div class="title">
                <?php the_field('estate-14', 'option')?>
            </div>
            <div class="x-row">
                <?php if( have_rows('estate-15', 'option') ): ?>
                    <?php while( have_rows('estate-15', 'option') ): the_row();
                        ?>
                        <div class="col" style="background-image: url(<?php the_sub_field('estate-sf-2'); ?>)">
                            <div class="i-text">
                                <?php the_sub_field('estate-sf-1'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="real-project">
        <div class="wrapper">
            <div class="title">
                <?php the_field('estate-16', 'option');?>
            </div>
            <div class="row">
                <?php if( have_rows('estate-17', 'option') ): ?>
                    <?php while( have_rows('estate-17', 'option') ): the_row();
                        ?>
                        <div class="col">
                            <img src="<?php the_sub_field('estate-real-1'); ?>" alt="" class="img">
                            <div class="text-c">
                                <?php the_sub_field('estate-real-2'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="effect">
        <div class="wrapper-ef">
            <div class="text">
                <?php the_field('estate-18', 'option'); ?>
            </div>
            <button class="btn js-callback">
                <?php the_field('estate-19-2', 'option'); ?>
            </button>
        </div>
    </div>
    <div class="example">
        <div class="wrapper">
            <div class="title">
                <?php the_field('estate-19', 'option'); ?>
            </div>
            <div class="img" style="background-image: url(<?php the_field('estate-21', 'option')['url']; ?>)"></div>
            <div class="row">
                <?php if( have_rows('estate-22', 'option') ):
                    while( have_rows('estate-22', 'option') ): the_row();?>
                        <div class="col">
                            <div class="head-2">
                                <?php the_sub_field('s-head-1'); ?>
                            </div>
                            <div class="row">
                                <div class="cart-ex">
                                    <div class="text-1">
                                        <?php the_sub_field('s-text-1'); ?>
                                    </div>
                                    <div class="subs">
                                        <div class="text-2">
                                            <?php the_sub_field('s-text-2'); ?>
                                        </div>
                                        <div class="text-3">
                                            <?php the_sub_field('s-text-3'); ?>
                                        </div>
                                    </div>
                                    <div class="text-4">
                                        <?php the_sub_field('s-text-4'); ?>
                                    </div>
                                </div>
                                <div class="text-sub">
                                    <?php the_sub_field('s-text-5'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('estate-23', 'option') ):
                    while( have_rows('estate-23', 'option') ): the_row();?>
                        <div class="col">
                            <div class="cont">
                                <div class="head-2">
                                    <?php the_sub_field('s-head-1'); ?>
                                </div>
                                <p class="parag">
                                    <?php the_sub_field('s-text-1'); ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('estate-24', 'option') ):
                    while( have_rows('estate-24', 'option') ): the_row();?>
                        <div class="col">
                            <div class="head-2">
                                <?php the_sub_field('s-head-1'); ?>
                            </div>
                            <div class="row">
                                <div class="cart-ex">
                                    <div class="text-1">
                                        <?php the_sub_field('s-text-1'); ?>
                                    </div>
                                    <div class="subs">
                                        <div class="text-2">
                                            <?php the_sub_field('s-text-2'); ?>
                                        </div>
                                        <div class="text-3">
                                            <?php the_sub_field('s-text-3'); ?>
                                        </div>
                                    </div>
                                    <div class="text-4">
                                        <?php the_sub_field('s-text-4'); ?>
                                    </div>
                                </div>
                                <div class="text-sub">
                                    <?php the_sub_field('s-text-5'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="result">
        <div class="wrapper">
            <div class="title">
                <?php the_field('estate-25', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('estate-26', 'option') ): ?>
                    <?php while( have_rows('estate-26', 'option') ): the_row();
                        ?>
                        <div class="col">
                            <div class="row-sub">
                                <div class="col-sub">
                                    <div class="text-1">
                                        <?php the_sub_field('c3-head'); ?>
                                    </div>
                                    <div class="text-2">
                                        <?php the_sub_field('c3-text1'); ?>
                                    </div>
                                </div>
                                <div class="col-sub">
                                    <div class="text-3">
                                        <?php the_sub_field('c3-text2'); ?>
                                    </div>
                                    <div class="text-4">
                                        <?php the_sub_field('c3-text3'); ?>
                                    </div>
                                    <div class="text-5">
                                        <?php the_sub_field('c3-text4'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="head-2">
                <?php the_field('estate-27', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('estate-28', 'option') ): ?>
                    <?php while( have_rows('estate-28', 'option') ): the_row();
                        ?>
                        <div class="col-3">
                            <div class="text-6">
                                <?php the_sub_field('c4-t1'); ?>
                            </div>
                            <div class="text-7">
                                <?php the_sub_field('c4-t2'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <section class="home-page__3 hp3" style="background-image: url(<?php the_field('ss3-bg', 'option')['url'];?>)">
        <div class="hp3__container">
            <div class="hp3__row">
                <div class="hp3__col-1">
                    Остались вопросы о продукте?
                </div>
                <div class="hp3__col-2">
                    <div class="hp3__text">
                        Отправьте запрос — наш бизнес-аналитик свяжется с вами и даст более подробную информацию.
                    </div>
                    <a href="<?php the_field('s3-link', 'option'); ?>" class="hp3__button">
                        Задать вопрос
                    </a>
                </div>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>