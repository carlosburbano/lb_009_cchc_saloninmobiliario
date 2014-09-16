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

		<div class="contenido expositores container-fluid">

			<div class="destacados row">
				<div class="container">
					<article class="col-xs-12 col-sm-6 col-md-3">
						<a href="proyectos-inmobiliarios">
							<div class="margen_verde">
								<div class="mascara">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icono_proyecto.jpg" class="borde_blanco img-responsive" alt="">		
								</div>	
								<span class="btn_mas">
									<p>+</p>
								</span>
							</div>
							<div class="col-xs-12">
								<h2>Proyectos Inmobiliarios</h2>
							</div>							
						</a>	

					</article>
					<article class="col-xs-12 col-sm-6 col-md-3">
						<a href="financiamiento">
							<div class="margen_verde">
								<div class="mascara">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icono_finacimiento.jpg" class="borde_blanco img-responsive" alt="">		
								</div>	
								<span class="btn_mas">
									<p>+</p>
								</span>
							</div>
							<div class="col-xs-12">
								<h2>financiamiento</h2>
							</div>
						</a>	
					</article>
					<article class="col-xs-12 col-sm-6 col-md-3">
						<a href="decoracion">
							<div class="margen_verde">
								<div class="mascara">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icono_decoracion.jpg" class="borde_blanco img-responsive" alt="">		
								</div>	
								<span class="btn_mas">
									<p>+</p>
								</span>
							</div>
							<div class="col-xs-12">
								<h2>DEcoración</h2>
							</div>								
						</a>	
					</article>
					<article class="col-xs-12 col-sm-6 col-md-3">
						<a href="otros">
							<div class="margen_verde">
								<div class="mascara">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icono_otros.jpg" class="borde_blanco img-responsive" alt="">		
								</div>	
								<span class="btn_mas">
									<p>+</p>
								</span>
							</div>
							<div class="col-xs-12">
								<h2>otros</h2>
							</div>								
						</a>	
					</article>
				</div>
			</div>

		</div>

