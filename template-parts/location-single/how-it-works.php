<?php
/**
 * Location Single - How it works: header + icons only (same styling as service single)
 *
 * @package RainTunnelWash
 */

$heading = get_field('location_single_how_heading');
$icons   = get_field('location_single_how_icons');

$default_icons = array(
    array('line_1' => 'HIGH PRESSURE WATER', 'line_2' => 'LOOSENS DIRT AND GRIME', 'line_3' => ''),
    array('line_1' => 'CLEANING SOLUTIONS', 'line_2' => 'BREAK DOWN BUILDUP SAFELY', 'line_3' => ''),
    array('line_1' => 'POWERFUL RINSE', 'line_2' => 'LEAVES YOUR VEHICLE', 'line_3' => 'CLEAN AND REFRESHED'),
    array('line_1' => 'NO BRUSHES, NO CONTACT', 'line_2' => 'NO HASSLE', 'line_3' => ''),
);
if (empty($icons) || !is_array($icons)) {
    $icons = $default_icons;
}
$icons = array_slice($icons, 0, 4);
?>

<section class="section service-single-how location-single-how">
    <div class="container">
        <div class="service-single-how__inner">
            <?php if ($heading) : ?>
                <h2 class="service-single-how__heading"><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>
            <div class="service-single-how__grid">
                <?php foreach ($icons as $item) :
                    $icon   = isset($item['icon']) && !empty($item['icon']) ? $item['icon'] : null;
                    $line_1 = isset($item['line_1']) ? trim((string) $item['line_1']) : '';
                    $line_2 = isset($item['line_2']) ? trim((string) $item['line_2']) : '';
                    $line_3 = isset($item['line_3']) ? trim((string) $item['line_3']) : '';
                    $icon_url = $icon && is_array($icon) && !empty($icon['url']) ? $icon['url'] : null;
                    $has_text = $line_1 !== '' || $line_2 !== '' || $line_3 !== '';
                ?>
                    <div class="service-single-how__item">
                        <div class="service-single-how__icon">
                            <?php if ($icon_url) : ?>
                                <img src="<?php echo esc_url($icon_url); ?>" alt="" loading="lazy">
                            <?php else : ?>
                                <span class="service-single-how__icon-placeholder"></span>
                            <?php endif; ?>
                        </div>
                        <?php if ($has_text) : ?>
                            <p class="service-single-how__text">
                                <?php if ($line_1) : ?><span class="service-single-how__line"><?php echo esc_html($line_1); ?></span><?php endif; ?>
                                <?php if ($line_2) : ?><span class="service-single-how__line"><?php echo esc_html($line_2); ?></span><?php endif; ?>
                                <?php if ($line_3) : ?><span class="service-single-how__line"><?php echo esc_html($line_3); ?></span><?php endif; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
