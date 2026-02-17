<?php
/**
 * Template Part: Programs Landing - Program Cards
 * Inner container (like "how the touchless wash works") with header, paragraph, three program cards.
 * Each card: background image header, title, text, button below.
 *
 * @package RainTunnelWash
 */

$heading_line_1 = get_field('programs_heading_line_1');
$heading_line_2 = get_field('programs_heading_line_2');
$heading_line_1 = $heading_line_1 ? $heading_line_1 : 'Choose Your Plan';
$paragraph      = get_field('programs_text');
$programs       = get_field('programs_list');
$has_heading    = $heading_line_1 || $heading_line_2;

if (is_array($programs)) {
    $programs = array_slice($programs, 0, 3);
} else {
    $programs = array();
}

$defaults = array(
    array('name' => 'Wash Club', 'description' => 'Unlimited washes at a great value. Join and save.', 'image' => null, 'cta_text' => 'Learn More', 'cta_link' => array('url' => '#')),
    array('name' => 'Fleet Program', 'description' => 'Keep your fleet clean with volume pricing and convenience.', 'image' => null, 'cta_text' => 'Get Started', 'cta_link' => array('url' => '#')),
    array('name' => 'Fundraisers', 'description' => 'Partner with us to raise funds for your group or cause.', 'image' => null, 'cta_text' => 'Learn More', 'cta_link' => array('url' => '#')),
);
if (empty($programs)) {
    $programs = $defaults;
}
?>

<section class="section programs-cards">
    <div class="container">
        <div class="programs-cards__inner">
            <?php if ($has_heading) : ?>
                <h2 class="programs-cards__heading">
                    <?php if ($heading_line_1) : ?><span class="programs-cards__heading-line"><?php echo esc_html($heading_line_1); ?></span><?php endif; ?>
                    <?php if ($heading_line_2) : ?><span class="programs-cards__heading-line"><?php echo esc_html($heading_line_2); ?></span><?php endif; ?>
                </h2>
            <?php endif; ?>
            <?php if ($paragraph) : ?>
                <div class="programs-cards__paragraph"><?php echo wp_kses_post(wpautop($paragraph)); ?></div>
            <?php endif; ?>
            <div class="programs-cards__grid">
                <?php foreach ($programs as $program) :
                    $img   = isset($program['image']) && !empty($program['image']) ? $program['image'] : null;
                    $img_url = $img && is_array($img) && !empty($img['url']) ? $img['url'] : '';
                    $name  = isset($program['name']) ? $program['name'] : '';
                    $desc  = isset($program['description']) ? $program['description'] : '';
                    $cta_text = isset($program['cta_text']) ? trim((string) $program['cta_text']) : 'Learn More';
                    $cta_link = isset($program['cta_link']) && is_array($program['cta_link']) && !empty($program['cta_link']['url']) ? $program['cta_link'] : array('url' => '#', 'target' => '');
                ?>
                    <div class="programs-card">
                        <div class="programs-card__header"<?php if ($img_url) : ?> style="background-image: url('<?php echo esc_url($img_url); ?>');"<?php endif; ?>>
                            <?php if (!$img_url) : ?>
                                <span class="programs-card__header-placeholder"></span>
                            <?php endif; ?>
                        </div>
                        <div class="programs-card__body">
                            <?php if ($name) : ?>
                                <h3 class="programs-card__title"><?php echo esc_html($name); ?></h3>
                            <?php endif; ?>
                            <?php if ($desc) : ?>
                                <p class="programs-card__text"><?php echo esc_html($desc); ?></p>
                            <?php endif; ?>
                            <a href="<?php echo esc_url($cta_link['url']); ?>" class="btn btn--primary programs-card__btn"<?php echo !empty($cta_link['target']) ? ' target="' . esc_attr($cta_link['target']) . '"' : ''; ?>>
                                <?php echo esc_html($cta_text); ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
