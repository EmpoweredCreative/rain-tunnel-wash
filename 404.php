<?php
/**
 * 404 Page Template
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main">
    <div class="page-404">
        <div class="page-404__content">
            <div class="page-404__number">404</div>
            <h1 class="page-404__title">Page Not Found</h1>
            <p class="page-404__text">
                Sorry, the page you're looking for doesn't exist or has been moved.
            </p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                Back to Home
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
