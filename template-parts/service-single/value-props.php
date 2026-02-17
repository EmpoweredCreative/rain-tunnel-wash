<?php
/**
 * Service Single - Three value proposition boxes (dark blue, white text)
 *
 * @package RainTunnelWash
 */

$boxes = get_field('service_value_boxes');
$defaults = array(
    array('text' => '24/7 Convenience'),
    array('text' => 'No Physical Contact'),
    array('text' => 'Consistent Results'),
);
if (empty($boxes) || !is_array($boxes)) {
    $boxes = $defaults;
}
$boxes = array_slice($boxes, 0, 3);
?>

<section class="section service-single-value-props">
    <div class="container">
        <div class="service-single-value-props__grid">
            <?php foreach ($boxes as $box) :
                $text = isset($box['text']) ? $box['text'] : '';
                if ($text === '') continue;
            ?>
                <div class="service-single-value-props__box">
                    <span class="service-single-value-props__text"><?php echo esc_html($text); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
