<?php
/**
 * Template Part: Home Services Preview
 *
 * @package RainTunnelWash
 */

// Get ACF fields
$heading = get_field('services_heading') ?: 'Our Services';
$subheading = get_field('services_subheading');
$services = get_field('services_items');
?>

<section class="section section--services-preview">
    <div class="container">
        <div class="section__header animate-on-scroll">
            <h2 class="section__title"><?php echo esc_html($heading); ?></h2>
            <?php if ($subheading) : ?>
                <p class="section__subtitle"><?php echo esc_html($subheading); ?></p>
            <?php endif; ?>
        </div>

        <?php if ($services) : ?>
            <div class="services-grid">
                <?php foreach ($services as $index => $service) : ?>
                    <div class="service-card animate-on-scroll" style="--delay: <?php echo $index * 0.1; ?>s">
                        <?php if ($service['icon']) : ?>
                            <div class="service-card__icon">
                                <img src="<?php echo esc_url($service['icon']['url']); ?>" 
                                     alt="<?php echo esc_attr($service['icon']['alt']); ?>">
                            </div>
                        <?php endif; ?>
                        
                        <h3 class="service-card__title"><?php echo esc_html($service['title']); ?></h3>
                        
                        <?php if ($service['description']) : ?>
                            <p class="service-card__description"><?php echo esc_html($service['description']); ?></p>
                        <?php endif; ?>
                        
                        <?php if ($service['link']) : ?>
                            <a href="<?php echo esc_url($service['link']['url']); ?>" class="service-card__link">
                                <?php echo esc_html($service['link']['title'] ?: 'Learn More'); ?>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <!-- Placeholder services if none defined -->
            <div class="services-grid">
                <div class="service-card animate-on-scroll">
                    <div class="service-card__icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M8 12s1.5 2 4 2 4-2 4-2"/>
                            <line x1="9" y1="9" x2="9.01" y2="9"/>
                            <line x1="15" y1="9" x2="15.01" y2="9"/>
                        </svg>
                    </div>
                    <h3 class="service-card__title">Express Wash</h3>
                    <p class="service-card__description">Quick and efficient exterior wash for busy schedules.</p>
                </div>
                
                <div class="service-card animate-on-scroll" style="--delay: 0.1s">
                    <div class="service-card__icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3 class="service-card__title">Full Detail</h3>
                    <p class="service-card__description">Complete interior and exterior detailing service.</p>
                </div>
                
                <div class="service-card animate-on-scroll" style="--delay: 0.2s">
                    <div class="service-card__icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                    </div>
                    <h3 class="service-card__title">Premium Wash</h3>
                    <p class="service-card__description">Our signature wash with premium products.</p>
                </div>
            </div>
        <?php endif; ?>

        <div class="section__footer animate-on-scroll">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="btn btn--primary">
                View All Services
            </a>
        </div>
    </div>
</section>
