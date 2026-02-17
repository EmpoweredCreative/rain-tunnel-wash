<?php
/**
 * Template Part: Programs Landing - Intro Section
 * Inner container with header and paragraph, background color #0F3C5C.
 *
 * @package RainTunnelWash
 */

$heading   = get_field('programs_intro_heading');
$paragraph = get_field('programs_intro_paragraph');

if (!$heading && !$paragraph) {
    return;
}
?>

<section class="section programs-intro">
    <div class="container">
        <div class="programs-intro__inner">
            <?php if ($heading) : ?>
                <h2 class="programs-intro__heading"><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>
            <?php if ($paragraph) : ?>
                <div class="programs-intro__paragraph"><?php echo wp_kses_post(wpautop($paragraph)); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>
