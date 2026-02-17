<?php
/**
 * Program Single Gives - Three sections as service-style cards (heading + WYSIWYG paragraph).
 *
 * @package RainTunnelWash
 */

$sections = get_field('program_gives_sections');

if ( ! is_array($sections) || empty($sections) ) {
    return;
}
?>

<section class="section program-single-gives section--services-list">
    <div class="container">
        <div class="services-cards__grid program-single-gives__grid">
            <?php foreach ( $sections as $index => $section ) : ?>
                <?php
                $heading   = isset($section['heading']) ? trim((string) $section['heading']) : '';
                $paragraph = isset($section['paragraph']) ? $section['paragraph'] : '';
                if ( $heading === '' && $paragraph === '' ) {
                    continue;
                }
                $num = $index + 1;
                ?>
                <div class="service-detail-card animate-on-scroll" style="--delay: <?php echo $index * 0.1; ?>s">
                    <div class="service-detail-card__banner">
                        <span class="service-detail-card__banner-text"><?php echo (int) $num; ?></span>
                    </div>
                    <div class="service-detail-card__body">
                        <?php if ( $heading !== '' ) : ?>
                            <h2 class="service-detail-card__title"><?php echo esc_html( $heading ); ?></h2>
                        <?php endif; ?>
                        <?php if ( $paragraph !== '' ) : ?>
                            <div class="service-detail-card__description program-single-gives__content"><?php echo wp_kses_post( $paragraph ); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
