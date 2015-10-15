<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheAsianVegan
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- the asian vegan stylesheets -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/asset/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/asset/css/bootstrap-theme.min.css"> -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/asset/css/font-awesome/css/font-awesome.min.css" >
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/asset/css/custom.css">

<?php wp_head(); ?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theasianvegan' ); ?></a>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">TAV</a>
			</div>

			<?php 
			$items_wrap_social = '<ul id="%1$s" class="%2$s">%3$s</ul><ul class="nav navbar-nav navbar-right nav-pills social"><li class="facebook"><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li><li class="twitter"><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li><li class="youtube"><a href="#"><i class="fa fa-lg fa-youtube"></i></a></li><li class="instagram"><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li></ul>';

			wp_nav_menu( array(
			'theme_location'	=> 'primary',
			'container'			=> 'nav',
			'container_class'	=> 'navbar-collapse collapse',
			'menu_class'		=> 'nav navbar-nav ',
			'items_wrap'		=> $items_wrap_social,
			)); ?>

			

			
		</div>
	</nav>
