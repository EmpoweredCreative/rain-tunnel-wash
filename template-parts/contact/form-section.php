<?php
/**
 * Contact Page - Form section: inner container, heading, Fluent Form shortcode
 *
 * @package RainTunnelWash
 */

$heading   = get_field( 'contact_form_heading' ) ?: 'Send us a message';
$shortcode = get_field( 'contact_form_shortcode' );
?>

<section class="section contact-form-section">
    <div class="container">
        <div class="contact-form-section__inner">
            <h2 class="contact-form-section__heading"><?php echo esc_html( $heading ); ?></h2>
            <?php if ( $shortcode && trim( (string) $shortcode ) !== '' ) : ?>
                <div class="contact-form-section__form">
                    <?php echo do_shortcode( trim( (string) $shortcode ) ); ?>
                </div>
            <?php else : ?>
                <p class="contact-form-section__placeholder">Add your Fluent Form shortcode in Contact Page Content → Form Section.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
