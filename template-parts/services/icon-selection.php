<?php
/**
 * Template Part: Services Page - Icon Section
 * Dark blue section with heading and five cards: icon + two-line title per card.
 * Uses ACF "Icon Section" tab (icon_section_heading, icon_section_cards) or falls back to services list.
 *
 * @package RainTunnelWash
 */

$section_heading = get_field('icon_section_heading');
$icon_cards      = get_field('icon_section_cards');
$services        = get_field('services_list');
$default_heading = 'CHOOSE THE WASH OPTION THAT WORKS BEST FOR YOU';
$heading         = $section_heading ? $section_heading : $default_heading;

$use_cards = !empty($icon_cards) && is_array($icon_cards);
$items     = $use_cards ? $icon_cards : array();
if (!$use_cards && !empty($services) && is_array($services)) {
    foreach (array_slice($services, 0, 5) as $s) {
        $items[] = array(
            'icon'      => isset($s['image']) ? $s['image'] : null,
            'line_1'    => isset($s['name']) ? $s['name'] : '',
            'line_2'    => isset($s['subtitle']) ? $s['subtitle'] : '',
            'anchor_id' => isset($s['anchor_id']) && $s['anchor_id'] !== '' ? $s['anchor_id'] : '',
        );
    }
}
$default_titles = array(
    array('line_1' => 'SOFT TOUCH', 'line_2' => 'TUNNEL'),
    array('line_1' => 'TOUCHLESS', 'line_2' => 'AUTOMATIC'),
    array('line_1' => 'HAND', 'line_2' => 'BAYS'),
    array('line_1' => 'PET', 'line_2' => 'WASH'),
    array('line_1' => 'FREE', 'line_2' => 'VACUUMS'),
);
while (count($items) < 5) {
    $items[] = $default_titles[count($items) % 5];
}
$items = array_slice($items, 0, 5);
?>

<section class="services-icon-selection">
    <div class="container">
        <h2 class="services-icon-selection__heading"><?php echo esc_html($heading); ?></h2>
        <div class="services-icon-selection__grid">
            <?php foreach ($items as $index => $card) :
                $icon     = isset($card['icon']) && !empty($card['icon']) ? $card['icon'] : null;
                $line1    = isset($card['line_1']) ? $card['line_1'] : $default_titles[$index]['line_1'];
                $line2    = isset($card['line_2']) ? $card['line_2'] : $default_titles[$index]['line_2'];
                $anchor   = isset($card['anchor_id']) && $card['anchor_id'] !== '' ? $card['anchor_id'] : ('service-' . ($index + 1));
                $href     = '#' . esc_attr(sanitize_title($anchor));
                $icon_url = $icon && is_array($icon) && !empty($icon['url']) ? $icon['url'] : null;
            ?>
                <a href="<?php echo $href; ?>" class="services-icon-card">
                    <span class="services-icon-card__icon">
                        <?php if ($icon_url) : ?>
                            <img src="<?php echo esc_url($icon_url); ?>" alt="" loading="lazy" class="services-icon-card__icon-img">
                        <?php else : ?>
                            <span class="services-icon-card__icon-placeholder"></span>
                        <?php endif; ?>
                    </span>
                    <span class="services-icon-card__label">
                        <span class="services-icon-card__line1"><?php echo esc_html($line1); ?></span>
                        <span class="services-icon-card__line2"><?php echo esc_html($line2); ?></span>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
