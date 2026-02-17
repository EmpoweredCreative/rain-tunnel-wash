<?php
/**
 * Template Part: Programs Hero
 * Same as services landing – hero image only (heading content is in heading section below).
 *
 * @package RainTunnelWash
 */

$background = get_field('hero_background');
$bg_url = $background && !empty($background['url']) ? $background['url'] : get_template_directory_uri() . '/assets/images/hero-placeholder.jpg';
$position = get_field('hero_background_position');
$position = $position ? trim($position) : 'top';
// Default top = sign at top, flag visible below. Use "center", "bottom", or e.g. "200px" to adjust.
$bg_position = $position;
?>

<section class="page-hero page-hero--services page-hero--programs" style="background-image: url('<?php echo esc_url($bg_url); ?>'); background-position: center <?php echo esc_attr($bg_position); ?>; background-size: cover;">
    <div class="page-hero__bg page-hero__bg--programs" style="background-image: url('<?php echo esc_url($bg_url); ?>'); background-position: center <?php echo esc_attr($bg_position); ?>;"></div>
    <div class="page-hero__overlay" aria-hidden="true"></div>
</section>
