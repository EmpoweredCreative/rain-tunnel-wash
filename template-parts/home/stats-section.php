<?php
/**
 * Home Page - Stats Section
 *
 * @package RainTunnelWash
 */
?>

<section class="home-stats">
    <div class="container">
        <div class="home-stats__inner">
        <div class="home-stats__header">
            <h2 class="home-stats__title">A CAR WASH YOU CAN COUNT ON</h2>
            <p class="home-stats__subtitle">Proudly serving our community for over 50 years.</p>
        </div>
        
        <div class="home-stats__grid">
            <div class="stat-circle">
                <span class="stat-circle__number">4</span>
                <span class="stat-circle__label">Generations</span>
            </div>
            <div class="stat-circle stat-circle--highlight">
                <span class="stat-circle__prefix">Since</span>
                <span class="stat-circle__number">1968</span>
            </div>
            <div class="stat-circle">
                <span class="stat-circle__number">2</span>
                <span class="stat-circle__label">Locations</span>
            </div>
        </div>
        
        <div class="home-stats__cta">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('who-we-are'))); ?>" class="home-stats__btn">
                OUR STORY
            </a>
        </div>
        </div>
    </div>
</section>
