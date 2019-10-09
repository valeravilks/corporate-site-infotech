<?php $posts = get_posts( array(
    'numberposts' => 100,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'team',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );?>

<?php foreach( $posts as $post ):
    ?>

    <a href="#" class="item">
        <div class="help">
            <div class="img" style="background-image: url(<?php the_field('team-prev')['url']; ?>)"></div>
        </div>
        <div class="name">
            <?php the_field('team-name'); ?>
        </div>
        <div class="status">
            <?php the_field('team-status'); ?>
        </div>
    </a>
<? endforeach; ?>
<?php wp_reset_postdata(); // сsброс ?>