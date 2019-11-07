<?php get_header(); ?>
   <main class="home-page">
       <section class="home-page__1 hp1">
           <div class="hp1__slider owl-carousel owl-theme-main js-main-slider">
               <div class="item hp1__item" style="background-image: url(<?php the_field('sl-1-img', 'option'); ?>)">
                   <div class="hp1__container">
                       <div class="hp1__row">
                           <h1 class="hp1__head">
                               <?php the_field('sl-1-head', 'option'); ?>
                           </h1>
                       </div>
                       <div class="hp1__row">
                           <div class="hp1__text">
                               <?php the_field('sl-1-text', 'option'); ?>
                           </div>
                       </div>
                       <div class="hp1__row">
                           <div class="hp1__btn-row">
                                <a href="<?php the_field('sl-1-link', 'option'); ?>" target="_blank" class="hp1__btn">
                                    <?php the_field('sl-1-text-link', 'option'); ?>
                                </a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="item hp1__item hp1__item-second">
                   <div class="hp1__container">
                       <div class="hp1__row hp1__row-1">
                           <div class="col col-1">
                               <div class="title">
                                   <?php the_field('sl-2-head', 'option'); ?>
                               </div>
                               <div class="text">
                                   <?php the_field('sl-2-text', 'option'); ?>
                               </div>
                               <div class="for-link">
                                   <a href="<?php the_field('sl-2-link', 'option'); ?>" class="link">
                                       <?php the_field('sl-2-text-link', 'option'); ?>
                                   </a>
                               </div>
                           </div>
                           <div class="col col-2">
                               <div class="img" style="background-image: url(<?php the_field('sl-3-img', 'option'); ?>)"></div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="item hp1__item hp1__item-second">
                   <div class="hp1__container">
                       <div class="hp1__row hp1__row-1">
                           <div class="col col-1">
                               <div class="title">
                                   <?php the_field('sl-3-head', 'option'); ?>
                               </div>
                               <div class="text">
                                   <?php the_field('sl-3-text', 'option'); ?>
                               </div>
                               <div class="for-link">
                                   <a href="<?php the_field('sl-3-link', 'option'); ?>" class="link">
                                       <?php the_field('sl-3-text-link', 'option'); ?>
                                   </a>
                               </div>

                           </div>
                           <div class="col col-2">
                               <div class="img" style="background-image: url(<?php the_field('sl-2-img', 'option'); ?>)" ></div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <?php
        $cart1 = get_field('section-cart-1', 'option');
        $cart2 = get_field('section-cart-2', 'option');
        $cart3 = get_field('section-cart-3', 'option');
       ?>
       <section class="home-page__2 hp2">
           <div class="hp2__container">
                <div class="hp2__head">
                    <?php the_field('section-title', 'option'); ?>
                </div>
               <div class="hp2__text">
                   <?php the_field('section-text', 'option'); ?>
                </div>
               <div class="hp2__row">
                   <?php
                   for($i = 1; $i < 4; $i++) :
                       $rows = 'section-cart-' . $i;
                       if( have_rows($rows, 'option') ):
                           while ( have_rows($rows, 'option') ) : the_row();
                             ?>
                           <div class="hp2__col" data-bg="<?php the_sub_field('image')['url']; ?>">
                               <a href="<?php the_sub_field('link'); ?>" class="cart1">
                                   <div class="cart1__head">
                                       <?php the_sub_field('head'); ?>
                                   </div>
                                   <div class="cart1__text">
                                       <?php the_sub_field('text'); ?>
                                   </div>
                                   <div class="cart1__mores">
                                       <img src="<?php echo get_template_directory_uri(); ?>/img/main/arrow-cart.svg" alt="" class="cart1__more-img">
                                       <div class="cart1__mores-text">Подробнее</div>

                                   </div>
                               </a>
                           </div>
                          <?php endwhile;
                       endif;
                   endfor;
                   ?>
               </div>
               <div class="row all-product">
                   <div class="all-product__col1">
                       <div class="all-product__text">
                           <?php the_field('section-head-2', 'option'); ?>
                       </div>
                       <a href="<?php the_field('section-l-link', 'option'); ?>" class="all-product__btn">Подробнее о платформе</a>
                   </div>
                    <?php
                    for($i = 1; $i < 4; $i++) :
                        $rows = 'section-cart-' . $i . $i;
                        if( have_rows($rows, 'option') ):
                            while ( have_rows($rows, 'option') ) : the_row();
                                ?>
                               <div class="all-product__col2 item-1">
                                   <div class="item-1__block">
                                       <img src="<?php the_sub_field('img')['url']; ?>" alt="" class="item-1__img">
                                   </div>
                                   <div class="item-1__head">
                                       <?php the_sub_field('title'); ?>
                                   </div>
                                   <div class="item-1__text">
                                       <?php the_sub_field('text'); ?>
                                   </div>
                               </div>
                            <?php endwhile;
                        endif;
                    endfor;
                    ?>
               </div>
           </div>
       </section>
       <section class="home-page__3 hp3" style="background-image: url(<?php the_field('s3-bg', 'option')['url'];?>)">
            <div class="hp3__container">
                <div class="hp3__row">
                    <div class="hp3__col-1">
                        <?php the_field('s3-head', 'option'); ?>
                    </div>
                    <div class="hp3__col-2">
                        <div class="hp3__text">
                            <?php the_field('s3-text', 'option'); ?>
                        </div>
                        <a href="<?php the_field('s3-link', 'option'); ?>" class="hp3__button">
                            <?php the_field('s3-text-link', 'option'); ?>
                        </a>
                    </div>
                </div>
            </div>
       </section>
       <section class="home-page__4 hp4">
            <div class="hp4__container">
                <div class="hp4__head">
                    Реализованные проекты
                </div>
                <div class="hp4__text">
                    Infotech Group реализует проекты для крупнейших компаний России
                </div>
                <div class="hp4__slider owl-carousel owl-theme-slide js-main-slider-2">
                    <?php get_template_part('templates/project/project-cart'); ?>
                </div>
            </div>

       </section>
       <?php get_template_part('templates/our-client'); ?>
       <section class="home-page__3 hp3" style="background-image: url(<?php the_field('s6-bg', 'option')['url'];?>)">
           <div class="hp3__container">
               <div class="hp3__row">
                   <div class="hp3__col-1">
                       <?php the_field('s6-head', 'option'); ?>
                   </div>
                   <div class="hp3__col-2">
                       <div class="hp3__text">
                           <?php the_field('s6-text', 'option'); ?>
                       </div>
                       <a href="<?php the_field('s6-link', 'option'); ?>" class="hp3__button">
                           <?php the_field('s6-text-link', 'option'); ?>
                       </a>
                   </div>
               </div>
           </div>
       </section>
       <section class="main-news">
           <div class="wrapper">
               <div class="head">
                   Новости компании
               </div>
               <div class="row row-1">

                   <?php $posts = get_posts( array(
                       'numberposts' => 15,
                       'category'    => 0,
                       'orderby'     => 'date',
                       'order'       => 'DESC',
                       'include'     => array(),
                       'exclude'     => array(),
                       'meta_key'    => '',
                       'meta_value'  =>'',
                       'post_type'   => 'new',
                       'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                   ) );

                   $i = 1;
                   ?>

                   <?php foreach( $posts as $post ):
                        if($i == 1) :
                       ?>

                        <a href="<?php the_permalink(); ?>" class="col col-1">
                            <div class="new-cart-large" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">
                                <div class="data">
                                    <?php echo get_the_date(); ?>
                                </div>
                                <div class="title">
                                    <?php the_title();?>
                                </div>
                                <div class="text">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </a>

                        <?
                        endif;
                        if($i == 2 || $i == 3) :
                        ?>
                            <a href="<?php the_permalink(); ?>" class="col col-2">
                                <div class="new-cart-medium">
                                    <div class="img-data" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)">
                                        <div class="data">
                                            <?php echo get_the_date(); ?>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <?php the_title();?>
                                    </div>
                                    <div class="text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </a>
                        <?php
                        endif;
                       $i++;
                        endforeach;
                   ?>
               </div>
               <div class="row row-2">
                    <?php
                        $i = 1;
                        foreach ($posts as $post):
                        if($i > 3 && $i < 8):
                        ?>
                        <a href="<?php the_permalink(); ?>" class="new-cart-small">
                            <div class="title">
                                <?php the_title();?>
                            </div>
                            <div class="text">
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                    <?php endif;
                    $i++;
                    endforeach; ?>
                   <?php wp_reset_postdata(); // сsброс ?>
               </div>
               <a href="<?php echo pll_home_url(); ?>news/" class="btn">
                   Перейти ко всем новостям
               </a>
           </div>
       </section>
       <secttion class="main-news-tablet">
           <div class="wrapper">
               <div class="head">
                   Новости компании
               </div>
               <div class="slide-news-tablet js-news-slide-tablet owl-carousel owl-theme">
                <?php $posts = get_posts( array(
                       'numberposts' => 10,
                       'category'    => 0,
                       'orderby'     => 'date',
                       'order'       => 'DESC',
                       'include'     => array(),
                       'exclude'     => array(),
                       'meta_key'    => '',
                       'meta_value'  =>'',
                       'post_type'   => 'new',
                       'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                   ) );
                   ?>
                   <?php foreach( $posts as $post ):

                        ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="new-cart-medium">
                                    <div class="img-data" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)">
                                        <div class="data">
                                            <?php echo get_the_date(); ?>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <?php the_title();?>
                                    </div>
                                    <div class="text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </a>
                        <?php
                        endforeach; ?>
               </div>
               <a href="<?php echo pll_home_url(); ?>news/" class="btn">
                   Перейти ко всем новостям
               </a>
           </div>
       </secttion>
   </main>
<?php

get_footer(); ?>