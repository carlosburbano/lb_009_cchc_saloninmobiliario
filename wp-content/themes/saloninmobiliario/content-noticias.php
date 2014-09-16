<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="container">
						<div class="col-xs-12">
							<?php the_title( '<h1 class="titulo_pagina">', '</h1><!-- .entry-header -->' ); ?>
							<div id="redes_fixed" data-spy="affix" class="affix hidden-xs">
								<p>Compartir:</p>
								<div class="fb-share-button" data-href="http://saloninmobiliario.cl/"></div>
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=499601146833008&version=v2.0";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>

								<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://saloninmobiliario.cl/" data-lang="es" data-count="none">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

								<script src="//platform.linkedin.com/in.js" type="text/javascript">lang: es_ES</script>
								<script type="IN/Share" data-url="http://saloninmobiliario.cl/"></script>
							</div>
							
							<div class="casa_verde_header">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_casas_01.png" alt="" class="img-responsive">
							</div>
							<div class="casa_sombra_header">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_casas_03.png" alt="" class="img-responsive">
							</div>
							<div class="edificio_gris_header">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_casas_02.png" alt="" class="img-responsive">
							</div>
							<div class="casa_naranja_header">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_casas_04.png" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="contenido detalle container-fluid">
			<div class="row" id="post-<?php the_ID(); ?>">
				<div class="container">
					<div class="centrado col-xs-10 col-xs-offset-1">
						<div class="resumen">
							<div class="header">
								<!-- <div class="fecha">
									<span>09</span>
									<span>10</span>
									<span>2014</span>
								</div> -->
								<!-- <div class="compartir_post">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Compartir <span class="btn_compartir"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Facebook</a></li>
											<li><a href="#">Twitter</a></li>
										</ul>
									</li>
								</div> -->
							</div>
							<!-- <h1 class="titulo_resumen col-xs-12">fotos destacadas  (h3) títulos</h1> -->
							<?php
								$imagen = get_field('imagen');
								if(get_field('imagen')):
									$alt = $image['alt'];
									$size = 'imagen-superior-pagina';
									$thumb = $imagen['sizes'][ $size ];
							?>
								<img src="<?php echo $thumb; ?>" class="fondo img-responsive" alt="<?php echo $alt; ?>">		
							<?php endif; ?>
		
						</div>
						
						<?php
							the_content();
							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'portalinmobiliario' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) );

							edit_post_link( __( 'Edit', 'portalinmobiliario' ), '<span class="edit-link">', '</span>' );
						?>

					</div>
				</div>
			</div>
		</div>

