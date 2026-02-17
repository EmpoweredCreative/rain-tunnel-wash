<?php
/**
 * ACF Options Page
 *
 * Register ACF Options pages and define global site-wide fields.
 *
 * @package RainTunnelWash
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register ACF Options Pages
 */
function rtw_register_options_pages() {
    if (!function_exists('acf_add_options_page')) {
        return;
    }

    // Main Options Page
    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-options',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => 'dashicons-admin-customizer',
        'position'      => 59,
    ));

    // Sub-pages for organization
    acf_add_options_sub_page(array(
        'page_title'    => 'Contact Information',
        'menu_title'    => 'Contact Info',
        'parent_slug'   => 'theme-options',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Social Media Links',
        'menu_title'    => 'Social Media',
        'parent_slug'   => 'theme-options',
    ));
}
add_action('acf/init', 'rtw_register_options_pages');

/**
 * Register Global Options Field Group
 */
function rtw_register_global_options_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    // Site Identity Fields
    acf_add_local_field_group(array(
        'key' => 'group_site_identity',
        'title' => 'Site Identity',
        'fields' => array(
            array(
                'key' => 'field_site_logo',
                'label' => 'Site Logo',
                'name' => 'site_logo',
                'type' => 'image',
                'instructions' => 'Upload your main site logo. Recommended size: 300x100px',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => 'field_footer_logo',
                'label' => 'Footer Logo',
                'name' => 'footer_logo',
                'type' => 'image',
                'instructions' => 'Optional: Upload a different logo for the footer (e.g., white version)',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => 'field_footer_text',
                'label' => 'Footer Tagline',
                'name' => 'footer_text',
                'type' => 'text',
                'instructions' => 'Short tagline to display in the footer',
                'placeholder' => 'Your trusted car wash since 2010',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-options',
                ),
            ),
        ),
        'menu_order' => 0,
    ));

    // Contact Information Fields
    acf_add_local_field_group(array(
        'key' => 'group_contact_info',
        'title' => 'Contact Information',
        'fields' => array(
            array(
                'key' => 'field_phone_number',
                'label' => 'Phone Number',
                'name' => 'phone_number',
                'type' => 'text',
                'instructions' => 'Main contact phone number',
                'placeholder' => '(555) 123-4567',
            ),
            array(
                'key' => 'field_email_address',
                'label' => 'Email Address',
                'name' => 'email_address',
                'type' => 'email',
                'instructions' => 'Main contact email address',
                'placeholder' => 'info@raintunnelwash.com',
            ),
            array(
                'key' => 'field_address',
                'label' => 'Address',
                'name' => 'address',
                'type' => 'textarea',
                'instructions' => 'Main business address',
                'rows' => 3,
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_business_hours',
                'label' => 'Business Hours',
                'name' => 'business_hours',
                'type' => 'repeater',
                'instructions' => 'Set your regular business hours',
                'layout' => 'table',
                'button_label' => 'Add Day',
                'sub_fields' => array(
                    array(
                        'key' => 'field_hours_day',
                        'label' => 'Day',
                        'name' => 'day',
                        'type' => 'text',
                        'wrapper' => array('width' => '30'),
                    ),
                    array(
                        'key' => 'field_hours_open',
                        'label' => 'Open',
                        'name' => 'open',
                        'type' => 'text',
                        'wrapper' => array('width' => '25'),
                        'placeholder' => '7:00 AM',
                    ),
                    array(
                        'key' => 'field_hours_close',
                        'label' => 'Close',
                        'name' => 'close',
                        'type' => 'text',
                        'wrapper' => array('width' => '25'),
                        'placeholder' => '8:00 PM',
                    ),
                    array(
                        'key' => 'field_hours_closed',
                        'label' => 'Closed?',
                        'name' => 'closed',
                        'type' => 'true_false',
                        'wrapper' => array('width' => '20'),
                        'ui' => 1,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-contact-info',
                ),
            ),
        ),
        'menu_order' => 1,
    ));

    // Social Media Fields
    acf_add_local_field_group(array(
        'key' => 'group_social_media',
        'title' => 'Social Media Links',
        'fields' => array(
            array(
                'key' => 'field_facebook_url',
                'label' => 'Facebook',
                'name' => 'facebook_url',
                'type' => 'url',
                'instructions' => 'Full URL to your Facebook page',
                'placeholder' => 'https://facebook.com/raintunnelwash',
            ),
            array(
                'key' => 'field_instagram_url',
                'label' => 'Instagram',
                'name' => 'instagram_url',
                'type' => 'url',
                'instructions' => 'Full URL to your Instagram profile',
                'placeholder' => 'https://instagram.com/raintunnelwash',
            ),
            array(
                'key' => 'field_twitter_url',
                'label' => 'Twitter / X',
                'name' => 'twitter_url',
                'type' => 'url',
                'instructions' => 'Full URL to your Twitter/X profile',
                'placeholder' => 'https://x.com/raintunnelwash',
            ),
            array(
                'key' => 'field_youtube_url',
                'label' => 'YouTube',
                'name' => 'youtube_url',
                'type' => 'url',
                'instructions' => 'Full URL to your YouTube channel',
                'placeholder' => 'https://youtube.com/@raintunnelwash',
            ),
            array(
                'key' => 'field_google_business_url',
                'label' => 'Google Business',
                'name' => 'google_business_url',
                'type' => 'url',
                'instructions' => 'Full URL to your Google Business profile',
            ),
            array(
                'key' => 'field_yelp_url',
                'label' => 'Yelp',
                'name' => 'yelp_url',
                'type' => 'url',
                'instructions' => 'Full URL to your Yelp business page',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-social-media',
                ),
            ),
        ),
        'menu_order' => 2,
    ));
}
add_action('acf/init', 'rtw_register_global_options_fields');
