<!DOCTYPE html>
<html>
<head>
    <link href="<?php bloginfo( 'template_url' ); ?>/css/fancybox.css" rel="stylesheet" media="all">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/saianna-style-studio.css" rel="stylesheet" media="all">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width" />

    <title><?php wp_title( '' ); ?></title>

    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-ui.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/responsiveslides.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/fancybox.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
    	<div class="wrap">
        	<a href="index.html" id="logo">Saianna Style Studio</a>
            <?php wp_nav_menu( array('menu' => 'Main Menu','menu_id' => 'main-menu', 'container' => 'nav') ) ?>
        <!-- div.wrap ENDS -->
		</div>
    </header>