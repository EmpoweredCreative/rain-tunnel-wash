<?php
/**
 * About / Who We Are - Our Story timeline (title, subtitle, intro, single image)
 *
 * @package RainTunnelWash
 */

$post_id = get_queried_object_id() ?: get_the_ID();
$title   = $post_id ? get_field( 'about_timeline_title', $post_id ) : '';
$subtitle = $post_id ? get_field( 'about_timeline_subtitle', $post_id ) : '';
$intro   = $post_id ? get_field( 'about_timeline_intro', $post_id ) : '';
$image   = $post_id ? get_field( 'about_timeline_image', $post_id ) : null;

if ( ! $title && ! $subtitle && ! $intro && ! $image ) {
    return;
}

$image_url = $image && ! empty( $image['url'] ) ? $image['url'] : '';
$image_alt = $image && ! empty( $image['alt'] ) ? $image['alt'] : '';
?>

<section class="section about-timeline">
    <div class="container">
        <div class="about-timeline__inner">
            <?php if ( $title ) : ?>
                <h2 class="about-timeline__title"><?php echo esc_html( $title ); ?></h2>
            <?php endif; ?>
            <?php if ( $subtitle ) : ?>
                <p class="about-timeline__subtitle"><?php echo esc_html( $subtitle ); ?></p>
            <?php endif; ?>
            <?php if ( $intro ) : ?>
                <div class="about-timeline__intro"><?php echo wp_kses_post( wpautop( $intro ) ); ?></div>
            <?php endif; ?>
            <?php if ( $image_url ) : ?>
                <div class="about-timeline__image-wrap">
                    <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" class="about-timeline__image" loading="lazy" data-timeline-expand-src="<?php echo esc_url( $image_url ); ?>">
                    <button type="button" class="about-timeline__expand-overlay" aria-label="Expand timeline image to full size">
                        <span class="about-timeline__expand-icon" aria-hidden="true"></span>
                        <span class="about-timeline__expand-text">Tap to expand</span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
