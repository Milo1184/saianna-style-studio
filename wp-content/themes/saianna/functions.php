<?php
/*
Saianna Style Studio Theme Functions
By: Aakash Bhatia
http://thebrauxelcode.com/
*/

add_theme_support( 'post-thumbnails' );

// Register Main Menu
register_nav_menus( array(
	'main' => 'Main Menu',
	'footer' => 'Footer Menu'
) );

?>