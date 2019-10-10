<?php
/**
 * Template Name: Лицензии
 */

$posts = get_posts( array(
    'numberposts' => 100,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'license',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

get_header(); ?>
    <section class="license">
        <div class="wrapper">
            <?php get_template_part('templates/mini-menu'); ?>
            <div class="title">
                Лицензии
            </div>
            <div class="row">
                <?php foreach( $posts as $post ):
                    ?>
                    <div  class="col">
                        <div class="image" style="background-image: url(<?php the_field('license-img'); ?>")>
                        </div>
                        <div class="name">
                            <?php the_field('license-title');?>
                        </div>
                        <div class="dop">
                            <?php the_field('license-dop');?>
                        </div>
                    </div>
                <? endforeach; ?>
                <?php wp_reset_postdata(); // сsброс ?>
            </div>
        </div>
    </section>
<?php get_footer();?>