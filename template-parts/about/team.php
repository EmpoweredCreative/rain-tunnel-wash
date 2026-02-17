<?php
/**
 * Template Part: About Team
 *
 * @package RainTunnelWash
 */

$heading = get_field('team_heading') ?: 'Meet Our Team';
$subheading = get_field('team_subheading');
$team = get_field('team_members');

if (!$team) return;
?>

<section class="section section--team">
    <div class="container">
        <div class="section__header animate-on-scroll">
            <h2 class="section__title"><?php echo esc_html($heading); ?></h2>
            <?php if ($subheading) : ?>
                <p class="section__subtitle"><?php echo esc_html($subheading); ?></p>
            <?php endif; ?>
        </div>
        
        <div class="team-grid">
            <?php foreach ($team as $index => $member) : ?>
                <div class="team-card animate-on-scroll" style="--delay: <?php echo $index * 0.1; ?>s">
                    <div class="team-card__image">
                        <?php if ($member['photo']) : ?>
                            <img src="<?php echo esc_url($member['photo']['sizes']['team'] ?? $member['photo']['url']); ?>" 
                                 alt="<?php echo esc_attr($member['name']); ?>"
                                 loading="lazy">
                        <?php else : ?>
                            <div class="team-card__placeholder">
                                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="team-card__content">
                        <h3 class="team-card__name"><?php echo esc_html($member['name']); ?></h3>
                        <?php if ($member['role']) : ?>
                            <p class="team-card__role"><?php echo esc_html($member['role']); ?></p>
                        <?php endif; ?>
                        <?php if ($member['bio']) : ?>
                            <p class="team-card__bio"><?php echo esc_html($member['bio']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
