<?php
/**
 * About / Who We Are - What Guides Us: three cards (Vision, Mission, Values) with content
 *
 * @package RainTunnelWash
 */

$post_id = get_queried_object_id() ?: get_the_ID();
$section_heading = $post_id ? get_field( 'about_guides_heading', $post_id ) : '';
$section_paragraph = $post_id ? get_field( 'about_guides_paragraph', $post_id ) : '';
$v_heading = $post_id ? get_field( 'about_guides_vision_heading', $post_id ) : '';
$v_content = $post_id ? get_field( 'about_guides_vision_content', $post_id ) : '';
$v_image   = $post_id ? get_field( 'about_guides_vision_image', $post_id ) : null;
$m_heading = $post_id ? get_field( 'about_guides_mission_heading', $post_id ) : '';
$m_content = $post_id ? get_field( 'about_guides_mission_content', $post_id ) : '';
$m_image   = $post_id ? get_field( 'about_guides_mission_image', $post_id ) : null;
$vals_heading = $post_id ? get_field( 'about_guides_values_heading', $post_id ) : '';
$vals_content = $post_id ? get_field( 'about_guides_values_content', $post_id ) : '';
$vals_image   = $post_id ? get_field( 'about_guides_values_image', $post_id ) : null;

$has_cards = $v_heading || $v_content || $m_heading || $m_content || $vals_heading || $vals_content;
$has_intro = trim( (string) $section_heading ) !== '' || trim( (string) $section_paragraph ) !== '';
if ( ! $has_intro && ! $has_cards ) {
    return;
}
?>

<section class="section about-guides">
    <div class="container">
        <?php if ( $section_heading || $section_paragraph ) : ?>
            <div class="about-guides__intro">
                <?php if ( $section_heading ) : ?>
                    <h2 class="about-guides__intro-heading"><?php echo esc_html( $section_heading ); ?></h2>
                <?php endif; ?>
                <?php if ( $section_paragraph ) : ?>
                    <div class="about-guides__intro-paragraph"><?php echo wp_kses_post( wpautop( $section_paragraph ) ); ?></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ( $has_cards ) : ?>
        <div class="about-guides__grid">
            <?php
            $v_bg = $v_image && ! empty( $v_image['url'] ) ? $v_image['url'] : '';
            $m_bg = $m_image && ! empty( $m_image['url'] ) ? $m_image['url'] : '';
            $vals_bg = $vals_image && ! empty( $vals_image['url'] ) ? $vals_image['url'] : '';
            ?>
            <div class="about-guides__card<?php echo $v_bg ? ' about-guides__card--has-bg' : ''; ?>">
                <?php if ( $v_bg ) : ?>
                    <div class="about-guides__card-bg" style="background-image: url('<?php echo esc_attr( esc_url( $v_bg ) ); ?>');" role="presentation"></div>
                    <div class="about-guides__card-overlay" aria-hidden="true"></div>
                <?php endif; ?>
                <div class="about-guides__card-inner">
                    <?php if ( $v_heading ) : ?>
                        <h3 class="about-guides__heading"><?php echo esc_html( $v_heading ); ?></h3>
                    <?php endif; ?>
                    <?php if ( $v_content ) : ?>
                        <div class="about-guides__content"><?php echo wp_kses_post( $v_content ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="about-guides__card<?php echo $m_bg ? ' about-guides__card--has-bg' : ''; ?>">
                <?php if ( $m_bg ) : ?>
                    <div class="about-guides__card-bg" style="background-image: url('<?php echo esc_attr( esc_url( $m_bg ) ); ?>');" role="presentation"></div>
                    <div class="about-guides__card-overlay" aria-hidden="true"></div>
                <?php endif; ?>
                <div class="about-guides__card-inner">
                    <?php if ( $m_heading ) : ?>
                        <h3 class="about-guides__heading"><?php echo esc_html( $m_heading ); ?></h3>
                    <?php endif; ?>
                    <?php if ( $m_content ) : ?>
                        <div class="about-guides__content"><?php echo wp_kses_post( $m_content ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="about-guides__card<?php echo $vals_bg ? ' about-guides__card--has-bg' : ''; ?>">
                <?php if ( $vals_bg ) : ?>
                    <div class="about-guides__card-bg" style="background-image: url('<?php echo esc_attr( esc_url( $vals_bg ) ); ?>');" role="presentation"></div>
                    <div class="about-guides__card-overlay" aria-hidden="true"></div>
                <?php endif; ?>
                <div class="about-guides__card-inner">
                    <?php if ( $vals_heading ) : ?>
                        <h3 class="about-guides__heading"><?php echo esc_html( $vals_heading ); ?></h3>
                    <?php endif; ?>
                    <?php if ( $vals_content ) : ?>
                        <div class="about-guides__content"><?php echo wp_kses_post( $vals_content ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
