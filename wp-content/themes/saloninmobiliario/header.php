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
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>

		<?php if ( dynamic_sidebar('header_widget') ) : ?>
		<?php endif; ?>
		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_principal">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url(); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mediocirculo_blanco.png" alt="" class="soporte">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_sich.png" alt="" class="marca">
					</a>

					<button type="button" class="navbar-toggle collapsed compartir" data-toggle="collapse" data-target="#compartir">
						<span class="sr-only">Toggle navigation</span>
						<span class="glyphicon glyphicon-share btn-lg"></span>
					</button>
				</div>
				<div class="collapse" id="compartir">
					<ul class="nav navbar-nav navbar-right  hidden-lg">
						<li>
							<div class="fb-share-button" data-href="http://conferenciaciudad.cl/"></div>
							<div id="fb-root"></div>
							<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=499601146833008&version=v2.0"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
						</li>
						<li>
							<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://conferenciaciudad.cl/" data-lang="es" data-count="none">Twittear</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							
						</li>
						<li>
							<script src="//platform.linkedin.com/in.js" type="text/javascript">lang: es_ES</script>
							<script type="IN/Share" data-url="http://conferenciaciudad.cl/"></script>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse" id="menu_principal">
					<!-- <ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="quienes_somos.php" class="dropdown-toggle clickable" data-toggle="dropdown" data-hover="dropdown">Quienes Somos</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Cómo llegar</a></li>
								<li><a href="#">Plano de la Feria</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="expositores.php" class="dropdown-toggle clickable" data-toggle="dropdown" data-hover="dropdown">Expositores</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="expositores.php">Proyectos Inmobiliarios</a></li>
								<li><a href="#">Financiamiento</a></li>
								<li><a href="#">Decoración</a></li>
								<li><a href="#">Otros</a></li>
							</ul>
						</li>
						<li><a href="#">Actividades</a></li>
						<li><a href="#">Noticias</a></li>
						<li><a href="#">Servicios</a></li>
						<li><a href="#">Contacto</a></li>			
					</ul> -->

					<?php

					$args = array(
						'authors'      => '',
						'child_of'     => 0,
						'date_format'  => get_option('date_format'),
						'depth'        => 0,
						'echo'         => 1,
						'exclude'      => '',
						'include'      => '',
						'link_after'   => '',
						'link_before'  => '',
						'post_type'    => 'page',
						'post_status'  => 'publish',
						'show_date'    => '',
						'sort_column'  => 'menu_order, post_title',
						    'sort_order'   => '',
						'title_li'     => __('Pages'), 
						'walker'       => ''
					);

						echo '<ul class="nav navbar-nav navbar-right">';
								wp_list_pages(array('title_li'=>'', 'walker'=>new bb_extended_page_walker()));
						echo '</ul>';
					?>
				</div>
			</div>
		</nav>

