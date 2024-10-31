<?php
/*
Plugin Name: WP Pages Only
Plugin URI: http://www.ear-fung.us
Description: Removes the pages link from administration panel.
Author: Mark Rickert
Version: 1.0
Author URI: http://www.ear-fung.us
*/ 

function pages_only()
{
	global $menu;
	
	$menu[5][1] = "edit_pages";
	$menu[5][2] = "page-new.php";
	
	$menu[10][1] = "edit_pages";
	$menu[10][2] = "edit-pages.php";
	
}
add_action('admin_menu', 'pages_only');

?>