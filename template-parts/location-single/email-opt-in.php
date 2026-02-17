<?php
/**
 * Location Single - Email opt-in (same as service single)
 *
 * @package RainTunnelWash
 */

$heading = get_field('location_single_email_heading') ?: 'Local car wash deals and updates delivered to your inbox.';
$subtext = get_field('location_single_email_subtext') ?: 'No spam, just helpful updates and irresistible offers.';
?>

<section class="email-signup-bar email-signup-bar--blue">
    <div class="email-signup-bar__wrap">
        <div class="email-signup-bar__inner">
            <div class="email-signup-bar__text">
                <p class="email-signup-bar__heading"><?php echo esc_html($heading); ?></p>
                <p class="email-signup-bar__subtext"><?php echo esc_html($subtext); ?></p>
            </div>
            <form class="email-signup-bar__form" action="#" method="post">
                <input type="email" name="email" placeholder="Email" class="email-signup-bar__input" required>
                <button type="submit" class="email-signup-bar__submit">Send</button>
            </form>
        </div>
    </div>
</section>
