<?php
/**
 * Program Single - Four value proposition boxes (same style as service single, 4 items)
 *
 * @package RainTunnelWash
 */

$boxes = get_field('program_value_boxes');
$defaults = array(
    array('text' => '24/7 Convenience', 'text_line_2' => ''),
    array('text' => 'Unlimited Washes', 'text_line_2' => ''),
    array('text' => 'Best Value', 'text_line_2' => ''),
    array('text' => 'Easy Membership', 'text_line_2' => ''),
);
if (empty($boxes) || !is_array($boxes)) {
    $boxes = $defaults;
}
$boxes = array_slice($boxes, 0, 4);
?>

<section class="section service-single-value-props program-single-value-props">
    <div class="container">
        <div class="service-single-value-props__grid program-single-value-props__grid">
            <?php foreach ($boxes as $box) :
                $line1 = isset($box['text']) ? trim((string) $box['text']) : '';
                $line2 = isset($box['text_line_2']) ? trim((string) $box['text_line_2']) : '';
                if ($line1 === '' && $line2 === '') continue;
            ?>
                <div class="service-single-value-props__box">
                    <span class="service-single-value-props__text">
                        <?php if ($line1 !== '') : ?><span class="program-single-value-props__line"><?php echo esc_html($line1); ?></span><?php endif; ?>
                        <?php if ($line2 !== '') : ?><span class="program-single-value-props__line"><?php echo esc_html($line2); ?></span><?php endif; ?>
                    </span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
