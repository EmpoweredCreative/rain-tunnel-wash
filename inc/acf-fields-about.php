<?php
/**
 * ACF Fields - About / Who We Are Page
 * Hero (service-style), two-column (heading + paragraph | image), timeline, What Guides Us (3 cards), intro (programs-style), CTA.
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
    'key'                   => 'group_about_page',
    'title'                 => 'About Page Content (Who We Are)',
    'fields'                => array(
        array( 'key' => 'field_about_hero_tab', 'label' => 'Hero Section', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_about_hero_badge', 'label' => 'Badge / Pill', 'name' => 'about_hero_badge', 'type' => 'text' ),
        array( 'key' => 'field_about_hero_tagline', 'label' => 'Tagline', 'name' => 'about_hero_tagline', 'type' => 'text', 'default_value' => 'CLEAN. FAST. FRIENDLY.' ),
        array( 'key' => 'field_about_hero_title_line1', 'label' => 'Hero Title (Line 1)', 'name' => 'about_hero_title_line1', 'type' => 'text', 'placeholder' => 'Who We' ),
        array( 'key' => 'field_about_hero_title_line2', 'label' => 'Hero Title (Line 2)', 'name' => 'about_hero_title_line2', 'type' => 'text', 'placeholder' => 'Are' ),
        array( 'key' => 'field_about_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'about_hero_subtitle', 'type' => 'text' ),
        array( 'key' => 'field_about_hero_description', 'label' => 'Description', 'name' => 'about_hero_description', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_about_hero_image', 'label' => 'Background Image', 'name' => 'about_hero_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
        array( 'key' => 'field_about_hero_cta1_text', 'label' => 'Button 1 Text', 'name' => 'about_hero_cta1_text', 'type' => 'text', 'default_value' => 'Wash Me Now', 'wrapper' => array( 'width' => '50' ) ),
        array( 'key' => 'field_about_hero_cta1_link', 'label' => 'Button 1 Link', 'name' => 'about_hero_cta1_link', 'type' => 'link', 'wrapper' => array( 'width' => '50' ) ),
        array( 'key' => 'field_about_hero_cta2_text', 'label' => 'Button 2 Text', 'name' => 'about_hero_cta2_text', 'type' => 'text', 'default_value' => 'Unlimited Wash', 'wrapper' => array( 'width' => '50' ) ),
        array( 'key' => 'field_about_hero_cta2_link', 'label' => 'Button 2 Link', 'name' => 'about_hero_cta2_link', 'type' => 'link', 'wrapper' => array( 'width' => '50' ) ),

        array( 'key' => 'field_about_twocol_tab', 'label' => 'Two-Column Section', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_about_twocol_heading_line1', 'label' => 'Heading (Line 1)', 'name' => 'about_twocol_heading_line1', 'type' => 'text' ),
        array( 'key' => 'field_about_twocol_heading_line2', 'label' => 'Heading (Line 2)', 'name' => 'about_twocol_heading_line2', 'type' => 'text' ),
        array( 'key' => 'field_about_twocol_paragraph', 'label' => 'Paragraph', 'name' => 'about_twocol_paragraph', 'type' => 'textarea', 'rows' => 4 ),
        array( 'key' => 'field_about_twocol_image', 'label' => 'Image (right column)', 'name' => 'about_twocol_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),

        array( 'key' => 'field_about_timeline_tab', 'label' => 'Our Story Timeline', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_about_timeline_title', 'label' => 'Section Title', 'name' => 'about_timeline_title', 'type' => 'text', 'default_value' => 'OUR STORY.' ),
        array( 'key' => 'field_about_timeline_subtitle', 'label' => 'Subtitle', 'name' => 'about_timeline_subtitle', 'type' => 'text', 'placeholder' => 'Established in 1968. Still Family-Owned Today.' ),
        array( 'key' => 'field_about_timeline_intro', 'label' => 'Intro Paragraph', 'name' => 'about_timeline_intro', 'type' => 'textarea', 'rows' => 4 ),
        array( 'key' => 'field_about_timeline_image', 'label' => 'Timeline Image', 'name' => 'about_timeline_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium', 'instructions' => 'Upload your full timeline graphic (e.g. story with dates and events).' ),

        array( 'key' => 'field_about_guides_tab', 'label' => 'What Guides Us', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_about_guides_heading', 'label' => 'Section Heading', 'name' => 'about_guides_heading', 'type' => 'text', 'instructions' => 'Shown above the cards.' ),
        array( 'key' => 'field_about_guides_paragraph', 'label' => 'Section Paragraph', 'name' => 'about_guides_paragraph', 'type' => 'textarea', 'rows' => 4, 'instructions' => 'Shown below the heading, above the cards.' ),
        array( 'key' => 'field_about_guides_vision_heading', 'label' => 'Vision – Heading', 'name' => 'about_guides_vision_heading', 'type' => 'text', 'default_value' => 'Vision' ),
        array( 'key' => 'field_about_guides_vision_content', 'label' => 'Vision – Content', 'name' => 'about_guides_vision_content', 'type' => 'wysiwyg', 'tabs' => 'all', 'toolbar' => 'full', 'media_upload' => 0 ),
        array( 'key' => 'field_about_guides_vision_image', 'label' => 'Vision – Background Image', 'name' => 'about_guides_vision_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
        array( 'key' => 'field_about_guides_mission_heading', 'label' => 'Mission – Heading', 'name' => 'about_guides_mission_heading', 'type' => 'text', 'default_value' => 'Mission' ),
        array( 'key' => 'field_about_guides_mission_content', 'label' => 'Mission – Content', 'name' => 'about_guides_mission_content', 'type' => 'wysiwyg', 'tabs' => 'all', 'toolbar' => 'full', 'media_upload' => 0 ),
        array( 'key' => 'field_about_guides_mission_image', 'label' => 'Mission – Background Image', 'name' => 'about_guides_mission_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
        array( 'key' => 'field_about_guides_values_heading', 'label' => 'Values – Heading', 'name' => 'about_guides_values_heading', 'type' => 'text', 'default_value' => 'Values' ),
        array( 'key' => 'field_about_guides_values_content', 'label' => 'Values – Content', 'name' => 'about_guides_values_content', 'type' => 'wysiwyg', 'tabs' => 'all', 'toolbar' => 'full', 'media_upload' => 0 ),
        array( 'key' => 'field_about_guides_values_image', 'label' => 'Values – Background Image', 'name' => 'about_guides_values_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),

        array( 'key' => 'field_about_intro_tab', 'label' => 'Intro Section (styled like Programs)', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_about_intro_heading', 'label' => 'Heading', 'name' => 'about_intro_heading', 'type' => 'text' ),
        array( 'key' => 'field_about_intro_paragraph', 'label' => 'Paragraph', 'name' => 'about_intro_paragraph', 'type' => 'wysiwyg', 'tabs' => 'all', 'toolbar' => 'full', 'media_upload' => 0 ),

        array( 'key' => 'field_about_cta_tab', 'label' => 'CTA Section', 'name' => '', 'type' => 'tab' ),
        array( 'key' => 'field_about_cta_background', 'label' => 'Background Image', 'name' => 'about_cta_background', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
        array( 'key' => 'field_about_cta_heading', 'label' => 'Heading', 'name' => 'about_cta_heading', 'type' => 'text' ),
        array( 'key' => 'field_about_cta_text', 'label' => 'Text', 'name' => 'about_cta_text', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_about_cta_button_text', 'label' => 'Button Text', 'name' => 'about_cta_button_text', 'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
        array( 'key' => 'field_about_cta_button', 'label' => 'Button Link', 'name' => 'about_cta_button', 'type' => 'link', 'wrapper' => array( 'width' => '50' ) ),
    ),
    'location'              => array(
        array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-about.php' ) ),
    ),
    'menu_order'            => 0,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
) );
