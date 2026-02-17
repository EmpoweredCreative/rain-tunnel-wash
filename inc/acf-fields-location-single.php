<?php
/**
 * ACF Fields - Location Single Page (e.g. Orchard Drive)
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
    'key' => 'group_location_single',
    'title' => 'Location Single Page Content',
    'fields' => array(
        // Hero (same as program single)
        array(
            'key' => 'field_locs_hero_tab',
            'label' => 'Hero Section',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_locs_hero_badge',
            'label' => 'Badge / Pill',
            'name' => 'location_single_hero_badge',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_hero_tagline',
            'label' => 'Tagline',
            'name' => 'location_single_hero_tagline',
            'type' => 'text',
            'default_value' => 'CLEAN. FAST. FRIENDLY.',
        ),
        array(
            'key' => 'field_locs_hero_title',
            'label' => 'Hero Title',
            'name' => 'location_single_hero_title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_hero_subtitle',
            'label' => 'Hero Subtitle',
            'name' => 'location_single_hero_subtitle',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_hero_description',
            'label' => 'Hero Description',
            'name' => 'location_single_hero_description',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_locs_hero_image',
            'label' => 'Hero Background Image',
            'name' => 'location_single_hero_image',
            'type' => 'image',
            'return_format' => 'array',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_locs_hero_cta1_text',
            'label' => 'Button 1 Text',
            'name' => 'location_single_hero_cta1_text',
            'type' => 'text',
            'default_value' => 'Join Now',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_hero_cta1_link',
            'label' => 'Button 1 Link',
            'name' => 'location_single_hero_cta1_link',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_hero_cta2_text',
            'label' => 'Button 2 Text',
            'name' => 'location_single_hero_cta2_text',
            'type' => 'text',
            'default_value' => 'Learn More',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_hero_cta2_link',
            'label' => 'Button 2 Link',
            'name' => 'location_single_hero_cta2_link',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),

        // Section: heading + paragraph
        array(
            'key' => 'field_locs_section_tab',
            'label' => 'Section (Heading + Paragraph)',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_locs_section_heading',
            'label' => 'Heading',
            'name' => 'location_single_section_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_section_paragraph',
            'label' => 'Paragraph',
            'name' => 'location_single_section_paragraph',
            'type' => 'textarea',
            'rows' => 4,
        ),

        // Two cards: Card 1 tab + Card 2 tab (each has heading + 5 services with name & time)
        array(
            'key' => 'field_locs_card1_tab',
            'label' => 'Card 1',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_locs_card1_heading',
            'label' => 'Heading',
            'name' => 'location_single_card1_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_card1_subheading',
            'label' => 'Subheading',
            'name' => 'location_single_card1_subheading',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_card1_service_1_name',
            'label' => 'Service 1 – Name',
            'name' => 'location_single_card1_service_1_name',
            'type' => 'text',
            'placeholder' => 'e.g. Express Wash',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_card1_service_1_time',
            'label' => 'Service 1 – Time / Hours',
            'name' => 'location_single_card1_service_1_time',
            'type' => 'text',
            'placeholder' => 'e.g. 8am–8pm',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_card1_service_2_name',
            'label' => 'Service 2 – Name',
            'name' => 'location_single_card1_service_2_name',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_card1_service_2_time',
            'label' => 'Service 2 – Time / Hours',
            'name' => 'location_single_card1_service_2_time',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_card1_service_3_name',
            'label' => 'Service 3 – Name',
            'name' => 'location_single_card1_service_3_name',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_card1_service_3_time',
            'label' => 'Service 3 – Time / Hours',
            'name' => 'location_single_card1_service_3_time',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_card1_service_4_name',
            'label' => 'Service 4 – Name',
            'name' => 'location_single_card1_service_4_name',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_card1_service_4_time',
            'label' => 'Service 4 – Time / Hours',
            'name' => 'location_single_card1_service_4_time',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_card1_service_5_name',
            'label' => 'Service 5 – Name',
            'name' => 'location_single_card1_service_5_name',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_card1_service_5_time',
            'label' => 'Service 5 – Time / Hours',
            'name' => 'location_single_card1_service_5_time',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_card2_tab',
            'label' => 'Card 2',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_locs_card2_heading',
            'label' => 'Heading',
            'name' => 'location_single_card2_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_card2_subheading',
            'label' => 'Subheading',
            'name' => 'location_single_card2_subheading',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_card2_service_1_name',
            'label' => 'Service 1 – Name',
            'name' => 'location_single_card2_service_1_name',
            'type' => 'text',
            'placeholder' => 'e.g. Express Wash',
        ),
        array(
            'key' => 'field_locs_card2_service_1_description',
            'label' => 'Service 1 – Description',
            'name' => 'location_single_card2_service_1_description',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_locs_card2_service_2_name',
            'label' => 'Service 2 – Name',
            'name' => 'location_single_card2_service_2_name',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_card2_service_2_description',
            'label' => 'Service 2 – Description',
            'name' => 'location_single_card2_service_2_description',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_locs_card2_service_3_name',
            'label' => 'Service 3 – Name',
            'name' => 'location_single_card2_service_3_name',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_card2_service_3_description',
            'label' => 'Service 3 – Description',
            'name' => 'location_single_card2_service_3_description',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_locs_card2_service_4_name',
            'label' => 'Service 4 – Name',
            'name' => 'location_single_card2_service_4_name',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_card2_service_4_description',
            'label' => 'Service 4 – Description',
            'name' => 'location_single_card2_service_4_description',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_locs_card2_service_5_name',
            'label' => 'Service 5 – Name',
            'name' => 'location_single_card2_service_5_name',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_card2_service_5_description',
            'label' => 'Service 5 – Description',
            'name' => 'location_single_card2_service_5_description',
            'type' => 'textarea',
            'rows' => 2,
        ),

        // Intro (Simple. Flexible. style – dark blue inner container)
        array(
            'key' => 'field_locs_intro_tab',
            'label' => 'Intro (Dark Blue Box)',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_locs_intro_heading',
            'label' => 'Heading',
            'name' => 'location_single_intro_heading',
            'type' => 'text',
            'placeholder' => 'Simple. Flexible. No surprises.',
        ),
        array(
            'key' => 'field_locs_intro_paragraph',
            'label' => 'Paragraph',
            'name' => 'location_single_intro_paragraph',
            'type' => 'textarea',
            'rows' => 4,
        ),
        array(
            'key' => 'field_locs_intro_button_text',
            'label' => 'Button Text',
            'name' => 'location_single_intro_button_text',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_intro_button_link',
            'label' => 'Button Link',
            'name' => 'location_single_intro_button_link',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),

        // How it works (header + icons only)
        array(
            'key' => 'field_locs_how_tab',
            'label' => 'How It Works (Header + Icons)',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_locs_how_heading',
            'label' => 'Section Heading',
            'name' => 'location_single_how_heading',
            'type' => 'text',
            'placeholder' => 'How the Touchless Wash Works',
        ),
        array(
            'key' => 'field_locs_how_icons',
            'label' => 'Icons (4 items)',
            'name' => 'location_single_how_icons',
            'type' => 'repeater',
            'layout' => 'block',
            'min' => 4,
            'max' => 4,
            'button_label' => 'Add Icon',
            'sub_fields' => array(
                array(
                    'key' => 'field_locs_how_icon_image',
                    'label' => 'Icon Image',
                    'name' => 'icon',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'thumbnail',
                ),
                array(
                    'key' => 'field_locs_how_icon_line1',
                    'label' => 'Line 1',
                    'name' => 'line_1',
                    'type' => 'text',
                    'wrapper' => array('width' => '33'),
                ),
                array(
                    'key' => 'field_locs_how_icon_line2',
                    'label' => 'Line 2',
                    'name' => 'line_2',
                    'type' => 'text',
                    'wrapper' => array('width' => '33'),
                ),
                array(
                    'key' => 'field_locs_how_icon_line3',
                    'label' => 'Line 3',
                    'name' => 'line_3',
                    'type' => 'text',
                    'wrapper' => array('width' => '33'),
                ),
            ),
        ),

        // Email opt-in
        array(
            'key' => 'field_locs_email_tab',
            'label' => 'Email Opt-in',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_locs_email_heading',
            'label' => 'Heading',
            'name' => 'location_single_email_heading',
            'type' => 'text',
            'default_value' => 'Local car wash deals and updates delivered to your inbox.',
        ),
        array(
            'key' => 'field_locs_email_subtext',
            'label' => 'Subtext',
            'name' => 'location_single_email_subtext',
            'type' => 'text',
            'default_value' => 'No spam, just helpful updates and irresistible offers.',
        ),

        // CTA
        array(
            'key' => 'field_locs_cta_tab',
            'label' => 'CTA Section',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_locs_cta_background',
            'label' => 'Background Image',
            'name' => 'location_single_cta_background_image',
            'type' => 'image',
            'return_format' => 'array',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_locs_cta_heading',
            'label' => 'Heading',
            'name' => 'location_single_cta_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'field_locs_cta_text',
            'label' => 'Text',
            'name' => 'location_single_cta_text',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_locs_cta_button_text',
            'label' => 'Button Text',
            'name' => 'location_single_cta_button_text',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_locs_cta_button',
            'label' => 'Button Link',
            'name' => 'location_single_cta_button',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-location-single.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
));
