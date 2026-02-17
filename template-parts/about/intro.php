<?php
/**
 * About / Who We Are - Intro section (inner container, same style as Programs "built for community")
 *
 * @package RainTunnelWash
 */

$post_id   = get_queried_object_id() ?: get_the_ID();
$heading   = $post_id ? get_field( 'about_intro_heading', $post_id ) : null;
$paragraph = $post_id ? get_field( 'about_intro_paragraph', $post_id ) : null;

if ( ! $heading && ! $paragraph ) {
    return;
}
?>

<section class="section programs-intro about-intro">
    <div class="container">
        <div class="programs-intro__inner">
            <?php if ( $heading ) : ?>
                <h2 class="programs-intro__heading"><?php echo esc_html( $heading ); ?></h2>
            <?php endif; ?>
            <?php if ( $paragraph ) : ?>
                <div class="programs-intro__paragraph"><?php echo wp_kses_post( $paragraph ); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>
