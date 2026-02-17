<?php
/**
 * Rain Tunnel Wash Theme Functions
 *
 * @package RainTunnelWash
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
define('RTW_THEME_VERSION', '1.0.0');
define('RTW_THEME_DIR', get_template_directory());
define('RTW_THEME_URI', get_template_directory_uri());

/**
 * Include theme setup files
 */
require_once RTW_THEME_DIR . '/inc/theme-setup.php';
require_once RTW_THEME_DIR . '/inc/customizer.php';

/**
 * Include ACF field definitions (only if ACF is active)
 */
if (class_exists('ACF')) {
    require_once RTW_THEME_DIR . '/inc/acf-fields.php';
    require_once RTW_THEME_DIR . '/inc/acf-options.php';
}

/**
 * Enqueue styles and scripts
 */
function rtw_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style(
        'rtw-main-style',
        RTW_THEME_URI . '/assets/css/main.css',
        array(),
        RTW_THEME_VERSION
    );

    // Adobe Fonts (Typekit) - Segoe UI + Arial
    wp_enqueue_style(
        'rtw-typekit-fonts',
        'https://use.typekit.net/lnd1cnu.css',
        array(),
        null
    );

    // Main JavaScript
    wp_enqueue_script(
        'rtw-main-script',
        RTW_THEME_URI . '/assets/js/main.js',
        array(),
        RTW_THEME_VERSION,
        true
    );

    // Pass data to JavaScript
    wp_localize_script('rtw-main-script', 'rtwData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'siteUrl' => home_url(),
    ));
}
add_action('wp_enqueue_scripts', 'rtw_enqueue_assets');

/**
 * Admin notice if ACF Pro is not installed
 */
function rtw_acf_admin_notice() {
    if (!class_exists('ACF')) {
        echo '<div class="notice notice-error"><p>';
        echo '<strong>Rain Tunnel Wash Theme:</strong> This theme requires Advanced Custom Fields Pro to function properly. ';
        echo 'Please install and activate ACF Pro.';
        echo '</p></div>';
    }
}
add_action('admin_notices', 'rtw_acf_admin_notice');
