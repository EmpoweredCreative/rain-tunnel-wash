<?php
/**
 * ACF Fields - Program Single Gives template only
 * Three sections (areas we give back): heading + WYSIWYG paragraph each.
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
    'key'                   => 'group_program_single_gives',
    'title'                 => 'Program Single Gives – Areas We Give Back',
    'fields'                => array(
        array(
            'key'   => 'field_psg_sections',
            'label' => 'Three Sections',
            'name'  => 'program_gives_sections',
            'type'  => 'repeater',
            'layout' => 'block',
            'min'   => 3,
            'max'   => 3,
            'button_label' => 'Edit Section',
            'instructions' => 'Three sections about areas where we give back. Each has a heading and a rich-text paragraph.',
            'sub_fields' => array(
                array(
                    'key'   => 'field_psg_heading',
                    'label' => 'Heading',
                    'name'  => 'heading',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_psg_paragraph',
                    'label' => 'Paragraph',
                    'name'  => 'paragraph',
                    'type'  => 'wysiwyg',
                    'tabs'  => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 0,
                ),
            ),
        ),
        array(
            'key'   => 'field_psg_cta_heading',
            'label' => 'CTA Heading',
            'name'  => 'program_gives_cta_heading',
            'type'  => 'text',
            'placeholder' => 'Ready to Give Back?',
        ),
        array(
            'key'   => 'field_psg_cta_text',
            'label' => 'CTA Text',
            'name'  => 'program_gives_cta_text',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'   => 'field_psg_cta_background',
            'label' => 'CTA Background Image',
            'name'  => 'program_gives_cta_background',
            'type'  => 'image',
            'return_format' => 'array',
            'preview_size' => 'medium',
        ),
        array(
            'key'   => 'field_psg_cta_button_text',
            'label' => 'CTA Button Text',
            'name'  => 'program_gives_cta_button_text',
            'type'  => 'text',
            'placeholder' => 'Get Started',
        ),
        array(
            'key'   => 'field_psg_cta_button',
            'label' => 'CTA Button Link',
            'name'  => 'program_gives_cta_button',
            'type'  => 'link',
        ),
    ),
    'location' => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-program-single-gives.php',
            ),
        ),
    ),
    'menu_order'   => 5,
    'position'    => 'normal',
    'style'       => 'default',
    'label_placement' => 'top',
) );
