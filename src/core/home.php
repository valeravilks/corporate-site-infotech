<?php get_header(); ?>
   <main class="home-page">
       <section class="home-page__1 hp1">
           <div class="hp1__slider owl-carousel owl-theme js-main-slider">
               <div class="item hp1__item">
                   <div class="hp1__container">
                       <div class="hp1__row">
                           <h1 class="hp1__head">
                               Цифровая трансформация бизнеса
                           </h1>
                       </div>
                       <div class="hp1__row">
                           <div class="hp1__text">
                               Решения в сфере Промышленного интернета вещей и предиктивной аналитики от российского разработчика
                           </div>
                       </div>
                       <div class="hp1__row">
                           <div class="hp1__btn-row">
                                <button class="hp1__btn">Презентация компании</button>
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
       <section class="home-page__3 hp3">
            <div class="hp3__container">
                <div class="hp3__row">
                    <div class="hp3__col-1">
                        Подберем оптимальное IT-решение для вашей организации
                    </div>
                    <div class="hp3__col-2">
                        <div class="hp3__text">
                            В нашей команде работают ведущие отраслевые эксперты. Подход Infotech Group сочетает сильные IT-компетенции и глубокое понимание специфики бизнеса заказчика.
                        </div>
                        <button class="hp3__button">
                            Обсудить проект
                        </button>
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
            </div>
           <div class="hp4__slider owl-carousel owl-theme-slide js-main-slider-2">
               <?php get_template_part('templates/project/project-cart'); ?>
           </div>
       </section>
       <?php get_template_part('templates/our-client'); ?>
       <section class="home-page__3 hp3">
           <div class="hp3__container">
               <div class="hp3__row">
                   <div class="hp3__col-1">
                       Подберем оптимальное IT-решение для вашей организации
                   </div>
                   <div class="hp3__col-2">
                       <div class="hp3__text">
                           В нашей команде работают ведущие отраслевые эксперты. Подход Infotech Group сочетает сильные IT-компетенции и глубокое понимание специфики бизнеса заказчика.
                       </div>
                       <button class="hp3__button">
                           Обсудить проект
                       </button>
                   </div>
               </div>
           </div>
       </section>
   </main>





<?php

get_footer(); ?>