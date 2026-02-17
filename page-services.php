<?php
/**
 * Template Name: Services Page
 * Template: Page - Services
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-services">

    <?php get_template_part('template-parts/services/hero'); ?>
    <div class="page-services__content">
        <?php get_template_part('template-parts/services/heading-section'); ?>
        <?php get_template_part('template-parts/services/icon-selection'); ?>
        <?php get_template_part('template-parts/services/list'); ?>
        <?php get_template_part('template-parts/services/cta'); ?>
    </div>

</main>

<?php
get_footer();
