<?php
/**
 * Template Name: Program Single Page
 * Template for individual program pages (e.g. Wash Club, Fleet Program).
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-program-single">

    <?php get_template_part('template-parts/program-single/hero'); ?>
    <?php get_template_part('template-parts/program-single/two-column'); ?>
    <?php get_template_part('template-parts/program-single/value-props'); ?>
    <?php get_template_part('template-parts/program-single/how-it-works'); ?>
    <?php
    $use_form = get_field('program_intro_use_form') && trim((string) get_field('program_intro_form_shortcode')) !== '';
    if ($use_form) {
        get_template_part('template-parts/program-single/form-section');
    } else {
        get_template_part('template-parts/program-single/intro');
    }
    ?>
    <?php get_template_part('template-parts/program-single/facts'); ?>

</main>

<?php
get_footer();
