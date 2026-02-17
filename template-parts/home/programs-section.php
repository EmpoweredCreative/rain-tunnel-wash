<?php
/**
 * Home Page - Programs Section
 *
 * @package RainTunnelWash
 */

$front_page_id = get_option('page_on_front') ? (int) get_option('page_on_front') : get_the_ID();
$programs_title   = function_exists('get_field') ? get_field('programs_title', $front_page_id) : '';
$programs_subtitle = function_exists('get_field') ? get_field('programs_subtitle', $front_page_id) : '';
$programs_items   = function_exists('get_field') ? get_field('programs_items', $front_page_id) : null;

$section_title    = ! empty($programs_title) ? $programs_title : 'SMART WAYS TO SAVE';
$section_subtitle = ! empty($programs_subtitle) ? $programs_subtitle : 'Programs that reward our customers, as well as local businesses, and give back to the community.';

$programs_fallback = array(
    array(
        'title' => 'WASH CLUB',
        'image' => get_template_directory_uri() . '/assets/images/program-wash-club.jpg',
        'link'  => get_permalink(get_page_by_path('programs')),
    ),
    array(
        'title' => 'FLEET PROGRAM',
        'image' => get_template_directory_uri() . '/assets/images/program-fleet.jpg',
        'link'  => get_permalink(get_page_by_path('programs')),
    ),
    array(
        'title' => 'FUNDRAISERS',
        'image' => get_template_directory_uri() . '/assets/images/program-fundraisers.jpg',
        'link'  => get_permalink(get_page_by_path('programs')),
    ),
);

$programs = array();
if ( ! empty($programs_items) && is_array($programs_items) ) {
    foreach ( $programs_items as $item ) {
        $image_url = '';
        if ( ! empty($item['image']) ) {
            $image_url = is_array($item['image']) ? ( $item['image']['url'] ?? '' ) : $item['image'];
        }
        $programs[] = array(
            'title' => isset($item['title']) ? $item['title'] : '',
            'image' => $image_url ? $image_url : get_template_directory_uri() . '/assets/images/program-wash-club.jpg',
            'link'  => isset($item['link']) ? $item['link'] : get_permalink(get_page_by_path('programs')),
        );
    }
}
if ( empty($programs) ) {
    $programs = $programs_fallback;
}
?>

<section class="home-programs">
    <div class="container">
        <div class="home-programs__header">
            <h2 class="home-programs__title"><?php echo esc_html($section_title); ?></h2>
            <p class="home-programs__subtitle"><?php echo esc_html($section_subtitle); ?></p>
        </div>
        
        <div class="home-programs__grid">
            <?php foreach ($programs as $program) : ?>
                <a href="<?php echo esc_url($program['link']); ?>" class="program-card">
                    <div class="program-card__image">
                        <img src="<?php echo esc_url($program['image']); ?>" 
                             alt="<?php echo esc_attr($program['title']); ?>"
                             loading="lazy">
                        <div class="program-card__overlay">
                            <h3 class="program-card__title"><?php echo esc_html($program['title']); ?></h3>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
