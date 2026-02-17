<?php
/**
 * Template Part: About Story
 *
 * @package RainTunnelWash
 */

$heading = get_field('story_heading') ?: 'Our Story';
$content = get_field('story_content');
$image = get_field('story_image');
$stats = get_field('story_stats');
?>

<section class="section section--story">
    <div class="container">
        <div class="story-section">
            <div class="story-section__content animate-on-scroll">
                <h2 class="story-section__title"><?php echo esc_html($heading); ?></h2>
                
                <?php if ($content) : ?>
                    <div class="story-section__text">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php else : ?>
                    <div class="story-section__text">
                        <p>Rain Tunnel Wash was founded with a simple mission: to provide the highest quality car wash experience at an affordable price. What started as a single location has grown into a trusted name in car care.</p>
                        <p>Our commitment to excellence, customer service, and environmental responsibility has made us the preferred choice for thousands of satisfied customers.</p>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="story-section__image animate-on-scroll">
                <?php if ($image) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" 
                         alt="<?php echo esc_attr($image['alt'] ?: 'Our Story'); ?>"
                         loading="lazy">
                <?php endif; ?>
            </div>
        </div>
        
        <?php if ($stats) : ?>
            <div class="stats-grid animate-on-scroll">
                <?php foreach ($stats as $stat) : ?>
                    <div class="stat-item">
                        <span class="stat-item__number"><?php echo esc_html($stat['number']); ?></span>
                        <span class="stat-item__label"><?php echo esc_html($stat['label']); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
