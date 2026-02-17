<?php
/**
 * Template Part: Locations List
 *
 * @package RainTunnelWash
 */

$intro = get_field('locations_intro');
$locations = get_field('locations_list');

// Feature labels
$feature_labels = array(
    'self_serve' => 'Self-Serve Bays',
    'automatic' => 'Automatic Wash',
    'vacuum' => 'Free Vacuums',
    'detailing' => 'Detailing Services',
    'waiting_area' => 'Waiting Area',
    'wifi' => 'Free WiFi',
);
?>

<section class="section section--locations-list">
    <div class="container">
        <?php if ($intro) : ?>
            <div class="section__intro animate-on-scroll">
                <p><?php echo esc_html($intro); ?></p>
            </div>
        <?php endif; ?>

        <?php if ($locations) : ?>
            <div class="locations-list">
                <?php foreach ($locations as $index => $location) : ?>
                    <div class="location-card animate-on-scroll" id="location-<?php echo $index + 1; ?>">
                        <?php if ($location['image']) : ?>
                            <div class="location-card__image">
                                <img src="<?php echo esc_url($location['image']['sizes']['card'] ?? $location['image']['url']); ?>" 
                                     alt="<?php echo esc_attr($location['name']); ?>"
                                     loading="lazy">
                            </div>
                        <?php endif; ?>
                        
                        <div class="location-card__content">
                            <h2 class="location-card__name"><?php echo esc_html($location['name']); ?></h2>
                            
                            <div class="location-card__details">
                                <?php if ($location['address']) : ?>
                                    <div class="location-card__detail">
                                        <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                            <circle cx="12" cy="10" r="3"/>
                                        </svg>
                                        <address><?php echo nl2br(esc_html($location['address'])); ?></address>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($location['phone']) : ?>
                                    <div class="location-card__detail">
                                        <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                        </svg>
                                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $location['phone'])); ?>">
                                            <?php echo esc_html($location['phone']); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <?php if ($location['hours']) : ?>
                                <div class="location-card__hours">
                                    <h3>Hours</h3>
                                    <ul>
                                        <?php foreach ($location['hours'] as $row) : ?>
                                            <li>
                                                <span class="day"><?php echo esc_html($row['day']); ?></span>
                                                <span class="time"><?php echo esc_html($row['time']); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($location['features']) : ?>
                                <div class="location-card__features">
                                    <h3>Features</h3>
                                    <ul>
                                        <?php foreach ($location['features'] as $feature) : ?>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <polyline points="20 6 9 17 4 12"/>
                                                </svg>
                                                <?php echo esc_html($feature_labels[$feature] ?? $feature); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($location['directions_link']) : ?>
                                <a href="<?php echo esc_url($location['directions_link']); ?>" 
                                   class="btn btn--primary"
                                   target="_blank"
                                   rel="noopener noreferrer">
                                    Get Directions
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                        <polyline points="15 3 21 3 21 9"/>
                                        <line x1="10" y1="14" x2="21" y2="3"/>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                        
                        <?php if ($location['map_embed']) : ?>
                            <div class="location-card__map">
                                <?php echo $location['map_embed']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="no-locations">
                <p>Locations will be displayed here once added in WordPress admin.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
