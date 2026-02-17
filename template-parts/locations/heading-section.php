<?php
/**
 * Template Part: Locations Page - Heading Section
 * Below hero image: page title, subtitle, paragraph, two buttons – same layout as Services/Programs heading.
 *
 * @package RainTunnelWash
 */

$title     = get_field('hero_headline');
$subtitle  = get_field('hero_subtitle');
$paragraph = get_field('hero_paragraph');
$btn1_text = get_field('hero_button_1_text');
$btn1_link = get_field('hero_button_1_link');
$btn2_text = get_field('hero_button_2_text');
$btn2_link = get_field('hero_button_2_link');

$title     = $title ? $title : 'Our Locations';
$subtitle  = $subtitle ? $subtitle : '';
$paragraph = $paragraph ? $paragraph : '';

$btn1_url = $btn1_link && !empty($btn1_link['url']) ? $btn1_link['url'] : '#';
$btn1_target = $btn1_link && !empty($btn1_link['target']) ? $btn1_link['target'] : '';
$btn2_url = $btn2_link && !empty($btn2_link['url']) ? $btn2_link['url'] : '#';
$btn2_target = $btn2_link && !empty($btn2_link['target']) ? $btn2_link['target'] : '';
?>

<section class="locations-heading">
    <div class="container">
        <div class="locations-heading__content home-hero__content">
            <?php if ($subtitle) : ?>
                <p class="home-hero__tagline"><?php echo esc_html($subtitle); ?></p>
            <?php endif; ?>
            <h1 class="home-hero__title"><?php echo esc_html($title); ?></h1>
            <?php if ($paragraph) : ?>
                <p class="home-hero__description"><?php echo esc_html($paragraph); ?></p>
            <?php endif; ?>
            <?php if ($btn1_text || $btn2_text) : ?>
                <div class="home-hero__ctas locations-heading__ctas">
                    <?php if ($btn1_text) : ?>
                        <a href="<?php echo esc_url($btn1_url); ?>" class="btn btn--outline locations-heading__btn"<?php echo $btn1_target ? ' target="' . esc_attr($btn1_target) . '"' : ''; ?>><?php echo esc_html($btn1_text); ?></a>
                    <?php endif; ?>
                    <?php if ($btn2_text) : ?>
                        <a href="<?php echo esc_url($btn2_url); ?>" class="btn btn--outline locations-heading__btn"<?php echo $btn2_target ? ' target="' . esc_attr($btn2_target) . '"' : ''; ?>><?php echo esc_html($btn2_text); ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
