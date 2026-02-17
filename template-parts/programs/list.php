<?php
/**
 * Template Part: Programs List
 *
 * @package RainTunnelWash
 */

$heading = get_field('programs_heading') ?: 'Choose Your Plan';
$text = get_field('programs_text');
$programs = get_field('programs_list');
?>

<section class="section section--programs-list">
    <div class="container">
        <div class="section__header animate-on-scroll">
            <h2 class="section__title"><?php echo esc_html($heading); ?></h2>
            <?php if ($text) : ?>
                <p class="section__subtitle"><?php echo esc_html($text); ?></p>
            <?php endif; ?>
        </div>

        <?php if ($programs) : ?>
            <div class="pricing-grid">
                <?php foreach ($programs as $index => $program) : ?>
                    <div class="pricing-card <?php echo $program['popular'] ? 'pricing-card--popular' : ''; ?> <?php echo $program['best_value'] ? 'pricing-card--best-value' : ''; ?> animate-on-scroll" style="--delay: <?php echo $index * 0.1; ?>s">
                        
                        <?php
                        $program_image_url = '';
                        if ( ! empty( $program['image'] ) ) {
                            $program_image_url = is_array( $program['image'] ) ? ( $program['image']['url'] ?? '' ) : $program['image'];
                        }
                        if ( $program_image_url ) :
                        ?>
                            <div class="pricing-card__image">
                                <img src="<?php echo esc_url( $program_image_url ); ?>" alt="<?php echo esc_attr( $program['name'] ?? '' ); ?>" loading="lazy">
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($program['popular']) : ?>
                            <span class="pricing-card__badge">Most Popular</span>
                        <?php elseif ($program['best_value']) : ?>
                            <span class="pricing-card__badge pricing-card__badge--value">Best Value</span>
                        <?php endif; ?>
                        
                        <div class="pricing-card__header">
                            <h3 class="pricing-card__name"><?php echo esc_html($program['name']); ?></h3>
                            
                            <div class="pricing-card__price">
                                <span class="amount"><?php echo esc_html($program['price']); ?></span>
                                <?php if ($program['period']) : ?>
                                    <span class="period"><?php echo esc_html($program['period']); ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <?php if ($program['savings']) : ?>
                                <span class="pricing-card__savings"><?php echo esc_html($program['savings']); ?></span>
                            <?php endif; ?>
                            
                            <?php if ($program['description']) : ?>
                                <p class="pricing-card__description"><?php echo esc_html($program['description']); ?></p>
                            <?php endif; ?>
                        </div>
                        
                        <?php if ($program['features']) : ?>
                            <ul class="pricing-card__features">
                                <?php foreach ($program['features'] as $feature) : ?>
                                    <li class="<?php echo $feature['included'] ? 'included' : 'not-included'; ?>">
                                        <?php if ($feature['included']) : ?>
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="20 6 9 17 4 12"/>
                                            </svg>
                                        <?php else : ?>
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <line x1="18" y1="6" x2="6" y2="18"/>
                                                <line x1="6" y1="6" x2="18" y2="18"/>
                                            </svg>
                                        <?php endif; ?>
                                        <span><?php echo esc_html($feature['text']); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        
                        <?php if ($program['cta_link']) : ?>
                            <div class="pricing-card__cta">
                                <a href="<?php echo esc_url($program['cta_link']['url']); ?>" 
                                   class="btn <?php echo $program['popular'] ? 'btn--primary' : 'btn--secondary'; ?> btn--block">
                                    <?php echo esc_html($program['cta_text'] ?: 'Join Now'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <!-- Placeholder programs -->
            <div class="pricing-grid">
                <div class="pricing-card animate-on-scroll">
                    <div class="pricing-card__header">
                        <h3 class="pricing-card__name">Basic</h3>
                        <div class="pricing-card__price">
                            <span class="amount">$19.99</span>
                            <span class="period">/month</span>
                        </div>
                        <p class="pricing-card__description">Great for occasional washes</p>
                    </div>
                </div>
                
                <div class="pricing-card pricing-card--popular animate-on-scroll" style="--delay: 0.1s">
                    <span class="pricing-card__badge">Most Popular</span>
                    <div class="pricing-card__header">
                        <h3 class="pricing-card__name">Premium</h3>
                        <div class="pricing-card__price">
                            <span class="amount">$34.99</span>
                            <span class="period">/month</span>
                        </div>
                        <p class="pricing-card__description">Unlimited washes + extras</p>
                    </div>
                </div>
                
                <div class="pricing-card animate-on-scroll" style="--delay: 0.2s">
                    <div class="pricing-card__header">
                        <h3 class="pricing-card__name">Ultimate</h3>
                        <div class="pricing-card__price">
                            <span class="amount">$49.99</span>
                            <span class="period">/month</span>
                        </div>
                        <p class="pricing-card__description">Everything included</p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
