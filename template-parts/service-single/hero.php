<?php
/**
 * Service Single - Hero (replicates home hero markup exactly for same styling)
 *
 * @package RainTunnelWash
 */

$badge      = get_field('service_hero_badge');
$tagline_raw = get_field('service_hero_tagline');
$tagline     = ($tagline_raw !== null && trim((string) $tagline_raw) !== '') ? trim((string) $tagline_raw) : '';
$title      = get_field('service_hero_title') ?: get_the_title();
$subtitle   = get_field('service_hero_subtitle') ?: '';
$desc       = get_field('service_hero_description') ?: '';
$hero_image = get_field('service_hero_image');
$cta1_text  = get_field('service_hero_cta1_text') ?: 'Wash Me Now';
$cta1_link  = get_field('service_hero_cta1_link');
$cta2_text  = get_field('service_hero_cta2_text') ?: 'Unlimited Wash';
$cta2_link  = get_field('service_hero_cta2_link');

$bg_image = get_template_directory_uri() . '/assets/images/hero-placeholder.jpg';
if ($hero_image && !empty($hero_image['url'])) {
    if (!empty($hero_image['id'])) {
        $full = wp_get_attachment_image_src((int) $hero_image['id'], 'full');
        $bg_image = ($full && !empty($full[0])) ? $full[0] : $hero_image['url'];
    } else {
        $bg_image = $hero_image['url'];
    }
}
$cta1_url = is_array($cta1_link) && !empty($cta1_link['url']) ? $cta1_link['url'] : '#';
$cta2_url = is_array($cta2_link) && !empty($cta2_link['url']) ? $cta2_link['url'] : '#';
?>

<section class="home-hero" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    <div class="home-hero__overlay"></div>
    <div class="container home-hero__container">
        <div class="home-hero__content">
            <?php if ($badge !== '' && $badge !== null && trim((string) $badge) !== '') : ?>
                <span class="home-hero__badge"><?php echo esc_html(trim((string) $badge)); ?></span>
            <?php endif; ?>
            <?php if ($tagline !== '') : ?>
                <p class="home-hero__tagline"><?php echo esc_html($tagline); ?></p>
            <?php endif; ?>
            <h1 class="home-hero__title"><?php echo esc_html($title); ?></h1>
            <p class="home-hero__subtitle"><?php echo esc_html($subtitle); ?></p>
            <p class="home-hero__description"><?php echo esc_html($desc); ?></p>
            <div class="home-hero__ctas">
                <a href="<?php echo esc_url($cta1_url); ?>" class="btn btn--primary"><?php echo esc_html($cta1_text); ?></a>
                <a href="<?php echo esc_url($cta2_url); ?>" class="btn btn--secondary"><?php echo esc_html($cta2_text); ?></a>
            </div>
        </div>
    </div>
</section>
