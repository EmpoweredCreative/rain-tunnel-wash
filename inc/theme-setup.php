<?php
/**
 * Theme Setup
 *
 * Register theme supports, menus, image sizes, and other core functionality.
 *
 * @package RainTunnelWash
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function rtw_theme_setup() {
    /*
     * Make theme available for translation.
     */
    load_theme_textdomain('raintunnelwash', RTW_THEME_DIR . '/languages');

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support('post-thumbnails');

    /*
     * Add custom image sizes
     */
    add_image_size('hero', 1920, 1080, true);      // Hero images
    add_image_size('card', 600, 400, true);        // Service/program cards
    add_image_size('team', 400, 400, true);        // Team member photos
    add_image_size('gallery', 800, 600, true);     // Gallery images
    add_image_size('thumbnail-square', 300, 300, true);

    /*
     * Register Navigation Menus
     */
    register_nav_menus(array(
        'primary'          => esc_html__('Primary Menu', 'raintunnelwash'),
        'footer'           => esc_html__('Footer Menu', 'raintunnelwash'),
        'footer-services'  => esc_html__('Footer Services Menu', 'raintunnelwash'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    /*
     * Add support for core custom logo.
     */
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    /*
     * Add support for responsive embeds.
     */
    add_theme_support('responsive-embeds');

    /*
     * Add support for editor styles.
     */
    add_theme_support('editor-styles');

    /*
     * Add support for wide and full alignment in Gutenberg.
     */
    add_theme_support('align-wide');

    /*
     * Disable custom colors in the block editor (enforce brand colors)
     */
    add_theme_support('disable-custom-colors');

    /*
     * Add custom editor color palette (Rain Tunnel Wash Brand Colors)
     */
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => esc_html__('Brand Blue', 'raintunnelwash'),
            'slug'  => 'primary',
            'color' => '#1e6fa8',
        ),
        array(
            'name'  => esc_html__('Brand Navy', 'raintunnelwash'),
            'slug'  => 'secondary',
            'color' => '#0f3c5c',
        ),
        array(
            'name'  => esc_html__('Dark', 'raintunnelwash'),
            'slug'  => 'dark',
            'color' => '#0f3c5c',
        ),
        array(
            'name'  => esc_html__('Light Gray', 'raintunnelwash'),
            'slug'  => 'light',
            'color' => '#f2f4f5',
        ),
        array(
            'name'  => esc_html__('White', 'raintunnelwash'),
            'slug'  => 'white',
            'color' => '#ffffff',
        ),
    ));
}
add_action('after_setup_theme', 'rtw_theme_setup');

/**
 * Ensure the Services menu item in the primary nav always links to the Services page.
 */
function rtw_primary_menu_services_link($items, $args) {
    if (empty($args->theme_location) || $args->theme_location !== 'primary') {
        return $items;
    }
    $services_page_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('services') : 0;
    if (!$services_page_id) {
        return $items;
    }
    $services_url = get_permalink($services_page_id);
    if (!$services_url) {
        return $items;
    }
    foreach ($items as $item) {
        $title = is_object($item) && isset($item->title) ? trim($item->title) : '';
        if (strtolower($title) === 'services') {
            $item->url = $services_url;
            break;
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'rtw_primary_menu_services_link', 10, 2);

/**
 * Ensure the Programs menu item in the primary nav always links to the Programs page.
 */
function rtw_primary_menu_programs_link($items, $args) {
    if (empty($args->theme_location) || $args->theme_location !== 'primary') {
        return $items;
    }
    $programs_page_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('programs') : 0;
    if (!$programs_page_id) {
        return $items;
    }
    $programs_url = get_permalink($programs_page_id);
    if (!$programs_url) {
        return $items;
    }
    foreach ($items as $item) {
        $title = is_object($item) && isset($item->title) ? trim($item->title) : '';
        if (strtolower($title) === 'programs') {
            $item->url = $programs_url;
            break;
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'rtw_primary_menu_programs_link', 10, 2);

/**
 * Ensure the Locations menu item in the primary nav always links to the Locations page.
 */
function rtw_primary_menu_locations_link($items, $args) {
    if (empty($args->theme_location) || $args->theme_location !== 'primary') {
        return $items;
    }
    $locations_page_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('locations') : 0;
    if (!$locations_page_id) {
        return $items;
    }
    $locations_url = get_permalink($locations_page_id);
    if (!$locations_url) {
        return $items;
    }
    foreach ($items as $item) {
        $title = is_object($item) && isset($item->title) ? trim($item->title) : '';
        if (strtolower($title) === 'locations') {
            $item->url = $locations_url;
            break;
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'rtw_primary_menu_locations_link', 10, 2);

/**
 * Ensure the Contact menu item in the primary nav always links to the Contact page.
 */
function rtw_primary_menu_contact_link($items, $args) {
    if (empty($args->theme_location) || $args->theme_location !== 'primary') {
        return $items;
    }
    $contact_page_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('contact') : 0;
    if (!$contact_page_id) {
        return $items;
    }
    $contact_url = get_permalink($contact_page_id);
    if (!$contact_url) {
        return $items;
    }
    foreach ($items as $item) {
        $title = is_object($item) && isset($item->title) ? trim($item->title) : '';
        if (strtolower($title) === 'contact') {
            $item->url = $contact_url;
            break;
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'rtw_primary_menu_contact_link', 10, 2);

/**
 * Ensure the Who We Are menu item in the primary nav always links to the About page.
 */
function rtw_primary_menu_about_link($items, $args) {
    if (empty($args->theme_location) || $args->theme_location !== 'primary') {
        return $items;
    }
    $about_page_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('who-we-are') : 0;
    if (!$about_page_id) {
        return $items;
    }
    $about_url = get_permalink($about_page_id);
    if (!$about_url) {
        return $items;
    }
    foreach ($items as $item) {
        $title = is_object($item) && isset($item->title) ? trim($item->title) : '';
        $title_lower = strtolower($title);
        if ($title_lower === 'who we are' || $title_lower === 'about') {
            $item->url = $about_url;
            break;
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'rtw_primary_menu_about_link', 10, 2);

/**
 * Add Locations page children as submenu items under Locations in the primary nav.
 */
function rtw_primary_menu_locations_children($items, $args) {
    if (empty($args->theme_location) || $args->theme_location !== 'primary') {
        return $items;
    }
    $locations_page_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('locations') : 0;
    if (!$locations_page_id) {
        return $items;
    }
    $children = get_pages(array(
        'parent'      => $locations_page_id,
        'sort_column' => 'menu_order,post_title',
        'post_status' => 'publish',
    ));
    if (empty($children)) {
        return $items;
    }
    $locations_menu_id = null;
    foreach ($items as $item) {
        if (!is_object($item)) continue;
        $oid = isset($item->object_id) ? (int) $item->object_id : 0;
        $title = isset($item->title) ? trim($item->title) : '';
        if ($oid === (int) $locations_page_id || strtolower($title) === 'locations') {
            $locations_menu_id = (int) $item->ID;
            break;
        }
    }
    if ($locations_menu_id === null) {
        return $items;
    }
    $new_items = array();
    $injected_id = -2000;
    foreach ($items as $item) {
        if ((int) $item->ID === $locations_menu_id) {
            if (!isset($item->classes) || !is_array($item->classes)) {
                $item->classes = array();
            }
            if (!in_array('menu-item-has-children', $item->classes, true)) {
                $item->classes[] = 'menu-item-has-children';
            }
        }
        $new_items[] = $item;
        if ((int) $item->ID === $locations_menu_id) {
            foreach ($children as $child) {
                $sub = new stdClass();
                $sub->ID = $injected_id--;
                $sub->db_id = $sub->ID;
                $sub->menu_item_parent = $locations_menu_id;
                $sub->object_id = (int) $child->ID;
                $sub->object = 'page';
                $sub->type = 'post_type';
                $sub->title = $child->post_title;
                $sub->url = get_permalink($child->ID);
                $sub->target = '';
                $sub->attr_title = '';
                $sub->description = '';
                $sub->classes = array();
                $sub->xfn = '';
                $sub->current = (int) get_queried_object_id() === (int) $child->ID;
                $new_items[] = $sub;
            }
        }
    }
    return $new_items;
}
add_filter('wp_nav_menu_objects', 'rtw_primary_menu_locations_children', 20, 2);

/**
 * Add Programs page children as submenu items under Programs in the primary nav.
 * Works for both custom menus (injects children) and fallback (see rtw_fallback_menu).
 */
function rtw_primary_menu_programs_children($items, $args) {
    if (empty($args->theme_location) || $args->theme_location !== 'primary') {
        return $items;
    }
    $programs_page_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('programs') : 0;
    if (!$programs_page_id) {
        return $items;
    }
    $children = get_pages(array(
        'parent'      => $programs_page_id,
        'sort_column' => 'menu_order,post_title',
        'post_status' => 'publish',
    ));
    if (empty($children)) {
        return $items;
    }
    $programs_menu_id = null;
    foreach ($items as $item) {
        if (!is_object($item)) continue;
        $oid = isset($item->object_id) ? (int) $item->object_id : 0;
        $title = isset($item->title) ? trim($item->title) : '';
        if ($oid === (int) $programs_page_id || strtolower($title) === 'programs') {
            $programs_menu_id = (int) $item->ID;
            break;
        }
    }
    if ($programs_menu_id === null) {
        return $items;
    }
    $new_items = array();
    $injected_id = -1000;
    foreach ($items as $item) {
        if ((int) $item->ID === $programs_menu_id) {
            if (!isset($item->classes) || !is_array($item->classes)) {
                $item->classes = array();
            }
            if (!in_array('menu-item-has-children', $item->classes, true)) {
                $item->classes[] = 'menu-item-has-children';
            }
        }
        $new_items[] = $item;
        if ((int) $item->ID === $programs_menu_id) {
            foreach ($children as $child) {
                $sub = new stdClass();
                $sub->ID = $injected_id--;
                $sub->db_id = $sub->ID;
                $sub->menu_item_parent = $programs_menu_id;
                $sub->object_id = (int) $child->ID;
                $sub->object = 'page';
                $sub->type = 'post_type';
                $sub->title = $child->post_title;
                $sub->url = get_permalink($child->ID);
                $sub->target = '';
                $sub->attr_title = '';
                $sub->description = '';
                $sub->classes = array();
                $sub->xfn = '';
                $sub->current = (int) get_queried_object_id() === (int) $child->ID;
                $new_items[] = $sub;
            }
        }
    }
    return $new_items;
}
add_filter('wp_nav_menu_objects', 'rtw_primary_menu_programs_children', 20, 2);

/**
 * Add Services page children as submenu items under Services in the primary nav.
 * Works for both custom menus (injects children) and fallback (see rtw_fallback_menu).
 */
function rtw_primary_menu_services_children($items, $args) {
    if (empty($args->theme_location) || $args->theme_location !== 'primary') {
        return $items;
    }
    $services_page_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('services') : 0;
    if (!$services_page_id) {
        return $items;
    }
    $children = get_pages(array(
        'parent'      => $services_page_id,
        'sort_column' => 'menu_order,post_title',
        'post_status' => 'publish',
    ));
    if (empty($children)) {
        return $items;
    }
    $services_menu_id = null;
    foreach ($items as $item) {
        if (!is_object($item)) continue;
        $oid = isset($item->object_id) ? (int) $item->object_id : 0;
        $title = isset($item->title) ? trim($item->title) : '';
        if ($oid === (int) $services_page_id || strtolower($title) === 'services') {
            $services_menu_id = (int) $item->ID;
            break;
        }
    }
    if ($services_menu_id === null) {
        return $items;
    }
    $new_items = array();
    $injected_id = -1;
    foreach ($items as $item) {
        if ((int) $item->ID === $services_menu_id) {
            if (!isset($item->classes) || !is_array($item->classes)) {
                $item->classes = array();
            }
            if (!in_array('menu-item-has-children', $item->classes, true)) {
                $item->classes[] = 'menu-item-has-children';
            }
        }
        $new_items[] = $item;
        if ((int) $item->ID === $services_menu_id) {
            foreach ($children as $child) {
                $sub = new stdClass();
                $sub->ID = $injected_id--;
                $sub->db_id = $sub->ID;
                $sub->menu_item_parent = $services_menu_id;
                $sub->object_id = (int) $child->ID;
                $sub->object = 'page';
                $sub->type = 'post_type';
                $sub->title = $child->post_title;
                $sub->url = get_permalink($child->ID);
                $sub->target = '';
                $sub->attr_title = '';
                $sub->description = '';
                $sub->classes = array();
                $sub->xfn = '';
                $sub->current = (int) get_queried_object_id() === (int) $child->ID;
                $new_items[] = $sub;
            }
        }
    }
    return $new_items;
}
add_filter('wp_nav_menu_objects', 'rtw_primary_menu_services_children', 20, 2);

/**
 * Return the first published page that uses the FAQ template (for submenu under Who we are).
 */
function rtw_get_faq_page_id() {
    $query = new WP_Query(array(
        'post_type'      => 'page',
        'post_status'    => 'publish',
        'posts_per_page' => 1,
        'meta_query'     => array(array(
            'key'   => '_wp_page_template',
            'value' => 'page-faq.php',
        )),
        'fields'         => 'ids',
    ));
    if (!empty($query->posts)) {
        return (int) $query->posts[0];
    }
    return 0;
}

/**
 * Add FAQ page as submenu item under "Who we are" (About) in the primary nav.
 */
function rtw_primary_menu_about_children($items, $args) {
    if (empty($args->theme_location) || $args->theme_location !== 'primary') {
        return $items;
    }
    $about_page_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('who-we-are') : 0;
    $faq_page_id   = function_exists('rtw_get_faq_page_id') ? rtw_get_faq_page_id() : 0;
    if (!$about_page_id || !$faq_page_id) {
        return $items;
    }
    $about_menu_id = null;
    foreach ($items as $item) {
        if (!is_object($item)) continue;
        $oid = isset($item->object_id) ? (int) $item->object_id : 0;
        $title = isset($item->title) ? trim($item->title) : '';
        if ($oid === (int) $about_page_id || strtolower($title) === 'who we are' || strtolower($title) === 'about') {
            $about_menu_id = (int) $item->ID;
            break;
        }
    }
    if ($about_menu_id === null) {
        return $items;
    }
    $faq_page = get_post($faq_page_id);
    if (!$faq_page || $faq_page->post_status !== 'publish') {
        return $items;
    }
    $new_items = array();
    $injected_id = -2000;
    foreach ($items as $item) {
        if ((int) $item->ID === $about_menu_id) {
            if (!isset($item->classes) || !is_array($item->classes)) {
                $item->classes = array();
            }
            if (!in_array('menu-item-has-children', $item->classes, true)) {
                $item->classes[] = 'menu-item-has-children';
            }
        }
        $new_items[] = $item;
        if ((int) $item->ID === $about_menu_id) {
            $sub = new stdClass();
            $sub->ID = $injected_id;
            $sub->db_id = $sub->ID;
            $sub->menu_item_parent = $about_menu_id;
            $sub->object_id = (int) $faq_page_id;
            $sub->object = 'page';
            $sub->type = 'post_type';
            $sub->title = $faq_page->post_title;
            $sub->url = get_permalink($faq_page_id);
            $sub->target = '';
            $sub->attr_title = '';
            $sub->description = '';
            $sub->classes = array();
            $sub->xfn = '';
            $sub->current = (int) get_queried_object_id() === (int) $faq_page_id;
            $new_items[] = $sub;
        }
    }
    return $new_items;
}
add_filter('wp_nav_menu_objects', 'rtw_primary_menu_about_children', 20, 2);

/**
 * Fallback primary menu (desktop): includes Services with submenu of child pages.
 */
function rtw_fallback_menu() {
    $services_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('services') : 0;
    $services_url = $services_id ? get_permalink($services_id) : home_url('/');
    $children = $services_id ? get_pages(array(
        'parent'      => $services_id,
        'sort_column' => 'menu_order,post_title',
        'post_status' => 'publish',
    )) : array();

    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">HOME</a></li>';

    if ($children) {
        echo '<li class="menu-item-has-children"><a href="' . esc_url($services_url) . '">SERVICES</a>';
        echo '<ul class="sub-menu">';
        foreach ($children as $child) {
            echo '<li><a href="' . esc_url(get_permalink($child->ID)) . '">' . esc_html($child->post_title) . '</a></li>';
        }
        echo '</ul></li>';
    } else {
        echo '<li><a href="' . esc_url($services_url) . '">SERVICES</a></li>';
    }

    $programs_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('programs') : 0;
    $programs_url = $programs_id ? get_permalink($programs_id) : home_url('/');
    $programs_children = $programs_id ? get_pages(array(
        'parent'      => $programs_id,
        'sort_column' => 'menu_order,post_title',
        'post_status' => 'publish',
    )) : array();
    if ($programs_children) {
        echo '<li class="menu-item-has-children"><a href="' . esc_url($programs_url) . '">PROGRAMS</a>';
        echo '<ul class="sub-menu">';
        foreach ($programs_children as $child) {
            echo '<li><a href="' . esc_url(get_permalink($child->ID)) . '">' . esc_html($child->post_title) . '</a></li>';
        }
        echo '</ul></li>';
    } else {
        echo '<li><a href="' . esc_url($programs_url) . '">PROGRAMS</a></li>';
    }

    $locations_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('locations') : 0;
    $locations_url = $locations_id ? get_permalink($locations_id) : home_url('/');
    $locations_children = $locations_id ? get_pages(array(
        'parent'      => $locations_id,
        'sort_column' => 'menu_order,post_title',
        'post_status' => 'publish',
    )) : array();
    if ($locations_children) {
        echo '<li class="menu-item-has-children"><a href="' . esc_url($locations_url) . '">LOCATIONS</a>';
        echo '<ul class="sub-menu">';
        foreach ($locations_children as $child) {
            echo '<li><a href="' . esc_url(get_permalink($child->ID)) . '">' . esc_html($child->post_title) . '</a></li>';
        }
        echo '</ul></li>';
    } else {
        echo '<li><a href="' . esc_url($locations_url) . '">LOCATIONS</a></li>';
    }

    $about_url = get_permalink(get_page_by_path('who-we-are'));
    $faq_id = function_exists('rtw_get_faq_page_id') ? rtw_get_faq_page_id() : 0;
    if ($faq_id) {
        echo '<li class="menu-item-has-children"><a href="' . esc_url($about_url) . '">WHO WE ARE</a>';
        echo '<ul class="sub-menu">';
        echo '<li><a href="' . esc_url(get_permalink($faq_id)) . '">' . esc_html(get_the_title($faq_id)) . '</a></li>';
        echo '</ul></li>';
    } else {
        echo '<li><a href="' . esc_url($about_url) . '">WHO WE ARE</a></li>';
    }
    echo '<li><a href="' . esc_url(get_permalink(get_page_by_path('contact'))) . '">CONTACT</a></li>';
    echo '</ul>';
}

/**
 * Fallback primary menu (mobile): includes Services with submenu of child pages.
 */
function rtw_fallback_mobile_menu() {
    $services_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('services') : 0;
    $services_url = $services_id ? get_permalink($services_id) : home_url('/');
    $children = $services_id ? get_pages(array(
        'parent'      => $services_id,
        'sort_column' => 'menu_order,post_title',
        'post_status' => 'publish',
    )) : array();

    echo '<ul class="mobile-nav-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">HOME</a></li>';

    if ($children) {
        echo '<li class="menu-item-has-children"><a href="' . esc_url($services_url) . '">SERVICES</a>';
        echo '<ul class="sub-menu">';
        foreach ($children as $child) {
            echo '<li><a href="' . esc_url(get_permalink($child->ID)) . '">' . esc_html($child->post_title) . '</a></li>';
        }
        echo '</ul></li>';
    } else {
        echo '<li><a href="' . esc_url($services_url) . '">SERVICES</a></li>';
    }

    $programs_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('programs') : 0;
    $programs_url = $programs_id ? get_permalink($programs_id) : home_url('/');
    $programs_children = $programs_id ? get_pages(array(
        'parent'      => $programs_id,
        'sort_column' => 'menu_order,post_title',
        'post_status' => 'publish',
    )) : array();
    if ($programs_children) {
        echo '<li class="menu-item-has-children"><a href="' . esc_url($programs_url) . '">PROGRAMS</a>';
        echo '<ul class="sub-menu">';
        foreach ($programs_children as $child) {
            echo '<li><a href="' . esc_url(get_permalink($child->ID)) . '">' . esc_html($child->post_title) . '</a></li>';
        }
        echo '</ul></li>';
    } else {
        echo '<li><a href="' . esc_url($programs_url) . '">PROGRAMS</a></li>';
    }

    $locations_id = function_exists('rtw_get_page_id_by_slug') ? rtw_get_page_id_by_slug('locations') : 0;
    $locations_url = $locations_id ? get_permalink($locations_id) : home_url('/');
    $locations_children = $locations_id ? get_pages(array(
        'parent'      => $locations_id,
        'sort_column' => 'menu_order,post_title',
        'post_status' => 'publish',
    )) : array();
    if ($locations_children) {
        echo '<li class="menu-item-has-children"><a href="' . esc_url($locations_url) . '">LOCATIONS</a>';
        echo '<ul class="sub-menu">';
        foreach ($locations_children as $child) {
            echo '<li><a href="' . esc_url(get_permalink($child->ID)) . '">' . esc_html($child->post_title) . '</a></li>';
        }
        echo '</ul></li>';
    } else {
        echo '<li><a href="' . esc_url($locations_url) . '">LOCATIONS</a></li>';
    }

    $about_url = get_permalink(get_page_by_path('who-we-are'));
    $faq_id = function_exists('rtw_get_faq_page_id') ? rtw_get_faq_page_id() : 0;
    if ($faq_id) {
        echo '<li class="menu-item-has-children"><a href="' . esc_url($about_url) . '">WHO WE ARE</a>';
        echo '<ul class="sub-menu">';
        echo '<li><a href="' . esc_url(get_permalink($faq_id)) . '">' . esc_html(get_the_title($faq_id)) . '</a></li>';
        echo '</ul></li>';
    } else {
        echo '<li><a href="' . esc_url($about_url) . '">WHO WE ARE</a></li>';
    }
    echo '<li><a href="' . esc_url(get_permalink(get_page_by_path('contact'))) . '">CONTACT</a></li>';
    echo '</ul>';
}

/**
 * Use higher image quality so uploads don't look grainy on the site.
 * WordPress defaults to 82% JPEG quality when generating image sizes.
 */
function rtw_image_quality($quality) {
    return 92;
}
add_filter('jpeg_quality', 'rtw_image_quality');
add_filter('wp_editor_set_quality', 'rtw_image_quality');

/**
 * Keep high-resolution uploads at full size instead of scaling down.
 * WordPress 5.3+ scales images over 2560px and re-saves at default quality, which can make them look grainy.
 */
function rtw_big_image_size_threshold($threshold) {
    return 4096;
}
add_filter('big_image_size_threshold', 'rtw_big_image_size_threshold');

/**
 * Register widget areas.
 */
function rtw_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'raintunnelwash'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here for the sidebar.', 'raintunnelwash'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'rtw_widgets_init');

/**
 * Add custom body classes
 */
function rtw_body_classes($classes) {
    // Add page slug as body class
    if (is_page()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
        if ($post && get_page_template_slug($post->ID) === 'page-service-single.php') {
            $classes[] = 'page-service-single';
        }
        if ($post && get_page_template_slug($post->ID) === 'page-program-single.php') {
            $classes[] = 'page-program-single';
        }
        if ($post && get_page_template_slug($post->ID) === 'page-program-single-gives.php') {
            $classes[] = 'page-program-single-gives';
        }
        if ($post && get_page_template_slug($post->ID) === 'page-locations.php') {
            $classes[] = 'page-locations';
        }
        if ($post && get_page_template_slug($post->ID) === 'page-location-single.php') {
            $classes[] = 'page-location-single';
        }
        if ($post && get_page_template_slug($post->ID) === 'page-faq.php') {
            $classes[] = 'page-faq';
        }
    }

    // Add class if no sidebar
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter('body_class', 'rtw_body_classes');

/**
 * Modify excerpt length
 */
function rtw_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'rtw_excerpt_length');

/**
 * Modify excerpt more string
 */
function rtw_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'rtw_excerpt_more');

/**
 * Allow SVG uploads
 */
function rtw_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'rtw_mime_types');

/**
 * Disable Gutenberg for pages (ACF handles page content)
 */
function rtw_disable_gutenberg_for_pages($use_block_editor, $post_type) {
    if ($post_type === 'page') {
        return false;
    }
    return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'rtw_disable_gutenberg_for_pages', 10, 2);

/**
 * Remove WordPress emoji scripts
 */
function rtw_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'rtw_disable_emojis');
