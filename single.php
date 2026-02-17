<?php
/**
 * Single Post Template
 *
 * @package RainTunnelWash
 */

get_header();
?>

<main id="main-content" class="site-main single-post">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php if (has_post_thumbnail()) : ?>
            <div class="single-post__hero">
                <div class="single-post__hero-image">
                    <?php the_post_thumbnail('hero'); ?>
                </div>
                <div class="single-post__hero-overlay"></div>
                <div class="container">
                    <div class="single-post__hero-content">
                        <div class="single-post__meta">
                            <span class="single-post__date"><?php echo get_the_date(); ?></span>
                            <?php 
                            $categories = get_the_category();
                            if ($categories) : ?>
                                <span class="single-post__category">
                                    <?php echo esc_html($categories[0]->name); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <h1 class="single-post__title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="single-post__header">
                <div class="container">
                    <div class="single-post__meta">
                        <span class="single-post__date"><?php echo get_the_date(); ?></span>
                        <?php 
                        $categories = get_the_category();
                        if ($categories) : ?>
                            <span class="single-post__category">
                                <?php echo esc_html($categories[0]->name); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    <h1 class="single-post__title"><?php the_title(); ?></h1>
                </div>
            </div>
        <?php endif; ?>
        
        <div class="single-post__content">
            <div class="container">
                <div class="single-post__body">
                    <?php 
                    while (have_posts()) : 
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
                
                <?php 
                $tags = get_the_tags();
                if ($tags) : ?>
                    <div class="single-post__tags">
                        <span>Tags:</span>
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                
                <nav class="single-post__navigation">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    
                    <?php if ($prev_post) : ?>
                        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="post-nav post-nav--prev">
                            <span class="post-nav__label">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="15 18 9 12 15 6"/>
                                </svg>
                                Previous
                            </span>
                            <span class="post-nav__title"><?php echo get_the_title($prev_post->ID); ?></span>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($next_post) : ?>
                        <a href="<?php echo get_permalink($next_post->ID); ?>" class="post-nav post-nav--next">
                            <span class="post-nav__label">
                                Next
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                            </span>
                            <span class="post-nav__title"><?php echo get_the_title($next_post->ID); ?></span>
                        </a>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
        
    </article>
</main>

<?php
get_footer();
