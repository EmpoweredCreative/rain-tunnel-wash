<?php
/**
 * Program Single - Hero (same as service single)
 *
 * @package RainTunnelWash
 */

$badge      = get_field('program_hero_badge');
$tagline_raw = get_field('program_hero_tagline');
$tagline     = ($tagline_raw !== null && trim((string) $tagline_raw) !== '') ? trim((string) $tagline_raw) : '';
$title      = get_field('program_hero_title') ?: get_the_title();
$subtitle   = get_field('program_hero_subtitle') ?: '';
$desc       = get_field('program_hero_description') ?: '';
$hero_image = get_field('program_hero_image');
$cta1_text_raw = get_field('program_hero_cta1_text');
$cta1_link_raw = get_field('program_hero_cta1_link');
$cta2_text_raw = get_field('program_hero_cta2_text');
$cta2_link_raw = get_field('program_hero_cta2_link');

$cta1_has_content = (trim((string) $cta1_text_raw) !== '' && $cta1_text_raw !== null) || (is_array($cta1_link_raw) && !empty($cta1_link_raw['url']));
$cta2_has_content = (trim((string) $cta2_text_raw) !== '' && $cta2_text_raw !== null) || (is_array($cta2_link_raw) && !empty($cta2_link_raw['url']));

$cta1_text = $cta1_text_raw ?: 'Join Now';
$cta1_link = $cta1_link_raw;
$cta2_text = $cta2_text_raw ?: 'Learn More';
$cta2_link = $cta2_link_raw;

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

$show_ctas = $cta1_has_content || $cta2_has_content;
$ctas_single = $show_ctas && !$cta1_has_content && $cta2_has_content;
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
            <?php if ($show_ctas) : ?>
            <div class="home-hero__ctas<?php echo $ctas_single ? ' home-hero__ctas--single' : ''; ?>">
                <?php if ($cta1_has_content) : ?>
                    <a href="<?php echo esc_url($cta1_url); ?>" class="btn btn--primary"><?php echo esc_html($cta1_text); ?></a>
                <?php endif; ?>
                <?php if ($cta2_has_content) : ?>
                    <a href="<?php echo esc_url($cta2_url); ?>" class="btn btn--secondary"><?php echo esc_html($cta2_text); ?></a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
