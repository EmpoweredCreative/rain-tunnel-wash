<?php
/**
 * Home Page - Hero Section
 *
 * @package RainTunnelWash
 */

// ACF fields (with fallbacks)
$hero_image = function_exists('get_field') ? get_field('hero_image') : null;
$hero_badge = function_exists('get_field') ? get_field('hero_badge') : '';
$acf_title = function_exists('get_field') ? get_field('hero_title') : '';
$acf_subtitle = function_exists('get_field') ? get_field('hero_subtitle') : '';
$acf_description = function_exists('get_field') ? get_field('hero_description') : '';

// Apply fallbacks if empty
$hero_title = !empty($acf_title) ? $acf_title : 'Car Wash in Chambersburg';
$hero_subtitle = !empty($acf_subtitle) ? $acf_subtitle : 'FAST, CONVENIENT & OPEN 24/7';
$hero_description = !empty($acf_description) ? $acf_description : 'Experience the best car wash in Chambersburg. Our state-of-the-art facilities offer fast, convenient service with exceptional results every time.';

// Use full-size image for crisp background (avoid scaled/intermediate sizes)
$bg_image = get_template_directory_uri() . '/assets/images/hero-placeholder.jpg';
if ( $hero_image ) {
    if ( ! empty( $hero_image['id'] ) ) {
        $full = wp_get_attachment_image_src( (int) $hero_image['id'], 'full' );
        $bg_image = $full && ! empty( $full[0] ) ? $full[0] : $hero_image['url'];
    } else {
        $bg_image = $hero_image['url'];
    }
}
?>

<section class="home-hero" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    <div class="home-hero__overlay"></div>
    <div class="container home-hero__container">
        <div class="home-hero__content">
            <?php if ($hero_badge !== '' && trim($hero_badge) !== '') : ?>
                <span class="home-hero__badge"><?php echo esc_html(trim($hero_badge)); ?></span>
            <?php endif; ?>
            <p class="home-hero__tagline">CLEAN. FAST. FRIENDLY.</p>
            <h1 class="home-hero__title"><?php echo esc_html($hero_title); ?></h1>
            <p class="home-hero__subtitle"><?php echo esc_html($hero_subtitle); ?></p>
            <p class="home-hero__description"><?php echo esc_html($hero_description); ?></p>
            <div class="home-hero__ctas">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('programs'))); ?>" class="btn btn--primary">
                    Join the Wash Club
                </a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('locations'))); ?>" class="btn btn--secondary">
                    Find a Location
                </a>
            </div>
        </div>
    </div>
</section>
