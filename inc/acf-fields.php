<?php
/**
 * ACF Field Definitions
 *
 * Main file that includes all ACF field group definitions.
 * Fields are defined programmatically for version control.
 *
 * @package RainTunnelWash
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set ACF JSON save point
 * This allows ACF field groups to be version controlled
 */
function rtw_acf_json_save_point($path) {
    return RTW_THEME_DIR . '/acf-json';
}
add_filter('acf/settings/save_json', 'rtw_acf_json_save_point');

/**
 * Set ACF JSON load point
 */
function rtw_acf_json_load_point($paths) {
    unset($paths[0]);
    $paths[] = RTW_THEME_DIR . '/acf-json';
    return $paths;
}
add_filter('acf/settings/load_json', 'rtw_acf_json_load_point');

/**
 * Include page-specific field definitions
 */
require_once RTW_THEME_DIR . '/inc/acf-fields-home.php';
require_once RTW_THEME_DIR . '/inc/acf-fields-about.php';
require_once RTW_THEME_DIR . '/inc/acf-fields-services.php';
require_once RTW_THEME_DIR . '/inc/acf-fields-contact.php';
require_once RTW_THEME_DIR . '/inc/acf-fields-locations.php';
require_once RTW_THEME_DIR . '/inc/acf-fields-programs.php';
require_once RTW_THEME_DIR . '/inc/acf-fields-service-single.php';
require_once RTW_THEME_DIR . '/inc/acf-fields-program-single.php';
require_once RTW_THEME_DIR . '/inc/acf-fields-program-single-gives.php';
require_once RTW_THEME_DIR . '/inc/acf-fields-location-single.php';
require_once RTW_THEME_DIR . '/inc/acf-fields-faq.php';

/**
 * Helper function to get page ID by slug
 */
function rtw_get_page_id_by_slug($slug) {
    $page = get_page_by_path($slug);
    return $page ? $page->ID : 0;
}
