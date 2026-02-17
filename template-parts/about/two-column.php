<?php
/**
 * About / Who We Are - Two-column: left = heading, paragraph; right = image (same layout as service single)
 *
 * @package RainTunnelWash
 */

$post_id    = get_queried_object_id() ?: get_the_ID();
$heading_1  = $post_id ? get_field( 'about_twocol_heading_line1', $post_id ) : '';
$heading_2  = $post_id ? get_field( 'about_twocol_heading_line2', $post_id ) : '';
$paragraph  = $post_id ? get_field( 'about_twocol_paragraph', $post_id ) : null;
$image      = $post_id ? get_field( 'about_twocol_image', $post_id ) : null;

$heading_1 = trim( (string) $heading_1 );
$heading_2 = trim( (string) $heading_2 );
$has_heading = $heading_1 !== '' || $heading_2 !== '';

if ( ! $has_heading && ! $paragraph && ! $image ) {
    return;
}

$image_url = $image && ! empty( $image['url'] ) ? $image['url'] : '';
?>

<section class="section service-single-twocol about-twocol">
    <div class="container">
        <div class="service-single-twocol__grid">
            <div class="service-single-twocol__content">
                <?php if ( $has_heading ) : ?>
                    <h2 class="service-single-twocol__heading">
                        <?php if ( $heading_1 !== '' ) : ?><span class="service-single-twocol__heading-line"><?php echo esc_html( $heading_1 ); ?></span><?php endif; ?>
                        <?php if ( $heading_2 !== '' ) : ?><span class="service-single-twocol__heading-line"><?php echo esc_html( $heading_2 ); ?></span><?php endif; ?>
                    </h2>
                <?php endif; ?>
                <?php if ( $paragraph ) : ?>
                    <div class="service-single-twocol__paragraph"><?php echo wp_kses_post( wpautop( $paragraph ) ); ?></div>
                <?php endif; ?>
            </div>
            <?php if ( $image_url ) : ?>
                <div class="service-single-twocol__image-wrap">
                    <img src="<?php echo esc_url( $image_url ); ?>" alt="" class="service-single-twocol__image" loading="lazy">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
