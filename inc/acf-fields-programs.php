<?php
/**
 * ACF Fields - Programs Page
 *
 * @package RainTunnelWash
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Programs Page Field Group
 */
function rtw_register_programs_page_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_programs_page',
        'title' => 'Programs Page Content',
        'fields' => array(
            // Hero Section Tab
            array(
                'key' => 'field_programs_hero_tab',
                'label' => 'Hero Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_programs_hero_headline',
                'label' => 'Page Title',
                'name' => 'hero_headline',
                'type' => 'text',
                'placeholder' => 'Membership Programs',
                'instructions' => 'Shows as the main heading below the hero image. You can also set this in the "Heading Section" tab.',
            ),
            array(
                'key' => 'field_programs_hero_subtitle',
                'label' => 'Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Shows as the tagline below the hero image. You can also set this in the "Heading Section" tab (Tagline / Subtitle).',
            ),
            array(
                'key' => 'field_programs_hero_background',
                'label' => 'Background Image',
                'name' => 'hero_background',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_programs_hero_background_position',
                'label' => 'Hero image vertical position',
                'name' => 'hero_background_position',
                'type' => 'text',
                'placeholder' => 'e.g. 200px or center',
                'instructions' => 'Move the hero image up or down. Use "center" for default, or a value like "200px" to shift the image down 200px from the top.',
            ),

            // Heading Section (below hero – same as services landing)
            array(
                'key' => 'field_programs_heading_tab',
                'label' => 'Heading Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_programs_heading_tagline',
                'label' => 'Tagline / Subtitle',
                'name' => 'programs_heading_tagline',
                'type' => 'text',
                'placeholder' => 'SAVE MORE. WASH MORE.',
            ),
            array(
                'key' => 'field_programs_heading_title',
                'label' => 'Heading',
                'name' => 'programs_heading_title',
                'type' => 'text',
                'placeholder' => 'Programs',
            ),
            array(
                'key' => 'field_programs_heading_paragraph',
                'label' => 'Paragraph',
                'name' => 'programs_heading_paragraph',
                'type' => 'textarea',
                'rows' => 3,
            ),
            array(
                'key' => 'field_programs_heading_button_1_text',
                'label' => 'Button 1 Text',
                'name' => 'programs_heading_button_1_text',
                'type' => 'text',
                'placeholder' => 'Learn More',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_programs_heading_button_1_link',
                'label' => 'Button 1 Link',
                'name' => 'programs_heading_button_1_link',
                'type' => 'link',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_programs_heading_button_2_text',
                'label' => 'Button 2 Text',
                'name' => 'programs_heading_button_2_text',
                'type' => 'text',
                'placeholder' => 'Get Started',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_programs_heading_button_2_link',
                'label' => 'Button 2 Link',
                'name' => 'programs_heading_button_2_link',
                'type' => 'link',
                'wrapper' => array('width' => '50'),
            ),

            // Programs Tab (cards section – heading, paragraph, 3 program cards)
            array(
                'key' => 'field_programs_list_tab',
                'label' => 'Programs',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_programs_section_heading_line1',
                'label' => 'Section Heading Line 1',
                'name' => 'programs_heading_line_1',
                'type' => 'text',
                'placeholder' => 'Choose Your Plan',
            ),
            array(
                'key' => 'field_programs_section_heading_line2',
                'label' => 'Section Heading Line 2',
                'name' => 'programs_heading_line_2',
                'type' => 'text',
                'placeholder' => '(optional second line)',
            ),
            array(
                'key' => 'field_programs_section_text',
                'label' => 'Section Text',
                'name' => 'programs_text',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_programs_list',
                'label' => 'Membership Programs',
                'name' => 'programs_list',
                'type' => 'repeater',
                'instructions' => 'Add your membership/subscription programs',
                'layout' => 'block',
                'button_label' => 'Add Program',
                'sub_fields' => array(
                    array(
                        'key' => 'field_program_image',
                        'label' => 'Background Image for Card',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'instructions' => 'Image used as the card header/background.',
                        'wrapper' => array('width' => '100'),
                    ),
                    array(
                        'key' => 'field_program_name',
                        'label' => 'Program Name',
                        'name' => 'name',
                        'type' => 'text',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key' => 'field_program_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                    array(
                        'key' => 'field_program_cta_text',
                        'label' => 'CTA Button Text',
                        'name' => 'cta_text',
                        'type' => 'text',
                        'placeholder' => 'Join Now',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key' => 'field_program_cta_link',
                        'label' => 'CTA Button Link',
                        'name' => 'cta_link',
                        'type' => 'link',
                        'wrapper' => array('width' => '50'),
                    ),
                ),
            ),

            // Intro Section (dark blue background #0F3C5C)
            array(
                'key' => 'field_programs_intro_tab',
                'label' => 'Intro Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_programs_intro_heading',
                'label' => 'Heading',
                'name' => 'programs_intro_heading',
                'type' => 'text',
                'placeholder' => 'Why Join a Program?',
            ),
            array(
                'key' => 'field_programs_intro_paragraph',
                'label' => 'Paragraph',
                'name' => 'programs_intro_paragraph',
                'type' => 'textarea',
                'rows' => 4,
            ),

            // CTA Section Tab
            array(
                'key' => 'field_programs_cta_tab',
                'label' => 'CTA Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_programs_cta_heading',
                'label' => 'Heading',
                'name' => 'cta_heading',
                'type' => 'text',
                'placeholder' => 'Ready to Save?',
            ),
            array(
                'key' => 'field_programs_cta_text',
                'label' => 'Text',
                'name' => 'cta_text',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_programs_cta_background_image',
                'label' => 'Background Image',
                'name' => 'cta_background_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_programs_cta_button_text',
                'label' => 'Button Text',
                'name' => 'cta_button_text',
                'type' => 'text',
                'placeholder' => 'Join Now',
            ),
            array(
                'key' => 'field_programs_cta_button',
                'label' => 'Button Link',
                'name' => 'cta_button',
                'type' => 'link',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page',
                    'operator' => '==',
                    'value' => rtw_get_page_id_by_slug('programs'),
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-programs.php',
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
add_action('acf/init', 'rtw_register_programs_page_fields');
