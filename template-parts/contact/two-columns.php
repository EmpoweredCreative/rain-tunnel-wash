<?php
/**
 * Contact Page - Two columns: map (67%, two stacked maps) | info (33%)
 *
 * @package RainTunnelWash
 */

function rtw_contact_map_value_to_embed( $value ) {
    if ( ! $value || trim( (string) $value ) === '' ) {
        return '';
    }
    $value = trim( (string) $value );
    $value = stripslashes( $value );
    // In case the value was stored with HTML entities (e.g. &lt;iframe)
    $value = html_entity_decode( $value, ENT_QUOTES | ENT_HTML5, 'UTF-8' );
    // Accept full iframe embed code (case-insensitive)
    if ( stripos( $value, '<iframe' ) !== false ) {
        return $value;
    }
    // Otherwise treat as URL (share link)
    $map_url = esc_url( $value );
    if ( preg_match( '/[?&]mid=([^&]+)/', $value, $m ) ) {
        $embed_url = 'https://www.google.com/maps/d/embed?mid=' . sanitize_text_field( $m[1] );
        return '<iframe src="' . esc_url( $embed_url ) . '" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    return '<iframe src="' . $map_url . '" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
}

$contact_page_id = get_queried_object_id();
if ( ! $contact_page_id ) {
    $contact_page_id = get_the_ID();
}

$map_1_raw = $contact_page_id ? get_field( 'contact_map_embed_1', $contact_page_id ) : null;
$map_2_raw = $contact_page_id ? get_field( 'contact_map_embed_2', $contact_page_id ) : null;
$map_1_html = rtw_contact_map_value_to_embed( $map_1_raw );
$map_2_html = rtw_contact_map_value_to_embed( $map_2_raw );
$heading_1  = $contact_page_id ? get_field( 'contact_info_heading_1', $contact_page_id ) : null;
$phone      = $contact_page_id ? get_field( 'contact_info_phone', $contact_page_id ) : null;
$paragraph  = $contact_page_id ? get_field( 'contact_info_paragraph', $contact_page_id ) : null;
$heading_2  = $contact_page_id ? get_field( 'contact_info_heading_2', $contact_page_id ) : null;
$address_1   = $contact_page_id ? get_field( 'contact_info_address_1', $contact_page_id ) : null;
$address_2   = $contact_page_id ? get_field( 'contact_info_address_2', $contact_page_id ) : null;

$has_map  = $map_1_html !== '' || $map_2_html !== '';
$has_info = $heading_1 || $phone || $paragraph || $heading_2 || $address_1 || $address_2;
if ( ! $has_map && ! $has_info ) {
    return;
}
?>

<section class="section contact-two-columns" data-contact-id="<?php echo (int) $contact_page_id; ?>" data-map1-len="<?php echo (int) strlen( (string) $map_1_raw ); ?>" data-map2-len="<?php echo (int) strlen( (string) $map_2_raw ); ?>">
    <div class="container">
        <div class="contact-two-columns__grid">
            <?php if ( $has_map ) : ?>
                <div class="contact-two-columns__map">
                    <?php if ( $map_1_html !== '' ) : ?>
                        <div class="contact-two-columns__map-inner">
                            <?php echo $map_1_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </div>
                    <?php endif; ?>
                    <?php if ( $map_2_html !== '' ) : ?>
                        <div class="contact-two-columns__map-inner">
                            <?php echo $map_2_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ( $has_info ) : ?>
                <div class="contact-two-columns__info">
                    <?php if ( $heading_1 ) : ?>
                        <h2 class="contact-two-columns__heading"><?php echo esc_html( $heading_1 ); ?></h2>
                    <?php endif; ?>
                    <?php if ( $phone ) : ?>
                        <p class="contact-two-columns__phone">
                            <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
                        </p>
                    <?php endif; ?>
                    <?php if ( $paragraph ) : ?>
                        <div class="contact-two-columns__paragraph"><?php echo wp_kses_post( wpautop( $paragraph ) ); ?></div>
                    <?php endif; ?>
                    <?php if ( $heading_2 ) : ?>
                        <h3 class="contact-two-columns__heading2"><?php echo esc_html( $heading_2 ); ?></h3>
                    <?php endif; ?>
                    <?php if ( $address_1 ) : ?>
                        <address class="contact-two-columns__address"><?php echo nl2br( esc_html( trim( (string) $address_1 ) ) ); ?></address>
                    <?php endif; ?>
                    <?php if ( $address_2 ) : ?>
                        <address class="contact-two-columns__address"><?php echo nl2br( esc_html( trim( (string) $address_2 ) ) ); ?></address>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
