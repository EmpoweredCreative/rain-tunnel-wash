<?php
/**
 * ACF Fields - FAQ Page
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
    'key'                   => 'group_faq_page',
    'title'                  => 'FAQ Page Content',
    'fields'                 => array(
        array(
            'key'   => 'field_faq_hero_tab',
            'label' => 'Hero Section',
            'name'  => '',
            'type'  => 'tab',
        ),
        array(
            'key'         => 'field_faq_hero_badge',
            'label'       => 'Badge / Pill (above tagline)',
            'name'        => 'faq_hero_badge',
            'type'        => 'text',
            'placeholder' => 'e.g. Now Open',
        ),
        array(
            'key'           => 'field_faq_hero_tagline',
            'label'         => 'Tagline',
            'name'          => 'faq_hero_tagline',
            'type'          => 'text',
            'default_value' => 'CLEAN. FAST. FRIENDLY.',
        ),
        array(
            'key'  => 'field_faq_hero_title',
            'label' => 'Hero Title',
            'name'  => 'faq_hero_title',
            'type'  => 'text',
        ),
        array(
            'key'  => 'field_faq_hero_subtitle',
            'label' => 'Hero Subtitle',
            'name'  => 'faq_hero_subtitle',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_faq_hero_description',
            'label' => 'Hero Description',
            'name'  => 'faq_hero_description',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'           => 'field_faq_hero_image',
            'label'         => 'Hero Background Image',
            'name'          => 'faq_hero_image',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'           => 'field_faq_hero_cta1_text',
            'label'         => 'Button 1 Text',
            'name'          => 'faq_hero_cta1_text',
            'type'          => 'text',
            'default_value' => 'Join Now',
            'wrapper'       => array( 'width' => '50' ),
        ),
        array(
            'key'     => 'field_faq_hero_cta1_link',
            'label'   => 'Button 1 Link',
            'name'    => 'faq_hero_cta1_link',
            'type'    => 'link',
            'wrapper' => array( 'width' => '50' ),
        ),
        array(
            'key'           => 'field_faq_hero_cta2_text',
            'label'         => 'Button 2 Text',
            'name'          => 'faq_hero_cta2_text',
            'type'          => 'text',
            'default_value' => 'Learn More',
            'wrapper'       => array( 'width' => '50' ),
        ),
        array(
            'key'     => 'field_faq_hero_cta2_link',
            'label'   => 'Button 2 Link',
            'name'    => 'faq_hero_cta2_link',
            'type'    => 'link',
            'wrapper' => array( 'width' => '50' ),
        ),
        array(
            'key'         => 'field_faq_hero_anchor_help',
            'label'       => 'Anchor links',
            'name'        => '',
            'type'        => 'message',
            'message'     => 'To link a button to a section below, set the button URL to #anchor (e.g. #general-questions). Define each section’s Anchor ID in the FAQ Sections tab.',
            'wrapper'     => array( 'width' => '100' ),
        ),
        array(
            'key'   => 'field_faq_tab',
            'label' => 'FAQ Sections',
            'name'  => '',
            'type'  => 'tab',
        ),
        array(
            'key'         => 'field_faq_section1_anchor',
            'label'       => 'Section 1 – Anchor ID',
            'name'        => 'faq_section_1_anchor',
            'type'        => 'text',
            'placeholder' => 'e.g. general-questions',
            'instructions' => 'Optional. Use in hero button link as #general-questions (letters, numbers, hyphens only).',
        ),
        array(
            'key'   => 'field_faq_section1_heading',
            'label' => 'Section 1 Heading',
            'name'  => 'faq_section_1_heading',
            'type'  => 'text',
            'placeholder' => 'e.g. General Questions',
        ),
        array(
            'key'           => 'field_faq_section1_items',
            'label'         => 'Section 1 – FAQ Items',
            'name'          => 'faq_section_1_items',
            'type'          => 'repeater',
            'layout'        => 'block',
            'button_label'  => 'Add FAQ',
            'sub_fields'    => array(
                array(
                    'key'  => 'field_faq_s1_question',
                    'label' => 'Question',
                    'name'  => 'question',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_faq_s1_answer',
                    'label' => 'Answer',
                    'name'  => 'answer',
                    'type'  => 'wysiwyg',
                ),
            ),
        ),
        array(
            'key'         => 'field_faq_section2_anchor',
            'label'       => 'Section 2 – Anchor ID',
            'name'        => 'faq_section_2_anchor',
            'type'        => 'text',
            'placeholder' => 'e.g. wash-club-programs',
            'instructions' => 'Optional. Use in hero button link as #wash-club-programs (letters, numbers, hyphens only).',
        ),
        array(
            'key'   => 'field_faq_section2_heading',
            'label' => 'Section 2 Heading',
            'name'  => 'faq_section_2_heading',
            'type'  => 'text',
            'placeholder' => 'e.g. Wash Club & Programs',
        ),
        array(
            'key'           => 'field_faq_section2_items',
            'label'         => 'Section 2 – FAQ Items',
            'name'          => 'faq_section_2_items',
            'type'          => 'repeater',
            'layout'        => 'block',
            'button_label'  => 'Add FAQ',
            'sub_fields'    => array(
                array(
                    'key'  => 'field_faq_s2_question',
                    'label' => 'Question',
                    'name'  => 'question',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_faq_s2_answer',
                    'label' => 'Answer',
                    'name'  => 'answer',
                    'type'  => 'wysiwyg',
                ),
            ),
        ),
    ),
    'location'              => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-faq.php',
            ),
        ),
    ),
    'menu_order'            => 0,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
) );
