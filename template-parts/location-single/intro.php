<?php
/**
 * Location Single - Intro (same as programs single: dark blue inner container)
 *
 * @package RainTunnelWash
 */

$heading   = get_field('location_single_intro_heading');
$paragraph = get_field('location_single_intro_paragraph');
$btn_text  = get_field('location_single_intro_button_text');
$btn_link  = get_field('location_single_intro_button_link');

$has_button = $btn_text && trim( (string) $btn_text ) !== '';

if ( ! $heading && ! $paragraph && ! $has_button ) {
    return;
}
?>

<section class="section programs-intro location-single-intro">
    <div class="container">
        <div class="programs-intro__inner">
            <?php if ( $heading ) : ?>
                <h2 class="programs-intro__heading"><?php echo esc_html( $heading ); ?></h2>
            <?php endif; ?>
            <?php if ( $paragraph ) : ?>
                <div class="programs-intro__paragraph"><?php echo wp_kses_post( wpautop( $paragraph ) ); ?></div>
            <?php endif; ?>
            <?php if ( $has_button ) : ?>
                <?php
                $btn_url    = ( is_array( $btn_link ) && ! empty( $btn_link['url'] ) ) ? $btn_link['url'] : '#';
                $btn_target = ( is_array( $btn_link ) && ! empty( $btn_link['target'] ) ) ? $btn_link['target'] : '';
                ?>
                <div class="location-single-intro__cta">
                    <a href="<?php echo esc_url( $btn_url ); ?>" class="location-single-intro__btn"<?php echo $btn_target ? ' target="' . esc_attr( $btn_target ) . '"' : ''; ?><?php echo $btn_target === '_blank' ? ' rel="noopener noreferrer"' : ''; ?>><?php echo esc_html( $btn_text ); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
