<?php
/**
 * Site Header Template
 *
 * @package RainTunnelWash
 */

// Get global options from ACF
$logo = function_exists('get_field') ? get_field('site_logo', 'option') : null;
$acf_phone = function_exists('get_field') ? get_field('phone_number', 'option') : null;
$phone = !empty($acf_phone) ? $acf_phone : '717-263-5775';
// Theme asset logo (icon)
$asset_logo = get_template_directory_uri() . '/assets/images/raintunnellogo.png';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content">
    <?php esc_html_e('Skip to content', 'raintunnelwash'); ?>
</a>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar__inner">
            <div class="top-bar__left">
                <!-- Empty spacer for white area -->
            </div>
            <div class="top-bar__right">
                <?php if ($phone) : ?>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" class="top-bar__phone">
                        CALL <?php echo esc_html($phone); ?>
                    </a>
                <?php endif; ?>
                <div class="top-bar__links">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('programs'))); ?>" class="top-bar__link">
                        JOIN THE WASH CLUB
                    </a>
                    <span class="top-bar__divider">|</span>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('gift-cards'))); ?>" class="top-bar__link">
                        WASH STORE
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="site-header" role="banner">
    <div class="container">
        <div class="site-header__inner">
            <!-- Logo -->
            <div class="site-header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <div class="site-logo-lockup">
                        <img src="<?php echo esc_url($asset_logo); ?>" 
                             alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                             class="site-logo site-logo-icon">
                        <div class="site-logo-text">
                            <span class="site-logo-name">The Rain Tunnel</span>
                            <span class="site-logo-tagline">CAR WASH</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Navigation -->
            <nav class="site-header__nav" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'raintunnelwash'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'fallback_cb'    => 'rtw_fallback_menu',
                    'depth'          => 2,
                ));
                ?>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-expanded="false" aria-controls="mobile-menu" aria-label="<?php esc_attr_e('Toggle Menu', 'raintunnelwash'); ?>">
                <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="mobile-menu" aria-hidden="true">
        <div class="container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'mobile-nav-menu',
                'container'      => false,
                'fallback_cb'    => 'rtw_fallback_mobile_menu',
                'depth'          => 2,
            ));
            ?>
            
            <div class="mobile-menu__extras">
                <?php if ($phone) : ?>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" class="mobile-phone">
                        CALL <?php echo esc_html($phone); ?>
                    </a>
                <?php endif; ?>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('programs'))); ?>" class="mobile-link">
                    JOIN THE WASH CLUB
                </a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('gift-cards'))); ?>" class="mobile-link">
                    WASH STORE
                </a>
            </div>
        </div>
    </div>
</header>
