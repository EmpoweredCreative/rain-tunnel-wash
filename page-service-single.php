<?php
/**
 * Template Name: Service Single Page
 * Template for individual service pages (e.g. Touchless Automatic, Soft Touch).
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-service-single">

    <?php get_template_part('template-parts/service-single/hero'); ?>
    <?php get_template_part('template-parts/service-single/two-column'); ?>
    <?php get_template_part('template-parts/service-single/value-props'); ?>
    <?php get_template_part('template-parts/service-single/how-it-works'); ?>
    <?php get_template_part('template-parts/service-single/email-opt-in'); ?>
    <?php get_template_part('template-parts/service-single/cta'); ?>

</main>

<?php
get_footer();
