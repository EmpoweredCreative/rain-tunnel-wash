<?php
/**
 * Template Name: Contact Page
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-contact">

    <?php get_template_part( 'template-parts/contact/hero' ); ?>
    <?php get_template_part( 'template-parts/contact/two-columns' ); ?>
    <?php get_template_part( 'template-parts/contact/form-section' ); ?>
    <?php get_template_part( 'template-parts/contact/content-section' ); ?>
    <?php get_template_part( 'template-parts/contact/cta' ); ?>

</main>

<?php
get_footer();
