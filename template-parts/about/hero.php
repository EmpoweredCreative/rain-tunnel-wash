<?php
/**
 * About / Who We Are - Hero (same as service single: home-hero markup)
 *
 * @package RainTunnelWash
 */

$post_id   = get_queried_object_id() ?: get_the_ID();
$badge     = $post_id ? get_field( 'about_hero_badge', $post_id ) : null;
$tagline_raw = $post_id ? get_field( 'about_hero_tagline', $post_id ) : null;
$tagline   = ( $tagline_raw !== null && trim( (string) $tagline_raw ) !== '' ) ? trim( (string) $tagline_raw ) : '';
$title_line1 = $post_id ? get_field( 'about_hero_title_line1', $post_id ) : '';
$title_line2 = $post_id ? get_field( 'about_hero_title_line2', $post_id ) : '';
if ( $title_line1 === '' && $title_line2 === '' ) {
    $title_line1 = get_the_title();
}
$title_line1 = trim( (string) $title_line1 );
$title_line2 = trim( (string) $title_line2 );
$subtitle  = $post_id ? get_field( 'about_hero_subtitle', $post_id ) : '';
$desc      = $post_id ? get_field( 'about_hero_description', $post_id ) : '';
$hero_image = $post_id ? get_field( 'about_hero_image', $post_id ) : null;
$cta1_text = $post_id ? ( get_field( 'about_hero_cta1_text', $post_id ) ?: 'Wash Me Now' ) : 'Wash Me Now';
$cta1_link = $post_id ? get_field( 'about_hero_cta1_link', $post_id ) : null;
$cta2_text = $post_id ? get_field( 'about_hero_cta2_text', $post_id ) : '';
$cta2_link = $post_id ? get_field( 'about_hero_cta2_link', $post_id ) : null;

$bg_image = get_template_directory_uri() . '/assets/images/hero-placeholder.jpg';
if ( $hero_image && ! empty( $hero_image['url'] ) ) {
    if ( ! empty( $hero_image['id'] ) ) {
        $full = wp_get_attachment_image_src( (int) $hero_image['id'], 'full' );
        $bg_image = ( $full && ! empty( $full[0] ) ) ? $full[0] : $hero_image['url'];
    } else {
        $bg_image = $hero_image['url'];
    }
}
$cta1_url = is_array( $cta1_link ) && ! empty( $cta1_link['url'] ) ? $cta1_link['url'] : '#';
$cta2_url = is_array( $cta2_link ) && ! empty( $cta2_link['url'] ) ? $cta2_link['url'] : '#';
$cta2_text_trimmed = trim( (string) $cta2_text );
$show_cta2 = $cta2_text_trimmed !== '' || ( $cta2_url !== '' && $cta2_url !== '#' );
?>

<section class="home-hero page-about-hero" style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">
    <div class="home-hero__overlay home-hero__overlay--about"></div>
    <div class="container home-hero__container">
        <div class="home-hero__content">
            <?php if ( $badge !== '' && $badge !== null && trim( (string) $badge ) !== '' ) : ?>
                <span class="home-hero__badge"><?php echo esc_html( trim( (string) $badge ) ); ?></span>
            <?php endif; ?>
            <?php if ( $tagline !== '' ) : ?>
                <p class="home-hero__tagline"><?php echo esc_html( $tagline ); ?></p>
            <?php endif; ?>
            <h1 class="home-hero__title">
                <?php if ( $title_line1 !== '' ) : ?><span class="home-hero__title-line"><?php echo esc_html( $title_line1 ); ?></span><?php endif; ?>
                <?php if ( $title_line2 !== '' ) : ?><span class="home-hero__title-line"><?php echo esc_html( $title_line2 ); ?></span><?php endif; ?>
            </h1>
            <p class="home-hero__subtitle"><?php echo esc_html( $subtitle ); ?></p>
            <p class="home-hero__description"><?php echo esc_html( $desc ); ?></p>
            <div class="home-hero__ctas">
                <a href="<?php echo esc_url( $cta1_url ); ?>" class="btn btn--primary"><?php echo esc_html( $cta1_text ); ?></a>
                <?php if ( $show_cta2 ) : ?>
                    <a href="<?php echo esc_url( $cta2_url ); ?>" class="btn btn--secondary"><?php echo esc_html( $cta2_text_trimmed ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
