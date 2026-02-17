<?php
/**
 * Template Name: Locations Page
 * Template for the Locations landing page (connected to Locations menu item).
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-locations">

    <?php get_template_part('template-parts/locations/hero'); ?>
    <div class="page-locations__content">
        <?php get_template_part('template-parts/locations/heading-section'); ?>
        <?php get_template_part('template-parts/locations/locations-cards'); ?>
        <?php get_template_part('template-parts/home/testimonials'); ?>
        <?php get_template_part('template-parts/locations/cta'); ?>
    </div>

</main>

<?php
get_footer();
