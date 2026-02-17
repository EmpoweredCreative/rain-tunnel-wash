<?php
/**
 * Program Single / Program Single Gives - CTA section
 * Same style as Programs landing: optional background, heading, text, button.
 * Uses program_gives_cta_* when on Program Single Gives; otherwise program_cta_* (for future Program Single CTA).
 *
 * @package RainTunnelWash
 */

$is_gives = is_page_template( 'page-program-single-gives.php' );

if ( $is_gives ) {
    $heading   = get_field( 'program_gives_cta_heading' );
    $text      = get_field( 'program_gives_cta_text' );
    $btn_text  = get_field( 'program_gives_cta_button_text' );
    $button    = get_field( 'program_gives_cta_button' );
    $bg_image  = get_field( 'program_gives_cta_background' );
} else {
    $heading   = get_field( 'program_cta_heading' );
    $text      = get_field( 'program_cta_text' );
    $btn_text  = get_field( 'program_cta_button_text' );
    $button    = get_field( 'program_cta_button' );
    $bg_image  = get_field( 'program_cta_background' );
}

$bg_url   = $bg_image && ! empty( $bg_image['url'] ) ? $bg_image['url'] : '';
$btn_url  = ( is_array( $button ) && ! empty( $button['url'] ) ) ? $button['url'] : '#';
$btn_target = ( is_array( $button ) && ! empty( $button['target'] ) ) ? $button['target'] : '';
$btn_label = trim( (string) $btn_text ) !== '' ? trim( (string) $btn_text ) : ( is_array( $button ) && ! empty( $button['title'] ) ? $button['title'] : '' );
$has_button = (bool) $btn_label;

if ( ! $heading && ! $text && ! $has_button ) {
    return;
}
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
                <a href="<?php echo esc_url( $btn_url ); ?>" class="btn btn--primary btn--large"<?php echo $btn_target ? ' target="' . esc_attr( $btn_target ) . '"' : ''; ?>>
                    <?php echo esc_html( $btn_label ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
