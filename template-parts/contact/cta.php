<?php
/**
 * Contact Page - CTA (same as location single)
 *
 * @package RainTunnelWash
 */

$heading  = get_field( 'contact_cta_heading' );
$text     = get_field( 'contact_cta_text' );
$button   = get_field( 'contact_cta_button' );
$btn_text = get_field( 'contact_cta_button_text' );
$bg_image = get_field( 'contact_cta_background' );
$bg_url   = $bg_image && ! empty( $bg_image['url'] ) ? $bg_image['url'] : '';

if ( ! $heading && ! $text && ! $btn_text && ! ( is_array( $button ) && ! empty( $button['url'] ) ) ) {
    return;
}

$button_label = $btn_text ? trim( (string) $btn_text ) : ( is_array( $button ) && ! empty( $button['title'] ) ? $button['title'] : '' );
$has_button   = (bool) $button_label;
$button_url   = ( is_array( $button ) && ! empty( $button['url'] ) ) ? $button['url'] : '#';
$button_target = ( is_array( $button ) && ! empty( $button['target'] ) ) ? $button['target'] : '';
?>

<section class="section section--cta section--cta-simple<?php echo $bg_url ? ' section--cta-has-bg' : ''; ?>">
    <?php if ( $bg_url ) : ?>
        <div class="section--cta__bg" style="background-image: url(<?php echo esc_url( $bg_url ); ?>);" role="presentation"></div>
        <div class="section--cta__overlay" aria-hidden="true"></div>
    <?php endif; ?>
    <div class="container">
        <div class="cta-simple animate-on-scroll">
            <?php if ( $heading ) : ?>
                <h2 class="cta-simple__title"><?php echo esc_html( $heading ); ?></h2>
            <?php endif; ?>
            <?php if ( $text ) : ?>
                <p class="cta-simple__text"><?php echo esc_html( $text ); ?></p>
            <?php endif; ?>
            <?php if ( $has_button ) : ?>
                <a href="<?php echo esc_url( $button_url ); ?>" class="btn btn--primary btn--large"<?php echo $button_target ? ' target="' . esc_attr( $button_target ) . '"' : ''; ?>>
                    <?php echo esc_html( $button_label ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
