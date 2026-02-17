<?php
/**
 * Home Page - Location Strip
 *
 * @package RainTunnelWash
 */

$locations_page_id = get_page_by_path('locations') ? get_permalink(get_page_by_path('locations')) : '#';
$strip_text = function_exists('get_field') ? get_field('location_strip_text') : '';
$strip_text = ! empty($strip_text) ? $strip_text : 'TWO CONVENIENT LOCATIONS IN CHAMBERSBURG, PA';
?>

<section class="location-strip">
    <div class="container">
        <div class="location-strip__inner">
            <p class="location-strip__text"><?php echo esc_html($strip_text); ?></p>
            <div class="location-strip__buttons">
                <a href="<?php echo esc_url($locations_page_id); ?>#orchard-drive" class="location-strip__btn">Orchard Drive →</a>
                <a href="<?php echo esc_url($locations_page_id); ?>#lincoln-way-east" class="location-strip__btn">Lincoln Way East →</a>
            </div>
        </div>
    </div>
</section>
