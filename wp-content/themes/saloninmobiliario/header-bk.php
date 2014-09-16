<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->


<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<!-- Foundation 3 for IE 8 and earlier -->
<!--[if lt IE 9]>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/foundation3/normalize.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/foundation3/foundation.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/foundation3/app.css">
<![endif]-->
<!-- Foundation 4 for IE 9 and earlier -->
<!--[if gt IE 8]><!-->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/foundation.css">
<!--<![endif]-->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site twelve columns">
		<!-- IDIOMA -->
		<div class="row menu_idioma">	
			<div class="twelve small-12">
				<nav class="menu-idioma" data-topbar="">	
					<section class="top-bar-section">
						<?php if ( dynamic_sidebar('header_widget') ) : ?>
						<?php endif; ?>
					</section>
					<section class="align_social_header">
						<a class="headersocialfb" target="_blank" href="http://www.facebook.com/">fb</a>
						<a class="headersocialtw" target="_blank" href="https://twitter.com/">tw</a>
						<h4>Siguenos en: </h4>
					</section>
				</nav>
			</div>
		</div>
		<!-- IDIOMA end -->
		<!-- MENU NAV -->
		<div class="row cabecera">
			<nav class="top-bar twelve columns" data-topbar="">
				<ul class=" two columns title-area">
					<?php if ( get_header_image() ) : ?>
					<li class="name">
						<div class="twelve small-7 medium-12 columns paddingzero">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
							</a>
						</div>
					</li>
					<?php endif; ?>
					<li class="toggle-topbar"><!-- menu-icon -->
						<a href="#"><span>Menu</span></a>
					</li>
				</ul>
					
				<section class="ten columns top-bar-section">
					<?php
						wp_nav_menu( array( 'menu_class' => 'twelve right', 'walker'=>new bb_extended_walker() ) );
					?>
				</section>
			</nav>
		</div>
		<!-- MENU NAV END -->
	</div>
	<div id="main" class="twelve site-main">
