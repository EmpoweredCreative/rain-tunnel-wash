<?php
/**
 * Template Name: FAQ Page
 * Frequently Asked Questions: hero + accordion FAQ section (like program single).
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-faq">

    <?php get_template_part( 'template-parts/faq/hero' ); ?>
    <?php get_template_part( 'template-parts/faq/faq-section' ); ?>

</main>

<?php
get_footer();
