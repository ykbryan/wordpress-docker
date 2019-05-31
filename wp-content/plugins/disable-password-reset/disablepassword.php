<?php
/*
Plugin Name: Disable Password Reset
Plugin URI: 
Description: This plugin will enhance security of your Wordpress site by disabling password reset function over email of Wordpress. 
Use with caution since otherwise if you forgot your user password you will need to reset the password directly in the database with phpmyadmin or similar tool. 
Adittionally this plugin will hide notice which say what is wrong "password" or "username" on Wordpress login page. 
Version: 1.0
Author: H3llas
Author URI: http://www.ascic.net/
License: GNU GPL
*/
function disable_password_reset() { return false; }
add_filter ( 'allow_password_reset', 'disable_password_reset' );
add_filter('login_errors',create_function('$a', "return 'Operation failed!';"));
?>