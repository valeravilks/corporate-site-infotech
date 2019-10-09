<?php
/**
 * Template Name: Правление компании
 */

get_header(); ?>
<section class="team">
    <div class="wrapper">
        <?php get_template_part('templates/mini-menu'); ?>

        <div class="title">
            Правление компании
        </div>
        <div class="desktop">
            <div class="row">
                <?php get_template_part('templates/team-cart'); ?>
            </div>
        </div>
        <div class="mobile">
            <div class="row owl-carousel owl-theme-team js-team-owl">
                <?php get_template_part('templates/team-cart-mobile'); ?>
            </div>
        </div>

    </div>
</section>
<?php get_footer();?>