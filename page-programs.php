<?php
/**
 * Template Name: Programs Page
 * Template: Page - Programs (Landing)
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-programs">

    <?php get_template_part('template-parts/programs/hero'); ?>
    <div class="page-programs__content">
        <?php get_template_part('template-parts/programs/heading-section'); ?>
        <?php get_template_part('template-parts/programs/programs-cards'); ?>
        <?php get_template_part('template-parts/programs/programs-intro'); ?>
        <?php get_template_part('template-parts/programs/cta'); ?>
    </div>

</main>

<?php
get_footer();
