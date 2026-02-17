<?php
/**
 * Template Part: About Mission & Values
 *
 * @package RainTunnelWash
 */

$heading = get_field('mission_heading') ?: 'Our Mission';
$content = get_field('mission_content');
$values = get_field('values');

if (!$content && !$values) return;
?>

<section class="section section--mission">
    <div class="container">
        <?php if ($content) : ?>
            <div class="mission-statement animate-on-scroll">
                <h2 class="mission-statement__title"><?php echo esc_html($heading); ?></h2>
                <p class="mission-statement__text"><?php echo esc_html($content); ?></p>
            </div>
        <?php endif; ?>
        
        <?php if ($values) : ?>
            <div class="values-section">
                <h3 class="values-section__title animate-on-scroll">Our Core Values</h3>
                <div class="values-grid">
                    <?php foreach ($values as $index => $value) : ?>
                        <div class="value-card animate-on-scroll" style="--delay: <?php echo $index * 0.1; ?>s">
                            <?php if ($value['icon']) : ?>
                                <div class="value-card__icon">
                                    <img src="<?php echo esc_url($value['icon']['url']); ?>" 
                                         alt="<?php echo esc_attr($value['title']); ?>">
                                </div>
                            <?php endif; ?>
                            <h4 class="value-card__title"><?php echo esc_html($value['title']); ?></h4>
                            <?php if ($value['description']) : ?>
                                <p class="value-card__description"><?php echo esc_html($value['description']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
