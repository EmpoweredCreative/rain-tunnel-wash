<?php
/**
 * Template Part: Services List
 * Service cards: dark blue banner, white content (title, tagline, description, divider, features, button), full-width image.
 *
 * @package RainTunnelWash
 */

$services = get_field('services_list');
$fallback = array(
    array('anchor_id' => 'express', 'name' => 'Express Wash', 'subtitle' => 'Quick & Easy', 'banner_text' => '', 'tagline' => '', 'description' => 'Our fastest option for a clean exterior.', 'features' => array(), 'cta_text' => 'Learn More', 'cta_link' => array('url' => '#'), 'image' => null),
    array('anchor_id' => 'premium', 'name' => 'Premium Wash', 'subtitle' => 'Most Popular', 'banner_text' => '', 'tagline' => '', 'description' => 'Signature wash with premium products.', 'features' => array(), 'cta_text' => 'Learn More', 'cta_link' => array('url' => '#'), 'image' => null),
    array('anchor_id' => 'ultimate', 'name' => 'Ultimate Detail', 'subtitle' => 'Best Value', 'banner_text' => '', 'tagline' => '', 'description' => 'Complete interior and exterior detailing.', 'features' => array(), 'cta_text' => 'Learn More', 'cta_link' => array('url' => '#'), 'image' => null),
    array('anchor_id' => 'soft-touch', 'name' => 'Soft Touch Tunnel', 'subtitle' => 'Gentle Clean', 'banner_text' => '', 'tagline' => 'A fast, thorough wash that gently cleans your vehicle from start to finish.', 'description' => 'Our soft touch tunnel combines effective cleaning with gentle materials to deliver a complete wash you can feel good about.', 'features' => array(), 'cta_text' => 'Learn More About the Soft Touch Tunnel', 'cta_link' => array('url' => '#'), 'image' => null),
    array('anchor_id' => 'touchless', 'name' => 'Touchless Automatic', 'subtitle' => 'No Contact', 'banner_text' => '', 'tagline' => '', 'description' => 'High-pressure wash with no physical contact.', 'features' => array(), 'cta_text' => 'Learn More', 'cta_link' => array('url' => '#'), 'image' => null),
    array('anchor_id' => 'detail', 'name' => 'Full Detail', 'subtitle' => 'Inside & Out', 'banner_text' => '', 'tagline' => '', 'description' => 'Deep clean for interior and exterior.', 'features' => array(), 'cta_text' => 'Learn More', 'cta_link' => array('url' => '#'), 'image' => null),
);
if (empty($services) || !is_array($services)) {
    $services = $fallback;
}
?>

<section class="section section--services-list services-cards">
    <div class="container">
        <div class="services-cards__grid">
            <?php foreach ($services as $index => $service) :
                $anchor_id   = isset($service['anchor_id']) && $service['anchor_id'] !== '' ? $service['anchor_id'] : ('service-' . ($index + 1));
                $slug        = sanitize_title($anchor_id);
                $name        = isset($service['name']) ? $service['name'] : '';
                $tagline     = isset($service['tagline']) ? $service['tagline'] : (isset($service['subtitle']) ? $service['subtitle'] : '');
                $description = isset($service['description']) ? $service['description'] : '';
                $features    = isset($service['features']) && is_array($service['features']) ? $service['features'] : array();
                $show_button = isset($service['show_button']) ? (bool) $service['show_button'] : true;
                $cta_text    = isset($service['cta_text']) ? $service['cta_text'] : 'Learn More';
                $cta_link    = isset($service['cta_link']) && is_array($service['cta_link']) && !empty($service['cta_link']['url']) ? $service['cta_link'] : array('url' => '#', 'target' => '');
                $image       = isset($service['image']) && !empty($service['image']) ? $service['image'] : null;
                $image_url   = $image && is_array($image) ? ($image['url'] ?? '') : $image;
                $banner_text = isset($service['banner_text']) ? trim((string) $service['banner_text']) : '';
            ?>
                <div id="<?php echo esc_attr($slug); ?>" class="service-detail-card animate-on-scroll">
                    <div class="service-detail-card__banner"><?php if ($banner_text) : ?><span class="service-detail-card__banner-text"><?php echo esc_html($banner_text); ?></span><?php endif; ?></div>
                    <div class="service-detail-card__body">
                        <h2 class="service-detail-card__title"><?php echo esc_html($name); ?></h2>
                        <?php if ($tagline) : ?>
                            <p class="service-detail-card__tagline"><?php echo esc_html($tagline); ?></p>
                        <?php endif; ?>
                        <?php if ($description) : ?>
                            <p class="service-detail-card__description"><?php echo esc_html($description); ?></p>
                        <?php endif; ?>
                        <hr class="service-detail-card__divider">
                        <?php if (!empty($features)) : ?>
                            <ul class="service-detail-card__features">
                                <?php foreach ($features as $feature) :
                                    $text     = isset($feature['text']) ? $feature['text'] : '';
                                    $included = isset($feature['included']) ? $feature['included'] : true;
                                    if ($text === '') continue;
                                ?>
                                    <li class="<?php echo $included ? 'included' : 'not-included'; ?>">
                                        <?php if ($included) : ?>
                                            <svg class="service-detail-card__check" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                                        <?php else : ?>
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                                        <?php endif; ?>
                                        <span><?php echo esc_html($text); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if ($show_button) : ?>
                        <div class="service-detail-card__cta">
                            <a href="<?php echo esc_url($cta_link['url']); ?>" class="btn service-detail-card__btn" <?php echo !empty($cta_link['target']) ? ' target="' . esc_attr($cta_link['target']) . '"' : ''; ?>>
                                <?php echo esc_html($cta_text); ?> →
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php if ($image_url) : ?>
                        <div class="service-detail-card__image-wrap">
                            <div class="service-detail-card__image-inner">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($name); ?>" class="service-detail-card__image" loading="lazy">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
