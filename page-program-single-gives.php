<?php
/**
 * Template Name: Program Single Gives
 * Same as Program Single up to the value proposition bar; then only three sections (each: heading + paragraph).
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-program-single page-program-single-gives">

    <?php get_template_part('template-parts/program-single/hero'); ?>
    <?php get_template_part('template-parts/program-single/two-column'); ?>
    <?php get_template_part('template-parts/program-single/value-props'); ?>
    <?php get_template_part('template-parts/program-single/gives-sections'); ?>
    <?php get_template_part('template-parts/program-single/cta'); ?>

</main>

<?php
get_footer();
