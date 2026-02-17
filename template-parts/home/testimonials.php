<?php
/**
 * Home Page - Testimonials Section
 *
 * @package RainTunnelWash
 */

// Sample testimonials (can be made ACF editable later)
$testimonials = array(
    array(
        'quote' => 'Absolutely the best car wash I\'ve ever used. Everything worked perfectly. The brushes were in good shape and the staff kept the facility nice. This is my go-to place to wash a truck. This is the place!',
        'author' => 'John D.',
        'rating' => 5,
    ),
    array(
        'quote' => 'Fast, friendly service every time. The wash club membership is a great value - I wash my car twice a week and it always looks showroom ready.',
        'author' => 'Sarah M.',
        'rating' => 5,
    ),
    array(
        'quote' => 'Been coming here for years. Family owned and operated, and it shows in the quality of service. Highly recommend!',
        'author' => 'Mike R.',
        'rating' => 5,
    ),
);
?>

<section class="home-testimonials">
    <div class="container">
        <div class="home-testimonials__inner">
        <h2 class="home-testimonials__title">LOCAL CUSTOMERS. HONEST FEEDBACK.</h2>
        
        <div class="testimonials-slider">
            <div class="testimonials-slider__track">
                <?php foreach ($testimonials as $index => $testimonial) : ?>
                    <div class="testimonial-slide <?php echo $index === 0 ? 'is-active' : ''; ?>" data-index="<?php echo $index; ?>">
                        <div class="testimonial-slide__rating">
                            <?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="testimonial-slide__quote">
                            "<?php echo esc_html($testimonial['quote']); ?>"
                        </blockquote>
                        <cite class="testimonial-slide__author"><?php echo esc_html($testimonial['author']); ?></cite>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="testimonials-slider__dots">
                <?php foreach ($testimonials as $index => $testimonial) : ?>
                    <button class="testimonials-slider__dot <?php echo $index === 0 ? 'is-active' : ''; ?>" 
                            data-index="<?php echo $index; ?>"
                            aria-label="Go to testimonial <?php echo $index + 1; ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </div>
</section>
