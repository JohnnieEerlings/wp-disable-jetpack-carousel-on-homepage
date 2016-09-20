<?php
/**
 * Plugin Name: Disable Jetpack Carousel on homepage
 * Description: Disables Jetpack Carousel on homepage.
 * Version: 1.0.0
 * Author: Johnnie
 * License: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// No direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Disable Jetpack Carousel on homepage
 *
 * @since 1.0
 * @param bool $value Current state of Carousel enablement
 * @return bool True if homepage detected, to disable Carousel
 */
function djcoh_disable_carousel( $value ) {

	// Is this the front page?
	if ( $_SERVER["REQUEST_URI"] == '/' ) {
		$value = true; // true to disable Carousel
	}

	// Return original or changed value
	return $value;

}

add_filter( 'jp_carousel_maybe_disable', 'djcoh_disable_carousel' );
