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
       <section class="home-page__2 hp2">
           <div class="hp2__container">
                <div class="hp2__head">
                    Направления
                </div>
               <div class="hp2__text">
                   Развиваем цифровую экономику и строим Индустрию 4.0
                </div>
               <div class="hp2__row">
                   <div class="hp2__col">
                       <a href="https://google.com" class="cart1">
                           <div class="cart1__head">
                               Промышленность
                           </div>
                           <div class="cart1__text">
                               Прогнозирование отказов промышленного оборудования
                           </div>
                           <div class="cart1__more">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/main/arrow-cart.svg" alt="" class="cart1__more-img">
                               <div class="cart1__more-text">Подробнее</div>
                           </div>
                       </a>
                   </div>
                   <div class="hp2__col">
                       <a href="https://google.com" class="cart1">
                           <div class="cart1__head">
                               Промышленность
                           </div>
                           <div class="cart1__text">
                               Прогнозирование отказов промышленного оборудования
                           </div>
                           <div class="cart1__more">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/main/arrow-cart.svg" alt="" class="cart1__more-img">
                               <div class="cart1__more-text">Подробнее</div>
                           </div>
                       </a>
                   </div>
                   <div class="hp2__col">
                       <a href="https://google.com" class="cart1">
                           <div class="cart1__head">
                               Промышленность
                           </div>
                           <div class="cart1__text">
                               Прогнозирование отказов промышленного оборудования
                           </div>
                           <div class="cart1__more">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/main/arrow-cart.svg" alt="" class="cart1__more-img">
                               <div class="cart1__more-text">Подробнее</div>
                           </div>
                       </a>
                   </div>
               </div>
               <div class="row all-product">
                   <div class="all-product__col1">
                       <div class="all-product__text">
                           Все продукты
                           Infotech Group реализованы
                           на базе собственной платформы
                       </div>
                       <button class="all-product__btn">Подробнее о платформе</button>
                   </div>
                   <div class="all-product__col2 item-1">
                       <div class="item-1__block">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/main/item1.svg" alt="" class="item-1__img">
                       </div>
                       <div class="item-1__head">
                           Intellect
                       </div>
                       <div class="item-1__text">
                           Анализ и обработка событий в реальном времени
                       </div>
                   </div>
                   <div class="all-product__col2 item-1">
                       <div class="item-1__block">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/main/item1.svg" alt="" class="item-1__img">
                       </div>
                       <div class="item-1__head">
                           Intellect
                       </div>
                       <div class="item-1__text">
                           Анализ и обработка событий в реальном времени
                       </div>
                   </div>
                   <div class="all-product__col2 item-1">
                       <div class="item-1__block">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/main/item1.svg" alt="" class="item-1__img">
                       </div>
                       <div class="item-1__head">
                           Intellect
                       </div>
                       <div class="item-1__text">
                           Анализ и обработка событий в реальном времени
                       </div>
                   </div>
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
                <div class="hp4__slider owl-carousel owl-theme-slide js-main-slider-2">
                   <?php get_template_part('templates/project/project-cart'); ?>
                </div>
            </div>
       </section>
   </main>





<?php

get_footer(); ?>