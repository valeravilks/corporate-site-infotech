<?php
/**
 * Template Name: Платформа Infotech
 */

get_header(); ?>
    <main class="platform">
        <div class="wrapper">
            <?php get_template_part('templates/mini-menu-products'); ?>
            <div class="title">
                <?php the_field('pl-1', 'option'); ?>
            </div>
            <div class="text">
                <?php the_field('pl-2', 'option'); ?>
            </div>
            <div class="row">
                <?php if( have_rows('pl-3', 'option') ): ?>
                    <?php while( have_rows('pl-3', 'option') ): the_row();
                        ?>
                        <a href="<?php the_sub_field('pl-7')?>" class="col">
                            <div class="help">
                                <img class="image"
                                     src="<?php the_sub_field('pl-4')?>"
                                >
                            </div>
                            <div class="text-1">
                                <?php the_sub_field('pl-5')?>
                            </div>
                            <div class="text-2">
                                <?php the_sub_field('pl-6')?>
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