<?php
/**
 * ACF Fields - Locations Page
 *
 * @package RainTunnelWash
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Locations Page Field Group
 */
function rtw_register_locations_page_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_locations_page',
        'title' => 'Locations Page Content',
        'fields' => array(
            // Hero Section Tab
            array(
                'key' => 'field_locations_hero_tab',
                'label' => 'Hero Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_locations_hero_headline',
                'label' => 'Page Title',
                'name' => 'hero_headline',
                'type' => 'text',
                'placeholder' => 'Our Locations',
            ),
            array(
                'key' => 'field_locations_hero_subtitle',
                'label' => 'Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_locations_hero_background',
                'label' => 'Background Image',
                'name' => 'hero_background',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_locations_hero_paragraph',
                'label' => 'Hero Paragraph',
                'name' => 'hero_paragraph',
                'type' => 'textarea',
                'rows' => 3,
                'placeholder' => 'Find a Rain Tunnel Wash near you.',
            ),
            array(
                'key' => 'field_locations_hero_button_1_text',
                'label' => 'Button 1 Text',
                'name' => 'hero_button_1_text',
                'type' => 'text',
                'placeholder' => 'Location 1',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_locations_hero_button_1_link',
                'label' => 'Button 1 Link',
                'name' => 'hero_button_1_link',
                'type' => 'link',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_locations_hero_button_2_text',
                'label' => 'Button 2 Text',
                'name' => 'hero_button_2_text',
                'type' => 'text',
                'placeholder' => 'Location 2',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_locations_hero_button_2_link',
                'label' => 'Button 2 Link',
                'name' => 'hero_button_2_link',
                'type' => 'link',
                'wrapper' => array('width' => '50'),
            ),

            // Locations Tab
            array(
                'key' => 'field_locations_list_tab',
                'label' => 'Locations',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_locations_heading_line_1',
                'label' => 'Section Heading Line 1',
                'name' => 'locations_heading_line_1',
                'type' => 'text',
                'placeholder' => 'Find a Location',
            ),
            array(
                'key' => 'field_locations_heading_line_2',
                'label' => 'Section Heading Line 2',
                'name' => 'locations_heading_line_2',
                'type' => 'text',
                'placeholder' => 'Near You',
            ),
            array(
                'key' => 'field_locations_intro',
                'label' => 'Introduction Paragraph',
                'name' => 'locations_intro',
                'type' => 'textarea',
                'rows' => 3,
            ),
            array(
                'key' => 'field_locations_list',
                'label' => 'Location Cards (2)',
                'name' => 'locations_list',
                'type' => 'repeater',
                'instructions' => 'Two location cards shown in the main section. Each has image, heading, address, description, and a button below.',
                'layout' => 'block',
                'min' => 2,
                'max' => 2,
                'button_label' => 'Add Location',
                'sub_fields' => array(
                    array(
                        'key' => 'field_location_heading_line_1',
                        'label' => 'Heading Line 1',
                        'name' => 'heading_line_1',
                        'type' => 'text',
                        'placeholder' => 'Downtown',
                    ),
                    array(
                        'key' => 'field_location_heading_line_2',
                        'label' => 'Heading Line 2',
                        'name' => 'heading_line_2',
                        'type' => 'text',
                        'placeholder' => 'Location',
                    ),
                    array(
                        'key' => 'field_location_image',
                        'label' => 'Card Background Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                    ),
                    array(
                        'key' => 'field_location_address',
                        'label' => 'Address',
                        'name' => 'address',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                    array(
                        'key' => 'field_location_description',
                        'label' => 'Location Description / Paragraph',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'placeholder' => 'Short description for this location.',
                    ),
                    array(
                        'key' => 'field_location_cta_text',
                        'label' => 'Button Text',
                        'name' => 'cta_text',
                        'type' => 'text',
                        'placeholder' => 'Get Directions',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key' => 'field_location_cta_link',
                        'label' => 'Button Link',
                        'name' => 'cta_link',
                        'type' => 'link',
                        'wrapper' => array('width' => '50'),
                    ),
                ),
            ),

            // CTA Section Tab
            array(
                'key' => 'field_locations_cta_tab',
                'label' => 'CTA Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_locations_cta_heading_line_1',
                'label' => 'Heading Line 1',
                'name' => 'cta_heading_line_1',
                'type' => 'text',
                'placeholder' => 'Visit Us',
            ),
            array(
                'key' => 'field_locations_cta_heading_line_2',
                'label' => 'Heading Line 2',
                'name' => 'cta_heading_line_2',
                'type' => 'text',
                'placeholder' => 'Today',
            ),
            array(
                'key' => 'field_locations_cta_text',
                'label' => 'Text',
                'name' => 'cta_text',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_locations_cta_button_text',
                'label' => 'Button Text',
                'name' => 'cta_button_text',
                'type' => 'text',
                'placeholder' => 'Get Started',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_locations_cta_button',
                'label' => 'Button Link',
                'name' => 'cta_button',
                'type' => 'link',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_locations_cta_background',
                'label' => 'Background Image',
                'name' => 'cta_background_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page',
                    'operator' => '==',
                    'value' => rtw_get_page_id_by_slug('locations'),
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-locations.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));
}
add_action('acf/init', 'rtw_register_locations_page_fields');
