<?php
/**
 * Plugin Name: Menu Email Antispam
 * Plugin URI: https://github.com/ruandre/menu-email-antispam
 * Description: Protect email addresses in WordPress menus via `antispambot()`
 * Version: 1.0.0
 * Author: Ruandre Janse Van Rensburg
 * Author URI: https://github.com/ruandre
 * Network: true
 * License: GNU General Public License v2 or later
 */

if ( ! function_exists( 'ruandre_menu_email_antispam' ) ) {
	function ruandre_menu_email_antispam( $link ) {

		$href = $link['href'];

		// If the link starts with mailto i.e. is an email link:
		if ( $href && preg_match( '/^mailto/i', $href ) ) {

			// Replace it with a "protected" version:
			$href = preg_replace( '/^mailto:(.*)/i', '$1', $href );
			$href = 'mailto:' . antispambot( $href, 1 );

			$link['href'] = $href;
		}

		return $link;
	}
	add_filter( 'nav_menu_link_attributes', 'ruandre_menu_email_antispam' );
}
