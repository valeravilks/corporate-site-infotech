<?php $posts = get_posts( array(
    'numberposts' => 100,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'our-clients',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );?>




<section class="our-client">
    <div class="wrapper">
        <div class="head">
            Наши клиенты
        </div>
        <div class="row">

            <?php foreach( $posts as $post ):

            $image = get_field('our-client-logo');
            $text = get_field('our-client-text');
            ?>

            <div class="block">
                <div class="cont">
                    <img src="<?php echo $image['url']; ?>" class="icon">
                </div>
                <div class="desc">
                    <?php echo $text; ?>
                </div>
            </div>
            <? endforeach; ?>
        </div>
    </div>
</section>
<section class="our-client our-client-mobile">
    <div class="wrapper">
        <div class="head">
            Наши клиенты
        </div>
        <div class="owl-carousel owl-theme-client js-client-cart">
            <?php
                $i = 4;
                $j = 0;
                foreach( $posts as $post ):

                $image = get_field('our-client-logo');
                $text = get_field('our-client-text');
                if(($i % 4) == 0) :
                    $j = 0;
                ?>
                <div class="row">
                <?php endif; ?>

                <div class="block">
                    <div class="cont">
                        <img src="<?php echo $image['url']; ?>" class="icon">
                    </div>
                    <div class="desc">
                        <?php echo $text; ?>
                    </div>
                </div>
                <?
                if($j == 3) : ?>
                    </div>
                <?php endif;
                $i++;
                $j++;
                endforeach; ?>
        </div>
    </div>
</section>


<?php wp_reset_postdata(); // сsброс ?>