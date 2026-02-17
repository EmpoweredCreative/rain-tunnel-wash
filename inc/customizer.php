<?php
/**
 * Theme Customizer
 *
 * @package RainTunnelWash
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add customizer settings and controls
 */
function rtw_customize_register($wp_customize) {
    
    /*
     * Colors Section
     */
    $wp_customize->add_section('rtw_colors', array(
        'title'    => esc_html__('Brand Colors', 'raintunnelwash'),
        'priority' => 30,
    ));

    // Primary Color (Brand Blue)
    $wp_customize->add_setting('rtw_primary_color', array(
        'default'           => '#1e6fa8',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rtw_primary_color', array(
        'label'   => esc_html__('Primary Color (Brand Blue)', 'raintunnelwash'),
        'section' => 'rtw_colors',
    )));

    // Secondary Color (Brand Navy)
    $wp_customize->add_setting('rtw_secondary_color', array(
        'default'           => '#0f3c5c',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rtw_secondary_color', array(
        'label'   => esc_html__('Secondary Color (Brand Navy)', 'raintunnelwash'),
        'section' => 'rtw_colors',
    )));

    // Accent Color
    $wp_customize->add_setting('rtw_accent_color', array(
        'default'           => '#1e6fa8',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rtw_accent_color', array(
        'label'   => esc_html__('Accent Color', 'raintunnelwash'),
        'section' => 'rtw_colors',
    )));
}
add_action('customize_register', 'rtw_customize_register');

/**
 * Output customizer CSS variables
 */
function rtw_customizer_css() {
    $primary   = get_theme_mod('rtw_primary_color', '#0066CC');
    $secondary = get_theme_mod('rtw_secondary_color', '#00A3E0');
    $accent    = get_theme_mod('rtw_accent_color', '#FFB800');
    
    $css = "
        :root {
            --color-primary: {$primary};
            --color-secondary: {$secondary};
            --color-accent: {$accent};
        }
    ";
    
    wp_add_inline_style('rtw-main-style', $css);
}
add_action('wp_enqueue_scripts', 'rtw_customizer_css', 20);

/**
 * Enqueue customizer preview script
 */
function rtw_customizer_preview_js() {
    wp_enqueue_script(
        'rtw-customizer-preview',
        RTW_THEME_URI . '/assets/js/customizer-preview.js',
        array('customize-preview'),
        RTW_THEME_VERSION,
        true
    );
}
add_action('customize_preview_init', 'rtw_customizer_preview_js');
