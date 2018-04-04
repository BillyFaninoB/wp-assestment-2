<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_bloginfo('name'); ?></title>
</head>
<header>
<?php wp_head(); ?>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</header>
<body>
	<span>x</span>
<?php get_sidebar(); ?>

