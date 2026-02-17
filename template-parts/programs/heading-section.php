<?php
/**
 * Template Part: Programs Page - Heading Section
 * Hero text below hero image – same styling as services landing (tagline, title, paragraph, two buttons).
 *
 * @package RainTunnelWash
 */

$tagline        = get_field('programs_heading_tagline');
$title          = get_field('programs_heading_title');
$paragraph      = get_field('programs_heading_paragraph');
$button_1_text  = get_field('programs_heading_button_1_text');
$button_1_link  = get_field('programs_heading_button_1_link');
$button_2_text  = get_field('programs_heading_button_2_text');
$button_2_link  = get_field('programs_heading_button_2_link');

// Use Hero Section "Page Title" / "Subtitle" when Heading Section fields are empty so either tab updates the site
$hero_title   = get_field('hero_headline');
$hero_subtitle = get_field('hero_subtitle');
$title         = $title ? $title : ($hero_title ? $hero_title : 'Programs');
$tagline       = $tagline ? $tagline : ($hero_subtitle ? $hero_subtitle : 'SAVE MORE. WASH MORE.');
$paragraph     = $paragraph ? $paragraph : 'Membership and community programs that reward our customers and give back.';
?>

<section class="programs-heading">
    <div class="container">
        <div class="programs-heading__content home-hero__content">
            <?php if ($tagline) : ?>
                <p class="home-hero__tagline"><?php echo esc_html($tagline); ?></p>
            <?php endif; ?>
            <h1 class="home-hero__title"><?php echo esc_html($title); ?></h1>
            <?php if ($paragraph) : ?>
                <p class="home-hero__description"><?php echo esc_html($paragraph); ?></p>
            <?php endif; ?>
            <div class="home-hero__ctas">
                <?php
                $btn1_url    = ($button_1_link && !empty($button_1_link['url'])) ? $button_1_link['url'] : '#';
                $btn1_target = ($button_1_link && !empty($button_1_link['target'])) ? $button_1_link['target'] : '';
                $btn2_url    = ($button_2_link && !empty($button_2_link['url'])) ? $button_2_link['url'] : '#';
                $btn2_target = ($button_2_link && !empty($button_2_link['target'])) ? $button_2_link['target'] : '';
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
