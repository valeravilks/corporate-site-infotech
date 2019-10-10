<?php

get_header();
 ?>
<section class="single-team">
    <div class="wrapper">
        <div class="help">
            <?php get_template_part('templates/mini-menu'); ?>
        </div>
        <?php
            $linkFull = get_permalink();
            $pos = strripos($linkFull, 'team');
            $link = substr($linkFull, 0, $pos + 5);
        ?>
        <a href="<?php echo $link; ?>" class="back">
            < ВЕРНУТЬСЯ К СПИСКУ
        </a>
        <div class="row">
            <div class="col-1">
                <div class="row">
                    <div class="help2">
                        <div class="title">
                            <?php the_field('team-name'); ?>
                        </div>
                        <div class="status">
                            <?php the_field('team-status'); ?>
                        </div>
                    </div>
                    <img class="img" src="<?php the_field('team-img')['url']; ?>" alt="">
                </div>
            </div>
            <div class="col-2">
                <?php the_field('team-desc'); ?>
            </div>
        </div>
        <?php
        $next_post = get_next_post();
        $prev_post = get_previous_post();

        if(empty($next_post))
        $justify = 'style="justify-content: flex-end;"'
        ?>

        <div class="row-mini" <?php echo $justify ?>>
            <?php
            if( ! empty($next_post) ){
             $idNext = $next_post->ID; ?>
            <a href="<?php echo get_permalink($idNext); ?>" class="prev">
                <div class="img-mini" style="background-image: url(<?php the_field('team-prev', $idNext)['url']; ?>)"></div>
                <div class="block-mini">
                    <div class="text-mini">
                        Предыдущий
                    </div>
                    <div class="title-mini">
                        <?php the_field('team-name', $idNext); ?>
                    </div>
                    <div class="status-mini">
                        <?php the_field('team-status', $idNext); ?>
                    </div>
                </div>

                <?php
                }
                ?>
            </a>

            <?php

            if( ! empty($prev_post) ){
            $idPrev = $prev_post->ID ?>
            <a href="<?php echo get_permalink($idPrev); ?>" class="next">
                <div class="img-mini" style="background-image: url(<?php the_field('team-prev', $idPrev)['url']; ?>)"></div>
                <div class="block-mini">
                    <div class="text-mini">
                        Следующий
                    </div>
                    <div class="title-mini">
                        <?php the_field('team-name', $idPrev); ?>
                    </div>
                    <div class="status-mini">
                        <?php the_field('team-status', $idPrev); ?>
                    </div>
                </div>

                <?php
                }
                ?>
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
