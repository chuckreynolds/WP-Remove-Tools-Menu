=== Remove Tools Menu ===
Contributors: ryno267
Donate link: http://rynoweb.com/wordpress-plugins/
Tags: admin, tools, tool menu, tools menu, remove tools, admin menu
Requires at least: 3.2
Tested up to: 4.0
Stable tag: 2.1

Super simple plugin to remove the Tools menu from WordPress Admin


== Description ==

This plugin does exactly what the title says, when activated will remove the Tools menu from your WordPress Admin navigation menu. If you need import, export, or get the press-this bookmarklet again, simply deactivate the plugin, do your thing, then re-enable the Remove Tools Menu plugin to remove it again and keep it out of your way. NOTE: there are certain plugins that add things to the Tools menu... those obviously won't show up either but the plugin still does what it was built to do. Have fun.


== Installation ==

1. Upload the `remove-tools-menu` folder to the `/wp-content/plugins/` directory
1. Activate the Remove Tools Menu plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= Why did you create this as a plugin? =

Why not? In all the WP sites I've ever had I think I've only used the Import/Export thing like four times ever. For everyday normal use I got tired of it getting in my way. I created this plugin to share as others may want to hide it until needed.


== Upgrade Notice ==
= 2.1 =
* tested to 3.9

= 2.0 =
* This update addresses issues with the media library being blank

== Changelog ==
= 2.0 =
* changed filter when plugin runs - was causing issues with media library display from post insert
* also took out legacy crap and made this plugin require WP version 3.1+

= 1.2 =
* Updated to admin_init action hook. Works either way but the new correct way is init.
* Little code cleanup and readme update
* No new features, does the same thing :)

= 1.1 =
* Now checks if remove_menu_page function exists and uses that if it does and will default to older method if not.

= 1.0 =
* Initial release
