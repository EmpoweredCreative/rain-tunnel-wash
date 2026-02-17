<?php
/**
 * Program Single - Wash Club FAQs: accordion (question + answer, dropdown)
 *
 * @package RainTunnelWash
 */

$heading = get_field('program_facts_heading') ?: 'Wash Club FAQs';
$items   = get_field('program_facts');

if (empty($items) || !is_array($items)) {
    return;
}
?>

<section class="section section--faq program-single-facts">
    <div class="container">
        <?php if ($heading) : ?>
            <h2 class="section__title program-single-facts__title"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>
        <ul class="faq-list">
            <?php foreach ($items as $item) :
                $question = isset($item['question']) ? trim($item['question']) : '';
                $answer   = isset($item['answer']) ? $item['answer'] : '';
                if ($question === '') continue;
            ?>
                <li class="faq-item">
                    <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-answer-<?php echo esc_attr(get_the_ID() . '-' . sanitize_title($question)); ?>">
                        <span><?php echo esc_html($question); ?></span>
                        <span class="faq-icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div id="faq-answer-<?php echo esc_attr(get_the_ID() . '-' . sanitize_title($question)); ?>" class="faq-answer" role="region" aria-labelledby="faq-question-<?php echo esc_attr(sanitize_title($question)); ?>">
                        <div class="faq-answer__content"><?php echo wp_kses_post(wpautop($answer)); ?></div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
