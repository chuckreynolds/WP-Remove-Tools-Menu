=== Remove Tools Menu ===
Contributors: ryno267
Donate link: https://buymeacoffee.com/chuckreynolds
Tags: tool menu, tools menu, remove tools, admin menu
Requires at least: 5.2
Tested up to: 6.9.1
Requires PHP: 7.4
Stable tag: 2.5.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Super simple plugin to remove the Tools menu from WordPress Admin Menu

== Description ==
This plugin does exactly what the title says, when activated it will remove the Tools menu from your WordPress Admin navigation menu. If you need import, export or if any of your plugins add sub-items into it, simply deactivate the plugin, do your thing, then re-enable the Remove Tools Menu plugin to remove Tools menu item again and keep it out of your way. NOTE: there are certain plugins that add things to the Tools menu... those obviously won't show up either but the plugin still does what it was built to do. Have fun.

== Installation ==
1. Upload the `remove-tools-menu` folder to the `/wp-content/plugins/` directory
1. Activate the Remove Tools Menu plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==
= Why did you create this as a plugin? =
Why not? In all the WP sites I've ever had I think I've only used the Import/Export thing like four times ever. For everyday normal use I got tired of it getting in my way. I created this plugin (in may 2011) to share as others may want to hide it until needed.

== Changelog ==
= 2.5.0 =
Release Date - 2026-03-09

* Tested to WP 6.9.1
* Updated minimum requirements: WordPress 5.2+, PHP 7.4+
* Modernized plugin headers to current WordPress standards
* Added is_admin() early return for clarity and correctness
* Renamed function to chuck_remove_tools_menu for clarity

= 2.4.0 =
Release Date - 2025-06-26

* Tested to WP 6.8.1

= 2.3.1 =
Release Date - 2017-11-24

* Tested to WP 4.9

= 2.3 =
Release Date - 2017-03-29

* tested up to WP 4.8
* Security so it's not accessed directly w/o wp loading

= 2.2 =
* Tested to WP 4.2

= 2.0 =
* Changed filter when plugin runs - was causing issues with media library display from post insert
* Also took out legacy crap and made this plugin require WP version 3.1+

= 1.2 =
* Updated to admin_init action hook. Works either way but the new correct way is init.
* Little code cleanup and readme update
* No new features, does the same thing :)

= 1.1 =
* Now checks if remove_menu_page function exists and uses that if it does and will default to older method if not.

= 1.0 =
* Initial release
