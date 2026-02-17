<?php
/**
 * Program Single - How it works: 4 cards in 2x2 grid.
 * Each card: top = banner with step number; bottom = content (heading + paragraph).
 *
 * @package RainTunnelWash
 */

$steps = get_field('program_how_steps');
$defaults = array(
    array('step_number' => '1', 'heading' => 'Step One', 'paragraph' => 'Description for step one.'),
    array('step_number' => '2', 'heading' => 'Step Two', 'paragraph' => 'Description for step two.'),
    array('step_number' => '3', 'heading' => 'Step Three', 'paragraph' => 'Description for step three.'),
    array('step_number' => '4', 'heading' => 'Step Four', 'paragraph' => 'Description for step four.'),
);
if (empty($steps) || !is_array($steps)) {
    $steps = $defaults;
}
$steps = array_slice($steps, 0, 4);
?>

<section class="section program-single-how">
    <div class="container">
        <div class="program-single-how__grid">
            <?php foreach ($steps as $step) :
                $num = isset($step['step_number']) ? $step['step_number'] : '';
                $heading = isset($step['heading']) ? $step['heading'] : '';
                $paragraph = isset($step['paragraph']) ? $step['paragraph'] : '';
            ?>
                <div class="program-single-how__card">
                    <div class="program-single-how__banner"><?php echo esc_html($num); ?></div>
                    <div class="program-single-how__content">
                        <?php if ($heading) : ?>
                            <h3 class="program-single-how__card-heading"><?php echo esc_html($heading); ?></h3>
                        <?php endif; ?>
                        <?php if ($paragraph) : ?>
                            <div class="program-single-how__card-text"><?php echo wp_kses_post(wpautop($paragraph)); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
