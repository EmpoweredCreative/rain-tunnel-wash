<?php
/**
 * Contact Page - Content section (styled like Touchless Wash / how-it-works inner, no icons)
 *
 * @package RainTunnelWash
 */

$heading = get_field( 'contact_content_heading' );
$body    = get_field( 'contact_content_body' );

if ( ! $heading && ! $body ) {
    return;
}
?>

<section class="section contact-content-section">
    <div class="container">
        <div class="contact-content-section__inner">
            <?php if ( $heading ) : ?>
                <h2 class="contact-content-section__heading"><?php echo esc_html( $heading ); ?></h2>
            <?php endif; ?>
            <?php if ( $body ) : ?>
                <div class="contact-content-section__body"><?php echo wp_kses_post( $body ); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>
