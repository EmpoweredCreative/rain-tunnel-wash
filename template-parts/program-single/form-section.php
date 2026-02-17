<?php
/**
 * Program Single - Form Section (header, paragraph, Fluent Form shortcode)
 * Used when "Use form section instead of intro" is on (Program Single) or by "Program Single Form" template.
 *
 * @package RainTunnelWash
 */

$use_intro_form = get_field('program_intro_use_form') && trim((string) get_field('program_intro_form_shortcode')) !== '';

if ( $use_intro_form ) {
    $heading   = get_field('program_intro_heading');
    $paragraph = get_field('program_intro_paragraph');
    $shortcode = get_field('program_intro_form_shortcode');
} else {
    $heading   = get_field('program_form_heading');
    $paragraph = get_field('program_form_paragraph');
    $shortcode = get_field('program_form_shortcode');
}

if ( ! $heading && ! $paragraph && ! $shortcode ) {
    return;
}
?>

<section class="section program-single-form-section">
    <div class="container">
        <?php if ( $heading || $paragraph ) : ?>
            <div class="program-single-form-section__intro">
                <?php if ( $heading ) : ?>
                    <h2 class="program-single-form-section__heading"><?php echo esc_html( $heading ); ?></h2>
                <?php endif; ?>
                <?php if ( $paragraph ) : ?>
                    <div class="program-single-form-section__paragraph"><?php echo wp_kses_post( wpautop( $paragraph ) ); ?></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ( $shortcode ) : ?>
            <div class="program-single-form-section__form">
                <?php echo do_shortcode( trim( (string) $shortcode ) ); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
