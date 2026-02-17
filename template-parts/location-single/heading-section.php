<?php
/**
 * Location Single - Section with heading and paragraph
 *
 * @package RainTunnelWash
 */

$heading   = get_field('location_single_section_heading');
$paragraph = get_field('location_single_section_paragraph');

if (!$heading && !$paragraph) {
    return;
}
?>

<section class="section location-single-section">
    <div class="container">
        <?php if ($heading) : ?>
            <h2 class="location-single-section__heading"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>
        <?php if ($paragraph) : ?>
            <div class="location-single-section__paragraph"><?php echo wp_kses_post(wpautop($paragraph)); ?></div>
        <?php endif; ?>
    </div>
</section>
