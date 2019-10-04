<?php
$posts = get_posts( array(
    'numberposts' => 100,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'project',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

// Отдельный пост
$itemNum = 0;

foreach( $posts as $post ):

    $image = get_field('project_icon');
    $name = get_field('project_name');
    ?>


    <div class="hp4__item project-item">
        <div class="project-item__header">
            <img src="<?php echo $image['url']; ?>" alt="" class="project-item__img">
            <div class="project-item__head">
                <?php the_field('project_name'); ?>
            </div>
        </div>
        <div class="project-item__owl owl-carousel owl-theme-cart js-project-cart">
        <?php
        for($i = 1; $i < 10; $i++):
            if( have_rows('project_card_' . $i) ):
                while( have_rows('project_card_' . $i) ): the_row();
                    if(get_sub_field('project_slide_text')):?>
                    <div class="project-item__row">
                        <div class="project-item__col">
                            <div class="project-item__text">
                                <?php echo get_sub_field('project_slide_text'); ?>
                            </div>
                        </div>
                        <div class="project-item__col-1">
                            <div class="project-item__text-1">
                                <?php echo get_sub_field('project_text_1'); ?>
                            </div>
                            <div class="project-item__text-1">
                                <?php echo get_sub_field('project_text_3'); ?>
                            </div>
                        </div>
                        <div class="project-item__col-2">
                            <div class="project-item__text-2">
                                <?php echo get_sub_field('project_text_2'); ?>
                            </div>
                            <div class="project-item__text-2">
                                <?php echo get_sub_field('project_text_4'); ?>
                            </div>
                        </div>
                    </div>
                    <?php endif;
                endwhile; ?>
            <?php endif; ?>
        <?php endfor; ?>
        </div>
    </div>
<? endforeach; ?>




<?php wp_reset_postdata(); // сsброс ?>