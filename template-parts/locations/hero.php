<?php
/**
 * Template Part: Locations Page - Hero
 * Background image only (same as Services). Title, subtitle, paragraph and buttons are in heading-section below.
 *
 * @package RainTunnelWash
 */

$background = get_field('hero_background');
$bg_url = $background && !empty($background['url']) ? $background['url'] : get_template_directory_uri() . '/assets/images/hero-placeholder.jpg';
?>

<section class="page-hero page-hero--services" style="background-image: url('<?php echo esc_url($bg_url); ?>');">
    <div class="page-hero__bg" style="background-image: url('<?php echo esc_url($bg_url); ?>');"></div>
    <div class="page-hero__overlay" aria-hidden="true"></div>
</section>
