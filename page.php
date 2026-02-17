<?php
/**
 * Default Page Template
 *
 * This is the fallback template for pages that don't have a specific template.
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main page-default">
    <div class="container">
        <article id="post-<?php the_ID(); ?>" <?php post_class('page-default__content'); ?>>
            
            <h1 class="page-default__title"><?php the_title(); ?></h1>
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="page-default__featured-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>
            
            <div class="page-default__body">
                <?php 
                while (have_posts()) : 
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>
            
        </article>
    </div>
</main>

<?php
get_footer();
