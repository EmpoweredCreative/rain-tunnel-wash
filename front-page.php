<?php
/**
 * Template: Front Page (Home)
 *
 * The template for displaying the home page.
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-home">

    <?php
    // Hero Section
    get_template_part('template-parts/home/hero');

    // Email Signup Bar
    get_template_part('template-parts/home/email-signup-bar');

    // Services Section
    get_template_part('template-parts/home/services-section');

    // Location Strip
    get_template_part('template-parts/home/location-strip');

    // Stats/About Section
    get_template_part('template-parts/home/stats-section');

    // Image Banner
    get_template_part('template-parts/home/image-banner');

    // Programs Section
    get_template_part('template-parts/home/programs-section');

    // Testimonials Section
    get_template_part('template-parts/home/testimonials');
    ?>

</main>

<?php
get_footer();
