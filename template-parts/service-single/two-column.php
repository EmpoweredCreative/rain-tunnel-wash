<?php
/**
 * Service Single - Two-column: left = heading, paragraph, button; right = image
 *
 * @package RainTunnelWash
 */

$heading = get_field('service_twocol_heading');
$paragraph = get_field('service_twocol_paragraph');
$btn_text_raw = get_field('service_twocol_button_text');
$btn_link = get_field('service_twocol_button_link');
$image = get_field('service_twocol_image');

if (!$heading && !$paragraph && !$image) return;

$btn_url = is_array($btn_link) && !empty($btn_link['url']) ? $btn_link['url'] : '';
$btn_target = is_array($btn_link) && !empty($btn_link['target']) ? $btn_link['target'] : '';
$btn_text = trim((string) $btn_text_raw);
$show_button = $btn_text !== '' && $btn_url !== '';
$image_url = $image && !empty($image['url']) ? $image['url'] : '';
?>

<section class="section service-single-twocol">
    <div class="container">
        <div class="service-single-twocol__grid">
            <div class="service-single-twocol__content">
                <?php if ($heading) : ?>
                    <h2 class="service-single-twocol__heading"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>
                <?php if ($paragraph) : ?>
                    <div class="service-single-twocol__paragraph"><?php echo wp_kses_post(wpautop($paragraph)); ?></div>
                <?php endif; ?>
                <?php if ($show_button) : ?>
                    <a href="<?php echo esc_url($btn_url); ?>" class="btn btn--primary"<?php echo $btn_target ? ' target="' . esc_attr($btn_target) . '"' : ''; ?>><?php echo esc_html($btn_text); ?></a>
                <?php endif; ?>
            </div>
            <?php if ($image_url) : ?>
                <div class="service-single-twocol__image-wrap">
                    <img src="<?php echo esc_url($image_url); ?>" alt="" class="service-single-twocol__image" loading="lazy">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
