<?php
/**
 * ACF Fields - Service Page (single service template)
 *
 * @package RainTunnelWash
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('acf_add_local_field_group')) {
    return;
}

acf_add_local_field_group(array(
    'key' => 'group_service_single',
    'title' => 'Service Page Content',
    'fields' => array(
        // Hero (same as home)
        array(
            'key' => 'field_ss_hero_tab',
            'label' => 'Hero Section',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ss_hero_badge',
            'label' => 'Badge / Pill (above tagline)',
            'name' => 'service_hero_badge',
            'type' => 'text',
            'instructions' => 'Optional. Shown above the tagline as a pill. Leave empty to hide.',
            'placeholder' => 'e.g. Now Open',
        ),
        array(
            'key' => 'field_ss_hero_tagline',
            'label' => 'Tagline',
            'name' => 'service_hero_tagline',
            'type' => 'text',
            'default_value' => 'CLEAN. FAST. FRIENDLY.',
        ),
        array(
            'key' => 'field_ss_hero_title',
            'label' => 'Hero Title',
            'name' => 'service_hero_title',
            'type' => 'text',
            'placeholder' => 'TOUCHLESS AUTOMATIC CAR WASH',
        ),
        array(
            'key' => 'field_ss_hero_subtitle',
            'label' => 'Hero Subtitle',
            'name' => 'service_hero_subtitle',
            'type' => 'text',
            'placeholder' => 'Open 24/7 in both tunnels.',
        ),
        array(
            'key' => 'field_ss_hero_description',
            'label' => 'Hero Description',
            'name' => 'service_hero_description',
            'type' => 'textarea',
            'rows' => 2,
            'placeholder' => 'A fast, non-contact wash designed for convenience, consistency, and peace of mind.',
        ),
        array(
            'key' => 'field_ss_hero_image',
            'label' => 'Hero Background Image',
            'name' => 'service_hero_image',
            'type' => 'image',
            'return_format' => 'array',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_ss_hero_cta1_text',
            'label' => 'Button 1 Text',
            'name' => 'service_hero_cta1_text',
            'type' => 'text',
            'default_value' => 'Wash Me Now',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ss_hero_cta1_link',
            'label' => 'Button 1 Link',
            'name' => 'service_hero_cta1_link',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ss_hero_cta2_text',
            'label' => 'Button 2 Text',
            'name' => 'service_hero_cta2_text',
            'type' => 'text',
            'default_value' => 'Unlimited Wash',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ss_hero_cta2_link',
            'label' => 'Button 2 Link',
            'name' => 'service_hero_cta2_link',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),

        // Two-column section
        array(
            'key' => 'field_ss_twocol_tab',
            'label' => 'Two-Column Section',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ss_twocol_heading',
            'label' => 'Heading',
            'name' => 'service_twocol_heading',
            'type' => 'text',
            'placeholder' => 'Why Drivers Choose Touchless Automatic.',
        ),
        array(
            'key' => 'field_ss_twocol_paragraph',
            'label' => 'Paragraph',
            'name' => 'service_twocol_paragraph',
            'type' => 'textarea',
            'rows' => 4,
        ),
        array(
            'key' => 'field_ss_twocol_button_text',
            'label' => 'Button Text',
            'name' => 'service_twocol_button_text',
            'type' => 'text',
            'default_value' => 'Join the Wash Club',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ss_twocol_button_link',
            'label' => 'Button Link',
            'name' => 'service_twocol_button_link',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ss_twocol_image',
            'label' => 'Right Column Image',
            'name' => 'service_twocol_image',
            'type' => 'image',
            'return_format' => 'array',
            'preview_size' => 'medium',
        ),

        // Value proposition boxes (3)
        array(
            'key' => 'field_ss_value_tab',
            'label' => 'Value Propositions',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ss_value_boxes',
            'label' => 'Value Proposition Boxes',
            'name' => 'service_value_boxes',
            'type' => 'repeater',
            'layout' => 'block',
            'min' => 3,
            'max' => 3,
            'button_label' => 'Add Box',
            'sub_fields' => array(
                array(
                    'key' => 'field_ss_value_text',
                    'label' => 'Text',
                    'name' => 'text',
                    'type' => 'text',
                    'placeholder' => '24/7 Convenience',
                ),
            ),
        ),

        // How it works (heading, paragraph, 4 icons)
        array(
            'key' => 'field_ss_how_tab',
            'label' => 'How It Works',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ss_how_heading',
            'label' => 'Section Heading',
            'name' => 'service_how_heading',
            'type' => 'text',
            'placeholder' => 'How the Touchless Wash Works.',
        ),
        array(
            'key' => 'field_ss_how_paragraph',
            'label' => 'Paragraph',
            'name' => 'service_how_paragraph',
            'type' => 'textarea',
            'rows' => 3,
        ),
        array(
            'key' => 'field_ss_how_icons',
            'label' => 'Icons (4 items)',
            'name' => 'service_how_icons',
            'type' => 'repeater',
            'layout' => 'block',
            'min' => 4,
            'max' => 4,
            'button_label' => 'Add Icon',
            'sub_fields' => array(
                array(
                    'key' => 'field_ss_how_icon_image',
                    'label' => 'Icon Image',
                    'name' => 'icon',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'thumbnail',
                ),
                array(
                    'key' => 'field_ss_how_icon_line1',
                    'label' => 'Line 1',
                    'name' => 'line_1',
                    'type' => 'text',
                    'placeholder' => 'HIGH PRESSURE WATER',
                    'wrapper' => array('width' => '33'),
                ),
                array(
                    'key' => 'field_ss_how_icon_line2',
                    'label' => 'Line 2',
                    'name' => 'line_2',
                    'type' => 'text',
                    'placeholder' => 'LOOSENS DIRT AND GRIME',
                    'wrapper' => array('width' => '33'),
                ),
                array(
                    'key' => 'field_ss_how_icon_line3',
                    'label' => 'Line 3',
                    'name' => 'line_3',
                    'type' => 'text',
                    'placeholder' => '(optional)',
                    'wrapper' => array('width' => '33'),
                ),
            ),
        ),

        // Email opt-in (same as home; blue background is CSS modifier)
        array(
            'key' => 'field_ss_email_tab',
            'label' => 'Email Opt-in',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ss_email_heading',
            'label' => 'Heading',
            'name' => 'service_email_heading',
            'type' => 'text',
            'default_value' => 'Local car wash deals and updates delivered to your inbox.',
        ),
        array(
            'key' => 'field_ss_email_subtext',
            'label' => 'Subtext',
            'name' => 'service_email_subtext',
            'type' => 'text',
            'default_value' => 'No spam, just helpful updates and irresistible offers.',
        ),

        // CTA (same as services landing)
        array(
            'key' => 'field_ss_cta_tab',
            'label' => 'CTA Section',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ss_cta_background',
            'label' => 'Background Image',
            'name' => 'service_cta_background_image',
            'type' => 'image',
            'return_format' => 'array',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_ss_cta_heading',
            'label' => 'Heading',
            'name' => 'service_cta_heading',
            'type' => 'text',
            'placeholder' => 'Have Questions Before You Wash?',
        ),
        array(
            'key' => 'field_ss_cta_text',
            'label' => 'Text',
            'name' => 'service_cta_text',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_ss_cta_button_text',
            'label' => 'Button Text',
            'name' => 'service_cta_button_text',
            'type' => 'text',
            'placeholder' => 'View Frequently Asked Questions',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ss_cta_button',
            'label' => 'Button Link',
            'name' => 'service_cta_button',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-service-single.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
));
