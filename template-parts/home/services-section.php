<?php
/**
 * Home Page - Services Section
 *
 * @package RainTunnelWash
 */

// Get ACF fields from front page (static front page or current post)
$front_page_id = get_option('page_on_front') ? (int) get_option('page_on_front') : get_the_ID();
$services_title   = function_exists('get_field') ? get_field('services_title', $front_page_id) : '';
$services_subtitle = function_exists('get_field') ? get_field('services_subtitle', $front_page_id) : '';
$services_items   = function_exists('get_field') ? get_field('services_items', $front_page_id) : null;

// Fallbacks for title/subtitle
$section_title    = ! empty($services_title) ? $services_title : 'CAR WASH SERVICES FOR EVERY NEED';
$section_subtitle = ! empty($services_subtitle) ? $services_subtitle : 'Simple options. Done right.';

// Fallback service items if ACF is empty or not used
$fallback_services = array(
    array(
        'title' => 'SOFT TOUCH TUNNEL',
        'description' => 'Our gentle soft touch tunnel wash delivers a thorough clean while being easy on your vehicle\'s finish.',
        'image' => get_template_directory_uri() . '/assets/images/service-soft-touch.jpg',
    ),
    array(
        'title' => 'TOUCHLESS AUTOMATIC',
        'description' => 'High-pressure water and specially formulated detergents clean your car without any physical contact.',
        'image' => get_template_directory_uri() . '/assets/images/service-touchless.jpg',
    ),
);
$services = ! empty($services_items) && is_array($services_items) ? $services_items : $fallback_services;
?>

<section class="home-services">
    <div class="container">
        <div class="home-services__header">
            <h2 class="home-services__title"><?php echo esc_html($section_title); ?></h2>
            <p class="home-services__subtitle"><?php echo esc_html($section_subtitle); ?></p>
        </div>
        
        <div class="home-services__grid">
            <?php foreach ($services as $service) : ?>
                <?php
                // ACF image is array (url, sizes, etc.); fallback may be string URL
                $image_url = '';
                if ( ! empty($service['image']) ) {
                    $image_url = is_array($service['image']) ? ($service['image']['url'] ?? '') : $service['image'];
                }
                $image_url = $image_url ? $image_url : get_template_directory_uri() . '/assets/images/service-soft-touch.jpg';
                $title     = isset($service['title']) ? $service['title'] : '';
                $desc      = isset($service['description']) ? $service['description'] : '';
                ?>
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="<?php echo esc_url($image_url); ?>" 
                             alt="<?php echo esc_attr($title); ?>"
                             loading="lazy">
                    </div>
                    <div class="service-card__content">
                        <h3 class="service-card__title"><?php echo esc_html($title); ?></h3>
                        <p class="service-card__description"><?php echo esc_html($desc); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
