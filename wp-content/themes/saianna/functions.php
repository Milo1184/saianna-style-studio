<?php
/*
Saianna Style Studio Theme Functions
By: Aakash Bhatia
http://thebrauxelcode.com/
*/

add_theme_support( 'post-thumbnails' );
add_image_size( 'blog-thumb', 450, 200, true );

// Register Main Menu
register_nav_menus( array(
	'main' => 'Main Menu',
	'footer' => 'Footer Menu'
) );

?>