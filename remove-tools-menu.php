<?php
/**
 * Remove Tools Menu
 *
 * @package           Remove_Tools_Menu
 * @author            Chuck Reynolds
 * @link              https://chuckreynolds.com
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Remove Tools Menu
 * Plugin URI:        https://wordpress.org/plugins/remove-tools-menu/
 * Description:       Super simple plugin to remove the Tools menu from WordPress Admin Menu
 * Version:           2.5.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Chuck Reynolds
 * Author URI:        https://chuckreynolds.com
 * Text Domain:       remove-tools-menu
 * License:           GPLv2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Only run in the admin.
if ( ! is_admin() ) {
	return;
}

/**
 * Removes the Tools menu from the WordPress admin navigation.
 *
 * @return void
 */
function chuck_remove_tools_menu(): void {
	remove_menu_page( 'tools.php' );
}
add_action( 'admin_menu', 'chuck_remove_tools_menu', 999 );
