<?php
get_header();
?>

<section class="single-new">
    <div class="wrapper">
        <div class="bread-crumb">
            <a href="<?php echo pll_home_url(); ?>news/" class="all_news">
                Все новости
            </a>
            <span class="arrow">
                >
            </span>
            <span class="current-news">
               <?php the_title(); ?>
            </span>
        </div>
        <div class="row">
            <div class="col-1">
                <div class="date">
                    Дата размещения
                    <?php echo get_the_date(); ?>
                </div>
                <ul class="tags">
                <?php $tags = get_the_terms( $post->ID, 'tags' );
                foreach ($tags as $tag):
                    $link = get_term_link( $tag->term_taxonomy_id, 'tags');
                    ?>
                <li>
                    <a href="<?php echo $link ?>">
                        <?php echo $tag->name ?>
                    </a>
                </li>
                <?php endforeach;
                ?>
                </ul>
            </div>
            <div class="col-2">
                <div class="head">
                    <?php the_title(); ?>
                </div>
                <div class="content-post">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
