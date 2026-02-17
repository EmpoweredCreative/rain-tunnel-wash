<?php
/**
 * Site Footer Template
 *
 * @package RainTunnelWash
 */

// Get global options from ACF
$phone = function_exists('get_field') ? get_field('phone_number', 'option') : '';
$phone = !empty($phone) ? $phone : '717-263-5775';

// Social links
$facebook = function_exists('get_field') ? get_field('facebook_url', 'option') : '#';
if (empty($facebook)) {
    $facebook = '#';
}

// Helper: get URL for a page by slug (works for child pages too), with optional fallback URL
$footer_page_url = function($slug, $fallback = '') {
    if (empty($slug)) {
        return $fallback ?: home_url('/');
    }
    $pages = get_posts(array(
        'post_type'      => 'page',
        'name'           => $slug,
        'post_status'    => 'publish',
        'posts_per_page' => 1,
        'no_found_rows'  => true,
    ));
    if (!empty($pages)) {
        $url = get_permalink($pages[0]->ID);
        if ($url) {
            return $url;
        }
    }
    return $fallback ?: home_url('/');
};

$services_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('services') : 0;
$services_url = $services_id ? get_permalink($services_id) : home_url('/');
$programs_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('programs') : 0;
$programs_url = $programs_id ? get_permalink($programs_id) : home_url('/');
$locations_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('locations') : 0;
$locations_url = $locations_id ? get_permalink($locations_id) : home_url('/');

// White logo for footer
$footer_logo = get_template_directory_uri() . '/assets/images/raintunnelwhite.png';
?>

<footer class="site-footer" role="contentinfo">
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- Brand Column -->
                <div class="footer-col footer-col--brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo">
                        <img src="<?php echo esc_url($footer_logo); ?>" 
                             alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                             class="footer-logo__img">
                    </a>
                    
                    <p class="footer-tagline">CLEAN. FAST. FRIENDLY.</p>
                    
                    <p class="footer-description">
                        Family-owned & operated since 1968.<br>
                        Proudly serving our community for over 50 years.
                    </p>
                    
                    <div class="footer-contact-info">
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" class="footer-phone">
                            <?php echo esc_html($phone); ?>
                        </a>
                        <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="footer-social-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                            </svg>
                        </a>
                    </div>
                    
                    <p class="footer-serving">
                        Serving Chambersburg, Greencastle, Waynesboro & Shippensburg, PA
                    </p>
                </div>

                <!-- Services Column -->
                <div class="footer-col footer-col--services">
                    <h4 class="footer-col__title">SERVICES</h4>
                    <ul class="footer-menu">
                        <li><a href="<?php echo esc_url($footer_page_url('soft-touch-tunnel', $services_url)); ?>">Soft Touch Tunnel</a></li>
                        <li><a href="<?php echo esc_url($footer_page_url('touchless-automatic-car-wash', $services_url)); ?>">Touchless Automatic</a></li>
                        <li><a href="<?php echo esc_url($footer_page_url('self-serve-hand-bays', $services_url)); ?>">Hand Bays</a></li>
                        <li><a href="<?php echo esc_url($footer_page_url('self-serve-pet-wash', $services_url)); ?>">Pet Wash</a></li>
                        <li><a href="<?php echo esc_url($services_url . '#free-vacuums'); ?>">Free Vacuums</a></li>
                    </ul>
                </div>

                <!-- Programs Column -->
                <div class="footer-col footer-col--programs">
                    <h4 class="footer-col__title">PROGRAMS</h4>
                    <ul class="footer-menu">
                        <li><a href="<?php echo esc_url($footer_page_url('wash-club', $programs_url)); ?>">Wash Club</a></li>
                        <li><a href="<?php echo esc_url($footer_page_url('fleet-programs', $programs_url)); ?>">Fleet Program</a></li>
                        <li><a href="<?php echo esc_url($footer_page_url('car-wash-memberships', $programs_url)); ?>">Car Wash Memberships</a></li>
                        <li><a href="<?php echo esc_url($footer_page_url('rain-tunnel-gives-back', $programs_url)); ?>">Rain Tunnel Gives Back</a></li>
                    </ul>
                    
                    <h4 class="footer-col__title footer-col__title--secondary">GIFT CARDS</h4>
                    <ul class="footer-menu">
                        <li><a href="<?php echo esc_url($footer_page_url('gift-cards', $programs_url)); ?>">Buy a Gift Card</a></li>
                    </ul>
                </div>

                <!-- Locations & Newsletter Column -->
                <div class="footer-col footer-col--locations">
                    <h4 class="footer-col__title">LOCATIONS</h4>
                    <ul class="footer-locations">
                        <li>
                            <a href="<?php echo esc_url($footer_page_url('orchard-drive', $locations_url)); ?>">
                                Orchard Drive – Chambersburg, PA
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url($footer_page_url('lincoln-way-east', $locations_url)); ?>">
                                Lincoln Way East – Chambersburg, PA
                            </a>
                        </li>
                    </ul>
                    
                    <!-- Newsletter -->
                    <div class="footer-newsletter">
                        <p class="newsletter-heading">GET UPDATES AND SPECIAL OFFERS.</p>
                        <form class="newsletter-form" action="#" method="post">
                            <div class="newsletter-form__inner">
                                <input type="email" 
                                       name="email" 
                                       placeholder="Enter your email" 
                                       class="newsletter-input"
                                       required>
                                <button type="submit" class="newsletter-submit">
                                    Submit →
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__inner">
                <p class="footer-copyright">
                    &copy; <?php echo date('Y'); ?> RAIN TUNNEL CAR WASH
                </p>
                <p class="footer-credit">
                    POWERED BY <a href="https://www.empoweredcreative.co" target="_blank" rel="noopener noreferrer">EMPOWERED CREATIVE</a>
                </p>
                <div class="footer-legal">
                    <a href="<?php echo esc_url($footer_page_url('privacy-policy')); ?>">PRIVACY POLICY</a>
                    <span class="footer-legal__divider">|</span>
                    <a href="<?php echo esc_url($footer_page_url('terms-of-use')); ?>">TERMS OF USE</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
