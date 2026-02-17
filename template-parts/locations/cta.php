<?php
/**
 * Template Part: Locations Page - CTA Section
 * Same structure as Services CTA: heading, text, button, optional background image.
 *
 * @package RainTunnelWash
 */

$heading_1 = get_field('cta_heading_line_1');
$heading_2 = get_field('cta_heading_line_2');
$has_heading = $heading_1 || $heading_2;
$text      = get_field('cta_text');
$button    = get_field('cta_button');
$btn_text  = get_field('cta_button_text');
$bg_image  = get_field('cta_background_image');
$bg_url    = $bg_image && !empty($bg_image['url']) ? $bg_image['url'] : '';

if (!$has_heading && !$button && !$btn_text) return;

$button_label = $btn_text ? trim($btn_text) : ($button && !empty($button['title']) ? $button['title'] : '');
$has_button   = (bool) $button_label;
$button_url   = ($button && !empty($button['url'])) ? $button['url'] : '#';
$button_target = ($button && !empty($button['target'])) ? $button['target'] : '';
?>

<section class="section section--cta section--cta-simple<?php echo $bg_url ? ' section--cta-has-bg' : ''; ?>">
    <?php if ($bg_url) : ?>
        <div class="section--cta__bg" style="background-image: url(<?php echo esc_url($bg_url); ?>);" role="presentation"></div>
        <div class="section--cta__overlay" aria-hidden="true"></div>
    <?php endif; ?>
    <div class="container">
        <div class="cta-simple animate-on-scroll">
            <?php if ($has_heading) : ?>
                <h2 class="cta-simple__title cta-simple__title--lines">
                    <?php if ($heading_1) : ?><span class="cta-simple__title-line"><?php echo esc_html($heading_1); ?></span><?php endif; ?>
                    <?php if ($heading_2) : ?><span class="cta-simple__title-line"><?php echo esc_html($heading_2); ?></span><?php endif; ?>
                </h2>
            <?php endif; ?>

            <?php if ($text) : ?>
                <p class="cta-simple__text"><?php echo esc_html($text); ?></p>
            <?php endif; ?>

            <?php if ($has_button) : ?>
                <a href="<?php echo esc_url($button_url); ?>" class="btn btn--primary btn--large"<?php echo $button_target ? ' target="' . esc_attr($button_target) . '"' : ''; ?>>
                    <?php echo esc_html($button_label); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
