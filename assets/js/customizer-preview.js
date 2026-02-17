/**
 * Customizer Preview Script
 *
 * Live-updates the theme customizer preview when settings change.
 *
 * @package RainTunnelWash
 */

(function($) {
    'use strict';

    // Primary Color
    wp.customize('rtw_primary_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--color-primary', newval);
        });
    });

    // Secondary Color
    wp.customize('rtw_secondary_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--color-secondary', newval);
        });
    });

    // Accent Color
    wp.customize('rtw_accent_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--color-accent', newval);
        });
    });

})(jQuery);
