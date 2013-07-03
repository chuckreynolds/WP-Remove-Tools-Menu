<?php
/*
Plugin Name:    Remove Tools Menu
Plugin URI:     http://wordpress.org/extend/plugins/remove-tools-menu/
Description:    Super simple plugin to remove the Tools menu from WordPress Admin - just because.
Version:        2.0
Author:         Chuck Reynolds
Author URI:     http://chuckreynolds.us
License:        GPL v3
License URI:    http://www.gnu.org/licenses/gpl-3.0.html
*/
/*
	Copyright 2011 WordPress Remove Tools Menu plugin (email: chuck@rynoweb.com)

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, version 3 of the License.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see http://www.gnu.org/licenses/gpl-3.0.html
*/

function chuck_says_dont_be_a_tool () {

	if (function_exists('remove_menu_page')) {
		remove_menu_page('tools.php');
	}

}
add_action('admin_menu', 'chuck_says_dont_be_a_tool');
