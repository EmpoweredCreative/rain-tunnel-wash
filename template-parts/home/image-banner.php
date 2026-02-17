<?php
/**
 * Home Page - Video Banner Section
 *
 * @package RainTunnelWash
 */

$video_url = function_exists('get_field') ? get_field('banner_video') : null;
$video_poster = function_exists('get_field') ? get_field('banner_video_poster') : null;
$poster_url = $video_poster ? $video_poster['url'] : '';
?>

<section class="home-video-banner">
    <div class="home-video-banner__container">
        <?php if ($video_url) : ?>
            <video class="home-video-banner__video" 
                   autoplay 
                   muted 
                   loop 
                   playsinline
                   <?php echo $poster_url ? 'poster="' . esc_url($poster_url) . '"' : ''; ?>>
                <source src="<?php echo esc_url($video_url['url']); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        <?php else : ?>
            <!-- Video Placeholder -->
            <div class="home-video-banner__placeholder">
                <div class="home-video-banner__placeholder-content">
                    <svg class="home-video-banner__icon" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                    </svg>
                    <p class="home-video-banner__placeholder-text">VIDEO SECTION</p>
                    <p class="home-video-banner__placeholder-subtext">Upload video in ACF to display here</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
