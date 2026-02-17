<?php
/**
 * Template Part: Contact Content
 *
 * @package RainTunnelWash
 */

// Contact info
$info_heading = get_field('info_heading') ?: 'Get in Touch';
$info_text = get_field('info_text');
$use_global = get_field('use_global_contact');

if ($use_global) {
    $phone = get_field('phone_number', 'option');
    $email = get_field('email_address', 'option');
    $address = get_field('address', 'option');
} else {
    $phone = get_field('custom_phone');
    $email = get_field('custom_email');
    $address = get_field('custom_address');
}

// Hours
$hours_heading = get_field('hours_heading') ?: 'Hours of Operation';
$use_global_hours = get_field('use_global_hours');
$hours = $use_global_hours ? get_field('business_hours', 'option') : get_field('custom_hours');

// Map
$map_embed = get_field('map_embed');

// Form
$form_heading = get_field('form_heading') ?: 'Send Us a Message';
$form_shortcode = get_field('form_shortcode');
?>

<section class="section section--contact-content">
    <div class="container">
        <div class="contact-layout">
            <!-- Contact Info Column -->
            <div class="contact-info animate-on-scroll">
                <h2 class="contact-info__title"><?php echo esc_html($info_heading); ?></h2>
                
                <?php if ($info_text) : ?>
                    <p class="contact-info__text"><?php echo esc_html($info_text); ?></p>
                <?php endif; ?>
                
                <ul class="contact-details">
                    <?php if ($phone) : ?>
                        <li class="contact-details__item">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <div>
                                <span class="label">Phone</span>
                                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>">
                                    <?php echo esc_html($phone); ?>
                                </a>
                            </div>
                        </li>
                    <?php endif; ?>
                    
                    <?php if ($email) : ?>
                        <li class="contact-details__item">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <div>
                                <span class="label">Email</span>
                                <a href="mailto:<?php echo esc_attr($email); ?>">
                                    <?php echo esc_html($email); ?>
                                </a>
                            </div>
                        </li>
                    <?php endif; ?>
                    
                    <?php if ($address) : ?>
                        <li class="contact-details__item">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            <div>
                                <span class="label">Address</span>
                                <address><?php echo nl2br(esc_html($address)); ?></address>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
                
                <?php if ($hours) : ?>
                    <div class="contact-hours">
                        <h3 class="contact-hours__title"><?php echo esc_html($hours_heading); ?></h3>
                        <ul class="hours-list">
                            <?php foreach ($hours as $row) : ?>
                                <li class="hours-list__item <?php echo !empty($row['closed']) ? 'is-closed' : ''; ?>">
                                    <span class="day"><?php echo esc_html($row['day']); ?></span>
                                    <span class="time">
                                        <?php if (!empty($row['closed'])) : ?>
                                            Closed
                                        <?php else : ?>
                                            <?php echo esc_html($row['open'] . ' - ' . $row['close']); ?>
                                        <?php endif; ?>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            
            <!-- Form Column -->
            <div class="contact-form-wrapper animate-on-scroll">
                <h2 class="contact-form__title"><?php echo esc_html($form_heading); ?></h2>
                
                <?php if ($form_shortcode) : ?>
                    <div class="contact-form">
                        <?php echo do_shortcode($form_shortcode); ?>
                    </div>
                <?php else : ?>
                    <div class="contact-form contact-form--placeholder">
                        <p>Contact form will appear here once configured in WordPress admin.</p>
                        <p class="small">Add your Contact Form 7, WPForms, or Gravity Forms shortcode in the page settings.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <?php if ($map_embed) : ?>
            <div class="contact-map animate-on-scroll">
                <div class="contact-map__wrapper">
                    <?php echo $map_embed; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
