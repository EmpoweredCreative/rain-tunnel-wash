<?php
/**
 * Template Part: Locations Page - Location Cards
 * Inner container (like "how the touchless wash works") with heading, paragraph, two location cards.
 * Each card: background image, heading, address, description; button below the card.
 *
 * @package RainTunnelWash
 */

$heading_line_1 = get_field('locations_heading_line_1');
$heading_line_2 = get_field('locations_heading_line_2');
$has_heading    = $heading_line_1 || $heading_line_2;
$paragraph      = get_field('locations_intro');
$locations      = get_field('locations_list');

if (is_array($locations)) {
    $locations = array_slice($locations, 0, 2);
} else {
    $locations = array();
}

$defaults = array(
    array('heading_line_1' => 'Downtown', 'heading_line_2' => 'Location', 'address' => '123 Main St', 'description' => 'Our flagship location with full service.', 'image' => null, 'cta_text' => 'Get Directions', 'cta_link' => array('url' => '#')),
    array('heading_line_1' => 'Highway', 'heading_line_2' => 'Location', 'address' => '456 Highway Ave', 'description' => 'Convenient off the highway.', 'image' => null, 'cta_text' => 'Get Directions', 'cta_link' => array('url' => '#')),
);
if (empty($locations)) {
    $locations = $defaults;
}
?>

<section class="section programs-cards locations-cards">
    <div class="container">
        <div class="programs-cards__inner locations-cards__inner">
            <?php if ($has_heading) : ?>
                <h2 class="programs-cards__heading">
                    <?php if ($heading_line_1) : ?><span class="programs-cards__heading-line"><?php echo esc_html($heading_line_1); ?></span><?php endif; ?>
                    <?php if ($heading_line_2) : ?><span class="programs-cards__heading-line"><?php echo esc_html($heading_line_2); ?></span><?php endif; ?>
                </h2>
            <?php endif; ?>
            <?php if ($paragraph) : ?>
                <div class="programs-cards__paragraph"><?php echo wp_kses_post(wpautop($paragraph)); ?></div>
            <?php endif; ?>
            <div class="locations-cards__grid">
                <?php foreach ($locations as $loc) :
                    $img     = isset($loc['image']) && !empty($loc['image']) ? $loc['image'] : null;
                    $img_url = $img && is_array($img) && !empty($img['url']) ? $img['url'] : '';
                    $line_1  = isset($loc['heading_line_1']) ? trim((string) $loc['heading_line_1']) : '';
                    $line_2  = isset($loc['heading_line_2']) ? trim((string) $loc['heading_line_2']) : '';
                    $address = isset($loc['address']) ? trim((string) $loc['address']) : '';
                    $desc    = isset($loc['description']) ? trim((string) $loc['description']) : '';
                    $cta_text = isset($loc['cta_text']) ? trim((string) $loc['cta_text']) : 'Get Directions';
                    $cta_link = isset($loc['cta_link']) && is_array($loc['cta_link']) && !empty($loc['cta_link']['url']) ? $loc['cta_link'] : array('url' => '#', 'target' => '');
                    $has_title = $line_1 || $line_2;
                ?>
                    <div class="locations-card-wrap">
                        <div class="location-card"<?php if ($img_url) : ?> style="background-image: url('<?php echo esc_url($img_url); ?>');"<?php endif; ?>>
                            <div class="location-card__overlay" aria-hidden="true"></div>
                            <div class="location-card__content">
                                <?php if ($has_title) : ?>
                                    <h3 class="location-card__title">
                                        <?php if ($line_1) : ?><span class="location-card__title-line"><?php echo esc_html($line_1); ?></span><?php endif; ?>
                                        <?php if ($line_2) : ?><span class="location-card__title-line"><?php echo esc_html($line_2); ?></span><?php endif; ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($address) : ?>
                                    <p class="location-card__address"><?php echo nl2br(esc_html($address)); ?></p>
                                <?php endif; ?>
                                <?php if ($desc) : ?>
                                    <p class="location-card__description"><?php echo esc_html($desc); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <a href="<?php echo esc_url($cta_link['url']); ?>" class="btn btn--primary location-card__btn"<?php echo !empty($cta_link['target']) ? ' target="' . esc_attr($cta_link['target']) . '"' : ''; ?>>
                            <?php echo esc_html($cta_text); ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
