<?php
/**
 * FAQ Page - Two sections, each with heading + accordion items (like program single facts)
 *
 * @package RainTunnelWash
 */

$section_1_anchor  = get_field( 'faq_section_1_anchor' );
$section_1_heading = get_field( 'faq_section_1_heading' );
$section_1_items   = get_field( 'faq_section_1_items' );
$section_2_anchor  = get_field( 'faq_section_2_anchor' );
$section_2_heading = get_field( 'faq_section_2_heading' );
$section_2_items   = get_field( 'faq_section_2_items' );

$anchor_1 = ( $section_1_anchor !== null && trim( (string) $section_1_anchor ) !== '' ) ? sanitize_title( trim( (string) $section_1_anchor ) ) : '';
$anchor_2 = ( $section_2_anchor !== null && trim( (string) $section_2_anchor ) !== '' ) ? sanitize_title( trim( (string) $section_2_anchor ) ) : '';
if ( $anchor_1 === '' ) {
    $anchor_1 = 'faq-section-1';
}
if ( $anchor_2 === '' ) {
    $anchor_2 = 'faq-section-2';
}

$has_section_1 = ( $section_1_heading || ( ! empty( $section_1_items ) && is_array( $section_1_items ) ) );
$has_section_2 = ( $section_2_heading || ( ! empty( $section_2_items ) && is_array( $section_2_items ) ) );

if ( ! $has_section_1 && ! $has_section_2 ) {
    return;
}

$page_id = get_the_ID();
?>

<section class="section section--faq page-faq__section">
    <div class="container">
        <?php if ( $has_section_1 ) : ?>
            <div id="<?php echo esc_attr( $anchor_1 ); ?>" class="page-faq__block">
                <?php if ( $section_1_heading ) : ?>
                    <h2 class="section__title page-faq__title"><?php echo esc_html( $section_1_heading ); ?></h2>
                <?php endif; ?>
                <?php if ( ! empty( $section_1_items ) && is_array( $section_1_items ) ) : ?>
                    <ul class="faq-list">
                        <?php foreach ( $section_1_items as $idx => $item ) :
                            $question = isset( $item['question'] ) ? trim( (string) $item['question'] ) : '';
                            $answer   = isset( $item['answer'] ) ? $item['answer'] : '';
                            if ( $question === '' ) continue;
                            $slug = sanitize_title( $question );
                            $id   = $page_id . '-1-' . $idx . '-' . $slug;
                        ?>
                            <li class="faq-item">
                                <button type="button" class="faq-question" id="faq-question-<?php echo esc_attr( $id ); ?>" aria-expanded="false" aria-controls="faq-answer-<?php echo esc_attr( $id ); ?>">
                                    <span><?php echo esc_html( $question ); ?></span>
                                    <span class="faq-icon" aria-hidden="true">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                                    </span>
                                </button>
                                <div id="faq-answer-<?php echo esc_attr( $id ); ?>" class="faq-answer" role="region" aria-labelledby="faq-question-<?php echo esc_attr( $id ); ?>">
                                    <div class="faq-answer__content"><?php echo wp_kses_post( $answer ); ?></div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ( $has_section_2 ) : ?>
            <div id="<?php echo esc_attr( $anchor_2 ); ?>" class="page-faq__block">
                <?php if ( $section_2_heading ) : ?>
                    <h2 class="section__title page-faq__title"><?php echo esc_html( $section_2_heading ); ?></h2>
                <?php endif; ?>
                <?php if ( ! empty( $section_2_items ) && is_array( $section_2_items ) ) : ?>
                    <ul class="faq-list">
                        <?php foreach ( $section_2_items as $idx => $item ) :
                            $question = isset( $item['question'] ) ? trim( (string) $item['question'] ) : '';
                            $answer   = isset( $item['answer'] ) ? $item['answer'] : '';
                            if ( $question === '' ) continue;
                            $slug = sanitize_title( $question );
                            $id   = $page_id . '-2-' . $idx . '-' . $slug;
                        ?>
                            <li class="faq-item">
                                <button type="button" class="faq-question" id="faq-question-<?php echo esc_attr( $id ); ?>" aria-expanded="false" aria-controls="faq-answer-<?php echo esc_attr( $id ); ?>">
                                    <span><?php echo esc_html( $question ); ?></span>
                                    <span class="faq-icon" aria-hidden="true">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                                    </span>
                                </button>
                                <div id="faq-answer-<?php echo esc_attr( $id ); ?>" class="faq-answer" role="region" aria-labelledby="faq-question-<?php echo esc_attr( $id ); ?>">
                                    <div class="faq-answer__content"><?php echo wp_kses_post( $answer ); ?></div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
