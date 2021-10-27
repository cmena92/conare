<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
   
   <!-- Fonts Google Cabin -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/all.min.css" type="text/css" media="screen" />
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>

	<!-- Owl-Carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owlcarousel/owl.carousel.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owlcarousel/owl.theme.default.min.css" type="text/css" media="screen" />
   <script src="<?php bloginfo('template_url'); ?>/js/owlcarousel/owl.carousel.min.js"></script>
	
	
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
   
 <?php //wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>