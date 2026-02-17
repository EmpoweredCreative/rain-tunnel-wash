<?php
/**
 * Template Part: Home About Preview
 *
 * @package RainTunnelWash
 */

// Get ACF fields
$heading = get_field('about_heading') ?: 'Why Choose Us';
$content = get_field('about_content');
$image = get_field('about_image');
$features = get_field('about_features');
$link = get_field('about_link');
?>

<section class="section section--about-preview">
    <div class="container">
        <div class="about-preview">
            <div class="about-preview__image animate-on-scroll">
                <?php if ($image) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" 
                         alt="<?php echo esc_attr($image['alt'] ?: 'About Rain Tunnel Wash'); ?>"
                         loading="lazy">
                <?php else : ?>
                    <div class="about-preview__placeholder">
                        <svg width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <circle cx="8.5" cy="8.5" r="1.5"/>
                            <polyline points="21 15 16 10 5 21"/>
                        </svg>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="about-preview__content animate-on-scroll">
                <h2 class="about-preview__title"><?php echo esc_html($heading); ?></h2>
                
                <?php if ($content) : ?>
                    <div class="about-preview__text">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php else : ?>
                    <div class="about-preview__text">
                        <p>Rain Tunnel Wash is dedicated to providing the highest quality car wash experience. Our state-of-the-art facilities and trained professionals ensure your vehicle receives the care it deserves.</p>
                    </div>
                <?php endif; ?>
                
                <?php if ($features) : ?>
                    <ul class="about-preview__features">
                        <?php foreach ($features as $feature) : ?>
                            <li class="about-preview__feature">
                                <svg class="feature-check" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span><?php echo esc_html($feature['text']); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else : ?>
                    <ul class="about-preview__features">
                        <li class="about-preview__feature">
                            <svg class="feature-check" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Eco-friendly products</span>
                        </li>
                        <li class="about-preview__feature">
                            <svg class="feature-check" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Fast & efficient service</span>
                        </li>
                        <li class="about-preview__feature">
                            <svg class="feature-check" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Trained professionals</span>
                        </li>
                        <li class="about-preview__feature">
                            <svg class="feature-check" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Satisfaction guaranteed</span>
                        </li>
                    </ul>
                <?php endif; ?>
                
                <?php if ($link) : ?>
                    <a href="<?php echo esc_url($link['url']); ?>" class="btn btn--secondary">
                        <?php echo esc_html($link['title'] ?: 'Learn More About Us'); ?>
                    </a>
                <?php else : ?>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('who-we-are'))); ?>" class="btn btn--secondary">
                        Learn More About Us
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
