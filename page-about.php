<?php
/**
 * Template Name: About Page
 * Who We Are: hero, two-column, timeline, What Guides Us, intro, CTA.
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-about">

    <?php get_template_part( 'template-parts/about/hero' ); ?>
    <?php get_template_part( 'template-parts/about/two-column' ); ?>
    <?php get_template_part( 'template-parts/about/timeline' ); ?>
    <?php get_template_part( 'template-parts/about/what-guides-us' ); ?>
    <?php get_template_part( 'template-parts/about/intro' ); ?>
    <?php get_template_part( 'template-parts/about/cta' ); ?>

</main>

<?php
get_footer();
