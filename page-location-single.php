<?php
/**
 * Template Name: Location Single Page
 * Template for individual location pages (e.g. Orchard Drive).
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-location-single">

    <?php get_template_part('template-parts/location-single/hero'); ?>
    <?php get_template_part('template-parts/location-single/heading-section'); ?>
    <?php get_template_part('template-parts/location-single/two-cards'); ?>
    <?php get_template_part('template-parts/location-single/intro'); ?>
    <?php
    $location_slug = get_post_field( 'post_name', get_queried_object_id() );
    if ( $location_slug !== 'lincoln-way-east' ) {
        get_template_part( 'template-parts/location-single/how-it-works' );
    }
    ?>
    <?php get_template_part('template-parts/location-single/email-opt-in'); ?>
    <?php get_template_part('template-parts/location-single/cta'); ?>

</main>

<?php
get_footer();
