<?php
/**
 * Location Single - Two cards (each with heading + services: name & time/hours)
 *
 * @package RainTunnelWash
 */

function rtw_location_single_card1_services() {
    $services = array();
    for ( $i = 1; $i <= 5; $i++ ) {
        $name = get_field( 'location_single_card1_service_' . $i . '_name' );
        $time = get_field( 'location_single_card1_service_' . $i . '_time' );
        $name = $name ? trim( (string) $name ) : '';
        $time = $time ? trim( (string) $time ) : '';
        if ( $name !== '' || $time !== '' ) {
            $services[] = array( 'name' => $name, 'time' => $time );
        }
    }
    return $services;
}

function rtw_location_single_card2_services() {
    $services = array();
    for ( $i = 1; $i <= 5; $i++ ) {
        $name        = get_field( 'location_single_card2_service_' . $i . '_name' );
        $description = get_field( 'location_single_card2_service_' . $i . '_description' );
        $name        = $name ? trim( (string) $name ) : '';
        $description = $description ? trim( (string) $description ) : '';
        if ( $name !== '' || $description !== '' ) {
            $services[] = array( 'name' => $name, 'description' => $description );
        }
    }
    return $services;
}

$card1_heading    = get_field( 'location_single_card1_heading' );
$card1_subheading = get_field( 'location_single_card1_subheading' );
$card1_services   = rtw_location_single_card1_services();
$card2_heading    = get_field( 'location_single_card2_heading' );
$card2_subheading = get_field( 'location_single_card2_subheading' );
$card2_services   = rtw_location_single_card2_services();

$has_card1 = $card1_heading || ! empty( $card1_services );
$has_card2 = $card2_heading || ! empty( $card2_services );

if ( ! $has_card1 && ! $has_card2 ) {
    return;
}
?>

<section class="section section--services-list services-cards location-single-cards">
    <div class="container">
        <div class="services-cards__grid location-single-cards__grid">
            <?php if ( $has_card1 ) : ?>
                <div class="location-single-card service-detail-card">
                    <div class="service-detail-card__banner"></div>
                    <div class="service-detail-card__body">
                        <?php if ( $card1_heading ) : ?>
                            <h3 class="location-single-card__heading"><?php echo esc_html( $card1_heading ); ?></h3>
                        <?php endif; ?>
                        <?php if ( $card1_subheading ) : ?>
                            <p class="location-single-card__subheading"><?php echo esc_html( $card1_subheading ); ?></p>
                        <?php endif; ?>
                        <div class="location-single-card__services">
                            <?php
                            foreach ( $card1_services as $index => $row ) {
                                echo '<div class="location-single-card__service-line">';
                                if ( $row['name'] !== '' ) {
                                    echo '<span class="location-single-card__service-name">' . esc_html( $row['name'] ) . '</span>';
                                }
                                if ( $row['time'] !== '' ) {
                                    echo '<span class="location-single-card__service-time">' . esc_html( $row['time'] ) . '</span>';
                                }
                                echo '</div>';
                                if ( $index < count( $card1_services ) - 1 ) {
                                    echo '<hr class="location-single-card__divider" />';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ( $has_card2 ) : ?>
                <div class="location-single-card service-detail-card">
                    <div class="service-detail-card__banner"></div>
                    <div class="service-detail-card__body">
                        <?php if ( $card2_heading ) : ?>
                            <h3 class="location-single-card__heading"><?php echo esc_html( $card2_heading ); ?></h3>
                        <?php endif; ?>
                        <?php if ( $card2_subheading ) : ?>
                            <p class="location-single-card__subheading"><?php echo esc_html( $card2_subheading ); ?></p>
                        <?php endif; ?>
                        <div class="location-single-card__services location-single-card__services--descriptions">
                            <?php
                            foreach ( $card2_services as $index => $row ) {
                                echo '<div class="location-single-card__service-line">';
                                if ( $row['name'] !== '' ) {
                                    echo '<span class="location-single-card__service-name">' . esc_html( $row['name'] ) . '</span>';
                                }
                                if ( $row['description'] !== '' ) {
                                    echo '<span class="location-single-card__service-description">' . wp_kses( nl2br( esc_html( $row['description'] ) ), array( 'br' => array() ) ) . '</span>';
                                }
                                echo '</div>';
                                if ( $index < count( $card2_services ) - 1 ) {
                                    echo '<hr class="location-single-card__divider" />';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
