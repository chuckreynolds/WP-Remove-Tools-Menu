<?php
/**
 * Plugin Name:       Remove Tools Menu
 * Plugin URI:        https://wordpress.org/plugins/remove-tools-menu/
 * Description:       Super simple plugin to remove the Tools menu from WordPress Admin Menu
 * Version:           2.4.0
 * Author:            Chuck Reynolds
 * Author URI:        https://chuckreynolds.com
 * Requires at least: 3.2
 * Tested up to:      6.8.1
 * License:           GPLv2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       remove-tools-menu
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Main function that removes the tools menu
 */
function chuck_says_dont_be_a_tool() {
	if ( function_exists( 'remove_menu_page' ) ) {
		remove_menu_page( 'tools.php' );
	}
}
add_action( 'admin_menu', 'chuck_says_dont_be_a_tool', 999 );
