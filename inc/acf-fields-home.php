<?php
/**
 * ACF Fields - Home Page
 *
 * @package RainTunnelWash
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Home Page Field Group
 */
function rtw_register_home_page_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_home_page',
        'title' => 'Home Page Content',
        'fields' => array(
            // ========================================
            // Hero Section Tab
            // ========================================
            array(
                'key' => 'field_home_hero_tab',
                'label' => 'Hero Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_home_hero_badge',
                'label' => 'Badge / Pill (above tagline)',
                'name' => 'hero_badge',
                'type' => 'text',
                'instructions' => 'Optional. Shown above "CLEAN. FAST. FRIENDLY." as a pill. Leave empty to hide.',
                'placeholder' => 'e.g. Now Open',
            ),
            array(
                'key' => 'field_home_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'instructions' => 'Main headline (e.g., "CAR WASH IN CHAMBERSBURG, PA")',
                'default_value' => 'CAR WASH IN CHAMBERSBURG, PA',
            ),
            array(
                'key' => 'field_home_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'text',
                'instructions' => 'Second line headline (e.g., "FAST, CONVENIENT & OPEN 24/7")',
                'default_value' => 'FAST, CONVENIENT & OPEN 24/7',
            ),
            array(
                'key' => 'field_home_hero_description',
                'label' => 'Hero Description',
                'name' => 'hero_description',
                'type' => 'textarea',
                'instructions' => 'Supporting text below the headlines',
                'rows' => 3,
                'default_value' => 'Experience the best car wash in Chambersburg. Our state-of-the-art facilities offer fast, convenient service with exceptional results every time.',
            ),
            array(
                'key' => 'field_home_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'instructions' => 'Background image for the hero section. Use a high-resolution image for a crisp look: at least 1920px wide (2560px or 3840px recommended for retina displays).',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_home_hero_cta1_text',
                'label' => 'Primary Button Text',
                'name' => 'hero_cta1_text',
                'type' => 'text',
                'default_value' => 'Join the Wash Club',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_cta1_link',
                'label' => 'Primary Button Link',
                'name' => 'hero_cta1_link',
                'type' => 'page_link',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_cta2_text',
                'label' => 'Secondary Button Text',
                'name' => 'hero_cta2_text',
                'type' => 'text',
                'default_value' => 'Find a Location',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_cta2_link',
                'label' => 'Secondary Button Link',
                'name' => 'hero_cta2_link',
                'type' => 'page_link',
                'wrapper' => array('width' => '50'),
            ),

            // ========================================
            // Email Signup Bar Tab
            // ========================================
            array(
                'key' => 'field_home_email_tab',
                'label' => 'Email Signup Bar',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_home_email_text',
                'label' => 'Signup Bar Text',
                'name' => 'email_bar_text',
                'type' => 'text',
                'default_value' => 'LOCAL CAR WASH DEALS AND TOP RATED SERVICES AT YOUR FINGERTIPS',
            ),
            array(
                'key' => 'field_home_email_placeholder',
                'label' => 'Email Placeholder Text',
                'name' => 'email_placeholder',
                'type' => 'text',
                'default_value' => 'Enter your email for deals',
            ),

            // ========================================
            // Services Section Tab
            // ========================================
            array(
                'key' => 'field_home_services_tab',
                'label' => 'Services Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_home_services_title',
                'label' => 'Section Title',
                'name' => 'services_title',
                'type' => 'text',
                'default_value' => 'CAR WASH SERVICES FOR EVERY NEED',
            ),
            array(
                'key' => 'field_home_services_subtitle',
                'label' => 'Section Subtitle',
                'name' => 'services_subtitle',
                'type' => 'text',
                'default_value' => 'There\'s something for everyone.',
            ),
            array(
                'key' => 'field_home_services_items',
                'label' => 'Services',
                'name' => 'services_items',
                'type' => 'repeater',
                'instructions' => 'Add up to 6 services to display',
                'min' => 1,
                'max' => 6,
                'layout' => 'block',
                'button_label' => 'Add Service',
                'sub_fields' => array(
                    array(
                        'key' => 'field_service_item_image',
                        'label' => 'Service Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'wrapper' => array('width' => '30'),
                    ),
                    array(
                        'key' => 'field_service_item_title',
                        'label' => 'Service Title',
                        'name' => 'title',
                        'type' => 'text',
                        'wrapper' => array('width' => '70'),
                    ),
                    array(
                        'key' => 'field_service_item_description',
                        'label' => 'Service Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),

            // ========================================
            // Location Strip Tab
            // ========================================
            array(
                'key' => 'field_home_location_tab',
                'label' => 'Location Strip',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_home_location_text',
                'label' => 'Location Strip Text',
                'name' => 'location_strip_text',
                'type' => 'text',
                'default_value' => 'TWO CONVENIENT LOCATIONS IN CHAMBERSBURG, PA',
            ),
            array(
                'key' => 'field_home_location_link_text',
                'label' => 'Link Text',
                'name' => 'location_link_text',
                'type' => 'text',
                'default_value' => 'View All Locations',
            ),

            // ========================================
            // Stats Section Tab
            // ========================================
            array(
                'key' => 'field_home_stats_tab',
                'label' => 'Stats Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_home_stats_title',
                'label' => 'Section Title',
                'name' => 'stats_title',
                'type' => 'text',
                'default_value' => 'A CAR WASH YOU CAN COUNT ON',
            ),
            array(
                'key' => 'field_home_stats_subtitle',
                'label' => 'Section Subtitle',
                'name' => 'stats_subtitle',
                'type' => 'text',
                'default_value' => 'Proudly serving families in and around Chambersburg for decades.',
            ),
            array(
                'key' => 'field_home_stat1_number',
                'label' => 'Stat 1 - Number',
                'name' => 'stat1_number',
                'type' => 'text',
                'default_value' => '4',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_stat1_label',
                'label' => 'Stat 1 - Label',
                'name' => 'stat1_label',
                'type' => 'text',
                'default_value' => 'Generations',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_stat2_prefix',
                'label' => 'Stat 2 - Prefix',
                'name' => 'stat2_prefix',
                'type' => 'text',
                'default_value' => 'Since',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_home_stat2_number',
                'label' => 'Stat 2 - Number',
                'name' => 'stat2_number',
                'type' => 'text',
                'default_value' => '1968',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_home_stat3_number',
                'label' => 'Stat 3 - Number',
                'name' => 'stat3_number',
                'type' => 'text',
                'default_value' => '2',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_stat3_label',
                'label' => 'Stat 3 - Label',
                'name' => 'stat3_label',
                'type' => 'text',
                'default_value' => 'Locations',
                'wrapper' => array('width' => '50'),
            ),

            // ========================================
            // Video Banner Tab
            // ========================================
            array(
                'key' => 'field_home_banner_tab',
                'label' => 'Video Banner',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_home_banner_video',
                'label' => 'Banner Video',
                'name' => 'banner_video',
                'type' => 'file',
                'instructions' => 'Upload an MP4 video for the banner section. Recommended: 1920x500px, under 10MB',
                'return_format' => 'array',
                'mime_types' => 'mp4,webm',
            ),
            array(
                'key' => 'field_home_banner_video_poster',
                'label' => 'Video Poster Image (Fallback)',
                'name' => 'banner_video_poster',
                'type' => 'image',
                'instructions' => 'Optional: Image to show while video loads or on mobile',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),

            // ========================================
            // Programs Section Tab
            // ========================================
            array(
                'key' => 'field_home_programs_tab',
                'label' => 'Programs Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_home_programs_title',
                'label' => 'Section Title',
                'name' => 'programs_title',
                'type' => 'text',
                'default_value' => 'SMART WAYS TO SAVE',
            ),
            array(
                'key' => 'field_home_programs_subtitle',
                'label' => 'Section Subtitle',
                'name' => 'programs_subtitle',
                'type' => 'text',
                'default_value' => 'Programs that reward our customers, as well as local businesses, and give back to the community.',
            ),
            array(
                'key' => 'field_home_programs_items',
                'label' => 'Programs',
                'name' => 'programs_items',
                'type' => 'repeater',
                'instructions' => 'Add up to 3 programs',
                'min' => 1,
                'max' => 3,
                'layout' => 'block',
                'button_label' => 'Add Program',
                'sub_fields' => array(
                    array(
                        'key' => 'field_program_item_image',
                        'label' => 'Program Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'wrapper' => array('width' => '30'),
                    ),
                    array(
                        'key' => 'field_program_item_title',
                        'label' => 'Program Title',
                        'name' => 'title',
                        'type' => 'text',
                        'wrapper' => array('width' => '70'),
                    ),
                    array(
                        'key' => 'field_program_item_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'page_link',
                    ),
                ),
            ),

            // ========================================
            // Testimonials Tab
            // ========================================
            array(
                'key' => 'field_home_testimonials_tab',
                'label' => 'Testimonials',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_home_testimonials_title',
                'label' => 'Section Title',
                'name' => 'testimonials_title',
                'type' => 'text',
                'default_value' => 'LOCAL CUSTOMERS. HONEST FEEDBACK.',
            ),
            array(
                'key' => 'field_home_testimonials_items',
                'label' => 'Testimonials',
                'name' => 'testimonials_items',
                'type' => 'repeater',
                'instructions' => 'Add customer testimonials',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Testimonial',
                'sub_fields' => array(
                    array(
                        'key' => 'field_testimonial_quote',
                        'label' => 'Quote',
                        'name' => 'quote',
                        'type' => 'textarea',
                        'rows' => 3,
                    ),
                    array(
                        'key' => 'field_testimonial_author',
                        'label' => 'Customer Name',
                        'name' => 'author',
                        'type' => 'text',
                        'wrapper' => array('width' => '50'),
                    ),
                    array(
                        'key' => 'field_testimonial_rating',
                        'label' => 'Rating',
                        'name' => 'rating',
                        'type' => 'select',
                        'choices' => array(
                            5 => '5 Stars',
                            4 => '4 Stars',
                            3 => '3 Stars',
                        ),
                        'default_value' => 5,
                        'wrapper' => array('width' => '50'),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
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
add_action('acf/init', 'rtw_register_home_page_fields');
