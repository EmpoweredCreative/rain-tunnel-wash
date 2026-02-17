<?php
/**
 * ACF Fields - Contact Page
 * Hero (like home), two columns (map 67% + info 33%), form, content section, CTA.
 *
 * @package RainTunnelWash
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
    return;
}

acf_add_local_field_group( array(
    'key'                   => 'group_contact_page',
    'title'                 => 'Contact Page Content',
    'fields'                => array(
        array( 'key' => 'field_contact_hero_tab', 'label' => 'Hero Section', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_contact_hero_badge', 'label' => 'Badge / Pill', 'name' => 'contact_hero_badge', 'type' => 'text' ),
        array( 'key' => 'field_contact_hero_tagline', 'label' => 'Tagline', 'name' => 'contact_hero_tagline', 'type' => 'text', 'default_value' => 'CLEAN. FAST. FRIENDLY.' ),
        array( 'key' => 'field_contact_hero_title', 'label' => 'Hero Title', 'name' => 'contact_hero_title', 'type' => 'text' ),
        array( 'key' => 'field_contact_hero_subtitle', 'label' => 'Subtitle', 'name' => 'contact_hero_subtitle', 'type' => 'text' ),
        array( 'key' => 'field_contact_hero_description', 'label' => 'Description', 'name' => 'contact_hero_description', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_contact_hero_image', 'label' => 'Background Image', 'name' => 'contact_hero_background', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
        array( 'key' => 'field_contact_hero_cta1_text', 'label' => 'Button 1 Text', 'name' => 'contact_hero_cta1_text', 'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
        array( 'key' => 'field_contact_hero_cta1_link', 'label' => 'Button 1 Link', 'name' => 'contact_hero_cta1_link', 'type' => 'link', 'wrapper' => array( 'width' => '50' ) ),
        array( 'key' => 'field_contact_hero_cta2_text', 'label' => 'Button 2 Text', 'name' => 'contact_hero_cta2_text', 'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
        array( 'key' => 'field_contact_hero_cta2_link', 'label' => 'Button 2 Link', 'name' => 'contact_hero_cta2_link', 'type' => 'link', 'wrapper' => array( 'width' => '50' ) ),

        array( 'key' => 'field_contact_twocol_tab', 'label' => 'Two Columns (Map & Info)', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_contact_map_embed_1', 'label' => 'Location 1 – Map', 'name' => 'contact_map_embed_1', 'type' => 'textarea', 'rows' => 4, 'instructions' => 'Paste either the Google Maps share link (Share → Copy link) or the full iframe embed code for the first location.' ),
        array( 'key' => 'field_contact_map_embed_2', 'label' => 'Location 2 – Map', 'name' => 'contact_map_embed_2', 'type' => 'textarea', 'rows' => 4, 'instructions' => 'Paste either the Google Maps share link or the full iframe embed code for the second location.' ),
        array( 'key' => 'field_contact_info_heading1', 'label' => 'Right column – Heading', 'name' => 'contact_info_heading_1', 'type' => 'text', 'placeholder' => 'Get in Touch' ),
        array( 'key' => 'field_contact_info_phone', 'label' => 'Phone Number', 'name' => 'contact_info_phone', 'type' => 'text' ),
        array( 'key' => 'field_contact_info_paragraph', 'label' => 'Paragraph', 'name' => 'contact_info_paragraph', 'type' => 'textarea', 'rows' => 3 ),
        array( 'key' => 'field_contact_info_heading2', 'label' => 'Second Heading', 'name' => 'contact_info_heading_2', 'type' => 'text', 'placeholder' => 'Our Locations' ),
        array( 'key' => 'field_contact_info_address1', 'label' => 'Address 1', 'name' => 'contact_info_address_1', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_contact_info_address2', 'label' => 'Address 2', 'name' => 'contact_info_address_2', 'type' => 'textarea', 'rows' => 2 ),

        array( 'key' => 'field_contact_form_tab', 'label' => 'Form Section', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_contact_form_heading', 'label' => 'Form Heading', 'name' => 'contact_form_heading', 'type' => 'text', 'default_value' => 'Send us a message' ),
        array( 'key' => 'field_contact_form_shortcode', 'label' => 'Fluent Form Shortcode', 'name' => 'contact_form_shortcode', 'type' => 'text', 'instructions' => 'Paste the Fluent Form shortcode (e.g. [fluentform id="1"]).', 'placeholder' => '[fluentform id="1"]' ),

        array( 'key' => 'field_contact_content_tab', 'label' => 'Content Section (below form)', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_contact_content_heading', 'label' => 'Heading', 'name' => 'contact_content_heading', 'type' => 'text' ),
        array( 'key' => 'field_contact_content_body', 'label' => 'Content', 'name' => 'contact_content_body', 'type' => 'wysiwyg' ),

        array( 'key' => 'field_contact_cta_tab', 'label' => 'CTA Section', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_contact_cta_background', 'label' => 'Background Image', 'name' => 'contact_cta_background', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
        array( 'key' => 'field_contact_cta_heading', 'label' => 'Heading', 'name' => 'contact_cta_heading', 'type' => 'text' ),
        array( 'key' => 'field_contact_cta_text', 'label' => 'Text', 'name' => 'contact_cta_text', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_contact_cta_button_text', 'label' => 'Button Text', 'name' => 'contact_cta_button_text', 'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
        array( 'key' => 'field_contact_cta_button', 'label' => 'Button Link', 'name' => 'contact_cta_button', 'type' => 'link', 'wrapper' => array( 'width' => '50' ) ),
    ),
    'location'              => array(
        array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-contact.php' ) ),
    ),
    'menu_order'            => 0,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
) );

/**
 * Allow iframe in contact map embed fields on save (WordPress/ACF may strip by default).
 * Capture raw value at priority 1; at priority 999 restore and sanitize so iframe is saved.
 */
function rtw_acf_contact_map_embed_sanitize( $value, $post_id, $field ) {
    $allowed = wp_kses_allowed_html( 'post' );
    $allowed['iframe'] = array(
        'src'             => true,
        'width'           => true,
        'height'          => true,
        'style'           => true,
        'allowfullscreen' => true,
        'loading'         => true,
        'referrerpolicy'  => true,
        'title'           => true,
    );
    if ( ! is_string( $value ) || trim( $value ) === '' ) {
        return $value;
    }
    if ( stripos( $value, '<iframe' ) !== false ) {
        return wp_kses( $value, $allowed );
    }
    return $value;
}

// Capture raw value before any other filter can strip it.
function rtw_acf_contact_map_embed_capture( $value, $post_id, $field ) {
    $key = isset( $field['key'] ) ? $field['key'] : '';
    if ( $key && is_string( $value ) && stripos( $value, '<iframe' ) !== false ) {
        if ( ! isset( $GLOBALS['rtw_acf_map_embed_raw'] ) ) {
            $GLOBALS['rtw_acf_map_embed_raw'] = array();
        }
        $GLOBALS['rtw_acf_map_embed_raw'][ $key ] = $value;
    }
    return $value;
}

// Restore iframe if a later filter stripped it, then sanitize.
function rtw_acf_contact_map_embed_restore( $value, $post_id, $field ) {
    $key = isset( $field['key'] ) ? $field['key'] : '';
    $raw = isset( $GLOBALS['rtw_acf_map_embed_raw'][ $key ] ) ? $GLOBALS['rtw_acf_map_embed_raw'][ $key ] : null;
    if ( $raw && ( ! is_string( $value ) || stripos( $value, '<iframe' ) === false ) ) {
        $value = $raw;
    }
    if ( isset( $GLOBALS['rtw_acf_map_embed_raw'][ $key ] ) ) {
        unset( $GLOBALS['rtw_acf_map_embed_raw'][ $key ] );
    }
    return rtw_acf_contact_map_embed_sanitize( $value, $post_id, $field );
}

// Hook by key (reliable) and by name; capture first, restore last.
add_filter( 'acf/update_value/key=field_contact_map_embed_1', 'rtw_acf_contact_map_embed_capture', 1, 3 );
add_filter( 'acf/update_value/key=field_contact_map_embed_2', 'rtw_acf_contact_map_embed_capture', 1, 3 );
add_filter( 'acf/update_value/key=field_contact_map_embed_1', 'rtw_acf_contact_map_embed_restore', 999, 3 );
add_filter( 'acf/update_value/key=field_contact_map_embed_2', 'rtw_acf_contact_map_embed_restore', 999, 3 );
