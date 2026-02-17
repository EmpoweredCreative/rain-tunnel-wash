<?php
/**
 * Template Name: Program Single Form
 * Same as Program Single but replaces the intro section with a form section (header, paragraph, Fluent Form shortcode).
 * Use for pages like Fleet Program that need a form instead of the standard intro.
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-program-single page-program-single-form">

    <?php get_template_part('template-parts/program-single/hero'); ?>
    <?php get_template_part('template-parts/program-single/two-column'); ?>
    <?php get_template_part('template-parts/program-single/value-props'); ?>
    <?php get_template_part('template-parts/program-single/how-it-works'); ?>
    <?php get_template_part('template-parts/program-single/form-section'); ?>
    <?php get_template_part('template-parts/program-single/facts'); ?>

</main>

<?php
get_footer();
