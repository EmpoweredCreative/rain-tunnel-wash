<?php
/**
 * Template Part: Services Page - Heading Section
 * Subtitle, heading, paragraph, two buttons – same styling as home hero.
 *
 * @package RainTunnelWash
 */

$tagline   = get_field('heading_tagline');
$title     = get_field('heading_title');
$paragraph = get_field('heading_paragraph');
$button_1_text = get_field('heading_button_1_text');
$button_1_link = get_field('heading_button_1_link');
$button_2_text = get_field('heading_button_2_text');
$button_2_link = get_field('heading_button_2_link');

$title     = $title ? $title : 'Our Car Wash Services';
$tagline   = $tagline ? $tagline : 'CLEAN. FAST. FRIENDLY.';
$paragraph = $paragraph ? $paragraph : 'Choose from our range of wash options to keep your vehicle looking its best.';
?>

<section class="services-heading">
    <div class="container">
        <div class="services-heading__content home-hero__content">
            <?php if ($tagline) : ?>
                <p class="home-hero__tagline"><?php echo esc_html($tagline); ?></p>
            <?php endif; ?>
            <h1 class="home-hero__title"><?php echo esc_html($title); ?></h1>
            <?php if ($paragraph) : ?>
                <p class="home-hero__description"><?php echo esc_html($paragraph); ?></p>
            <?php endif; ?>
            <div class="home-hero__ctas">
                <?php
                $btn1_url   = ($button_1_link && ! empty($button_1_link['url'])) ? $button_1_link['url'] : '#';
                $btn1_target = ($button_1_link && ! empty($button_1_link['target'])) ? $button_1_link['target'] : '';
                $btn2_url   = ($button_2_link && ! empty($button_2_link['url'])) ? $button_2_link['url'] : '#';
                $btn2_target = ($button_2_link && ! empty($button_2_link['target'])) ? $button_2_link['target'] : '';
                ?>
                <a href="<?php echo esc_url($btn1_url); ?>" class="btn btn--primary" <?php echo $btn1_target ? ' target="' . esc_attr($btn1_target) . '"' : ''; ?>>
                    <?php echo esc_html($button_1_text ? $button_1_text : 'Learn More'); ?>
                </a>
                <a href="<?php echo esc_url($btn2_url); ?>" class="btn btn--secondary" <?php echo $btn2_target ? ' target="' . esc_attr($btn2_target) . '"' : ''; ?>>
                    <?php echo esc_html($button_2_text ? $button_2_text : 'Get Started'); ?>
                </a>
            </div>
        </div>
    </div>
</section>
