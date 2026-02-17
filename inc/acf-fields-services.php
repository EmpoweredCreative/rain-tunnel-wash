<?php
/**
 * ACF Fields - Services Page
 *
 * @package RainTunnelWash
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Services Page Field Group
 */
function rtw_register_services_page_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_services_page',
        'title' => 'Services Page Content',
        'fields' => array(
            // Hero Section Tab
            array(
                'key' => 'field_services_hero_tab',
                'label' => 'Hero Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_services_hero_headline',
                'label' => 'Page Title',
                'name' => 'hero_headline',
                'type' => 'text',
                'placeholder' => 'Our Services',
            ),
            array(
                'key' => 'field_services_hero_subtitle',
                'label' => 'Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_services_hero_background',
                'label' => 'Background Image',
                'name' => 'hero_background',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),

            // Heading Section (styled like home hero)
            array(
                'key' => 'field_services_heading_tab',
                'label' => 'Heading Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_services_heading_tagline',
                'label' => 'Tagline / Subtitle',
                'name' => 'heading_tagline',
                'type' => 'text',
                'placeholder' => 'CLEAN. FAST. FRIENDLY.',
            ),
            array(
                'key' => 'field_services_heading_title',
                'label' => 'Heading',
                'name' => 'heading_title',
                'type' => 'text',
                'placeholder' => 'Our Car Wash Services',
            ),
            array(
                'key' => 'field_services_heading_paragraph',
                'label' => 'Paragraph',
                'name' => 'heading_paragraph',
                'type' => 'textarea',
                'rows' => 3,
                'placeholder' => 'Choose from our range of wash options...',
            ),
            array(
                'key' => 'field_services_heading_button_1_text',
                'label' => 'Button 1 Text',
                'name' => 'heading_button_1_text',
                'type' => 'text',
                'placeholder' => 'Learn More',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_services_heading_button_1_link',
                'label' => 'Button 1 Link',
                'name' => 'heading_button_1_link',
                'type' => 'link',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_services_heading_button_2_text',
                'label' => 'Button 2 Text',
                'name' => 'heading_button_2_text',
                'type' => 'text',
                'placeholder' => 'Get Started',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_services_heading_button_2_link',
                'label' => 'Button 2 Link',
                'name' => 'heading_button_2_link',
                'type' => 'link',
                'wrapper' => array('width' => '50'),
            ),

            // Icon Section Tab (dark blue section with 6 cards)
            array(
                'key' => 'field_services_icon_section_tab',
                'label' => 'Icon Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_services_icon_section_heading',
                'label' => 'Section Heading',
                'name' => 'icon_section_heading',
                'type' => 'text',
                'placeholder' => 'CHOOSE THE WASH OPTION THAT WORKS BEST FOR YOU',
                'instructions' => 'Heading above the six icon cards (dark blue section).',
            ),
            array(
                'key' => 'field_services_icon_section_cards',
                'label' => 'Icon Cards',
                'name' => 'icon_section_cards',
                'type' => 'repeater',
                'instructions' => 'Add up to 5 cards. Each card has an icon, two-line title, and links to the matching service below.',
                'min' => 0,
                'max' => 5,
                'layout' => 'block',
                'button_label' => 'Add Card',
                'sub_fields' => array(
                    array(
                        'key' => 'field_icon_card_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'instructions' => 'White outline icon recommended. Will be displayed in white on dark blue.',
                    ),
                    array(
                        'key' => 'field_icon_card_line1',
                        'label' => 'Title Line 1',
                        'name' => 'line_1',
                        'type' => 'text',
                        'placeholder' => 'e.g. SOFT TOUCH',
                    ),
                    array(
                        'key' => 'field_icon_card_line2',
                        'label' => 'Title Line 2',
                        'name' => 'line_2',
                        'type' => 'text',
                        'placeholder' => 'e.g. TUNNEL',
                    ),
                    array(
                        'key' => 'field_icon_card_anchor',
                        'label' => 'Anchor ID',
                        'name' => 'anchor_id',
                        'type' => 'text',
                        'placeholder' => 'soft-touch',
                        'instructions' => 'Jump link target (e.g. #soft-touch). Match the Anchor ID of the service card below.',
                    ),
                ),
            ),

            // Services Tab
            array(
                'key' => 'field_services_list_tab',
                'label' => 'Services',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_services_intro',
                'label' => 'Introduction Text',
                'name' => 'services_intro',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_services_list',
                'label' => 'Services',
                'name' => 'services_list',
                'type' => 'repeater',
                'instructions' => 'Add your car wash services. Each row can be collapsed to show only the service name—click the row to expand or collapse while editing other sections.',
                'layout' => 'block',
                'button_label' => 'Add Service',
                'collapsed' => 'field_service_name',
                'sub_fields' => array(
                    array(
                        'key' => 'field_service_anchor_id',
                        'label' => 'Anchor ID',
                        'name' => 'anchor_id',
                        'type' => 'text',
                        'placeholder' => 'soft-touch',
                        'instructions' => 'Used for jump links (e.g. #soft-touch). Use lowercase, hyphens only.',
                        'wrapper' => array('width' => '25'),
                    ),
                    array(
                        'key' => 'field_service_name',
                        'label' => 'Service Name',
                        'name' => 'name',
                        'type' => 'text',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key' => 'field_service_subtitle',
                        'label' => 'Subtitle',
                        'name' => 'subtitle',
                        'type' => 'text',
                        'wrapper' => array('width' => '25'),
                    ),
                    array(
                        'key' => 'field_service_banner_text',
                        'label' => 'Banner Text',
                        'name' => 'banner_text',
                        'type' => 'text',
                        'placeholder' => 'e.g. Most Popular, Best Value',
                        'instructions' => 'Optional text shown in the blue bar at the top of this service card.',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key' => 'field_service_tagline',
                        'label' => 'Tagline',
                        'name' => 'tagline',
                        'type' => 'text',
                        'placeholder' => 'A fast, thorough wash that gently cleans your vehicle from start to finish.',
                        'instructions' => 'Italic sub-headline shown below the service name.',
                        'wrapper' => array('width' => '100'),
                    ),
                    array(
                        'key' => 'field_service_price',
                        'label' => 'Price',
                        'name' => 'price',
                        'type' => 'text',
                        'placeholder' => '$19.99',
                        'wrapper' => array('width' => '25'),
                    ),
                    array(
                        'key' => 'field_service_popular',
                        'label' => 'Popular?',
                        'name' => 'popular',
                        'type' => 'true_false',
                        'ui' => 1,
                        'wrapper' => array('width' => '25'),
                    ),
                    array(
                        'key' => 'field_service_image',
                        'label' => 'Service Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                    ),
                    array(
                        'key' => 'field_service_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                    ),
                    array(
                        'key' => 'field_service_features',
                        'label' => 'Features Included',
                        'name' => 'features',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Feature',
                        'collapsed' => 'field_service_feature_text',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_service_feature_text',
                                'label' => 'Feature',
                                'name' => 'text',
                                'type' => 'text',
                            ),
                            array(
                                'key' => 'field_service_feature_included',
                                'label' => 'Included',
                                'name' => 'included',
                                'type' => 'true_false',
                                'ui' => 1,
                                'default_value' => 1,
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_service_show_button',
                        'label' => 'Show Button',
                        'name' => 'show_button',
                        'type' => 'true_false',
                        'message' => 'Show CTA button on this card',
                        'default_value' => 1,
                        'ui' => 1,
                        'wrapper' => array('width' => '100'),
                    ),
                    array(
                        'key' => 'field_service_cta_text',
                        'label' => 'Button Text',
                        'name' => 'cta_text',
                        'type' => 'text',
                        'placeholder' => 'Learn More About the Soft Touch Tunnel',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key' => 'field_service_cta_link',
                        'label' => 'Button Link',
                        'name' => 'cta_link',
                        'type' => 'link',
                        'wrapper' => array('width' => '50'),
                    ),
                ),
            ),

            // CTA Section Tab
            array(
                'key' => 'field_services_cta_tab',
                'label' => 'CTA Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_services_cta_background',
                'label' => 'Background Image',
                'name' => 'cta_background_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'instructions' => 'Optional. Image shown behind the CTA text. A dark overlay keeps text readable.',
            ),
            array(
                'key' => 'field_services_cta_heading',
                'label' => 'Heading',
                'name' => 'cta_heading',
                'type' => 'text',
                'placeholder' => 'Ready to Get Started?',
            ),
            array(
                'key' => 'field_services_cta_text',
                'label' => 'Text',
                'name' => 'cta_text',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_services_cta_button_text',
                'label' => 'Button Text',
                'name' => 'cta_button_text',
                'type' => 'text',
                'placeholder' => 'Get Started',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_services_cta_button',
                'label' => 'Button Link',
                'name' => 'cta_button',
                'type' => 'link',
                'instructions' => 'URL for the button above.',
                'wrapper' => array('width' => '50'),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page',
                    'operator' => '==',
                    'value' => rtw_get_page_id_by_slug('services'),
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-services.php',
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
add_action('acf/init', 'rtw_register_services_page_fields');
