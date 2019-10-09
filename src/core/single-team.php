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
    </div>
</section>
<?php get_footer(); ?>
