<?php
/**
 * Template Name: Продукты
 */

get_header(); ?>
    <main class="products">
        <div class="wrapper">
            <?php get_template_part('templates/mini-menu-products'); ?>
            <div class="title">
                <?php the_field('pr-1', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('pr-2', 'option') ): ?>
                    <?php while( have_rows('pr-2', 'option') ): the_row();
                        ?>
                        <a href="<?php the_sub_field('pr-6')?>" class="col">
                            <div class="help">
                                <div class="image"
                                     style="background-image: url(<?php the_sub_field('pr-3')?>)"
                                >
                                </div>
                            </div>
                            <div class="text-1">
                                <?php the_sub_field('pr-4')?>
                            </div>
                            <div class="text-2">
                                <?php the_sub_field('pr-5')?>
                            </div>
                            <div class="link">
                                Узнать подробнее
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>
<?php get_footer();?>