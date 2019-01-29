=== Plugin Name ===
Contributors: H3llas
Tags: password, reset, disable
Requires at least: 3.1
Tested up to: 4.6.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enhance security of your blogs by preventing password reset over email function.

== Description ==

This plugin will enhance security of your Wordpress site by disabling password reset function over email of Wordpress. 
Use with caution since otherwise if you forgot your user password you will need to reset the password directly in the database with phpmyadmin or similar tool. 
Adittionally this plugin will hide notice which say what is wrong "password" or "username" on Wordpress login page.

== Installation ==

1. Upload `disablepasswordreset.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What if I forgot my password? =

You should reset it through phpmyadmin.
More info here:
http://codex.wordpress.org/Resetting_Your_Password

= Is this definitive protection? =

Certainly not. It will rather set off script kiddies.

== Changelog ==

= 1.0 =
First version with basic functionalities.