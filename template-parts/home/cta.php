<?php
/**
 * Template Part: Home CTA
 *
 * @package RainTunnelWash
 */

// Get ACF fields
$heading = get_field('cta_heading') ?: 'Ready for a Spotless Ride?';
$text = get_field('cta_text');
$button = get_field('cta_button');
$background = get_field('cta_background');
?>

<section class="section section--cta">
    <?php if ($background) : ?>
        <div class="section--cta__bg" style="background-image: url('<?php echo esc_url($background['url']); ?>')"></div>
    <?php endif; ?>
    <div class="section--cta__overlay"></div>
    
    <div class="container">
        <div class="cta-content animate-on-scroll">
            <h2 class="cta-content__title"><?php echo esc_html($heading); ?></h2>
            
            <?php if ($text) : ?>
                <p class="cta-content__text"><?php echo esc_html($text); ?></p>
            <?php else : ?>
                <p class="cta-content__text">Visit us today and experience the Rain Tunnel Wash difference.</p>
            <?php endif; ?>
            
            <div class="cta-content__buttons">
                <?php if ($button) : ?>
                    <a href="<?php echo esc_url($button['url']); ?>" 
                       class="btn btn--primary btn--large"
                       <?php echo $button['target'] ? 'target="_blank" rel="noopener"' : ''; ?>>
                        <?php echo esc_html($button['title']); ?>
                    </a>
                <?php else : ?>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn--primary btn--large">
                        Find a Location
                    </a>
                <?php endif; ?>
                
                <?php 
                $phone = function_exists('get_field') ? get_field('phone_number', 'option') : '';
                if ($phone) : ?>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" class="btn btn--outline-light btn--large">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        Call <?php echo esc_html($phone); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
