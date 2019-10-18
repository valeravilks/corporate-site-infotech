<?php

/**
 * Template Name: Новости компании
 */

get_header();

?>

<section class="news-page">
    <div class="wrapper">
        <?php get_template_part('templates/mini-menu-news'); ?>
        <div class="find_block">
            <div class="button">
                <div class="help">Поиск по тегам</div>
                <div class="quarat"></div>
            </div>
        </div>
        <?php wp_tag_cloud( array(
            'smallest'  => 14,
            'largest'   => 14,
            'unit'      => 'px',
            'number'    => 0,
            'format'    => 'list',
            'separator' => "\n",
            'orderby'   => 'name',
            'order'     => 'ASC',
            'exclude'   => null,
            'include'   => null,
            'link'      => 'view',
            'taxonomy'  => 'tags',
            'echo'      => true,
            'topic_count_text_callback' => 'default_topic_count_text',
        ) );
        ?>
        <div class="title">
            Новости компании
        </div>
        <div class="row">

            <?php $posts = get_posts( array(
                'numberposts' => 1000,
                'category'    => 0,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'new',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );?>

            <?php foreach( $posts as $post ):
                ?>
                <a class="col" href="<?php the_permalink(); ?>">
                    <div class="img" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div>
                    <div class="date">
                        <?php echo get_the_date(); ?>
                    </div>
                    <div class="head">
                        <?php the_title(); ?>
                    </div>
                    <div class="text">
                        <?php the_excerpt(); ?>
                    </div>
                </a>
            <? endforeach; ?>
            <?php wp_reset_postdata(); // сsброс ?>
        </div>
    </div>

</section>
<?php get_footer(); ?>
