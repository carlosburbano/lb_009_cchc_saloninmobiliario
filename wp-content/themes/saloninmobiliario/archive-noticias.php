<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="container">
						<div class="col-xs-12">
							<h1 class="titulo_pagina">Noticias</h1>
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

		<div class="contenido home container-fluid">
			<div class="novedades row">
				<div class="container">
				<div class="col-xs-12">
					<div class="row">
						<div class="container">
							<h1><?php get_post_format(); ?></h1>

							<?php while ( have_posts() ) : the_post(); ?>

							<article class="col-xs-12 col-sm-4">
								<a href="<?php the_permalink() ?>">
									<div class="margen_blanco">
										<div class="mascara">
											<div class="titulo">
												<p><?php the_title(); ?></p>
											</div>
											<?php
												$imagen = get_field('imagen');
												if(get_field('imagen')):
													$alt = $image['alt'];
													$size = 'imagen-listado';
													$thumb = $imagen['sizes'][ $size ];
											?>
												<img src="<?php echo $thumb; ?>" class="borde_blanco img-responsive" alt="<?php echo $thumb; ?>">		
											<?php else: ?>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icono_nophoto_small.jpg" class="borde_blanco img-responsive">		
											<?php endif; ?>
										</div>	
										<span class="btn_mas">
											<p>+</p>
										</span>
									</div>
								</a>	
							</article>

							<?php endwhile; // end of the loop. ?>

						</div>
					</div>
				</div>
				</div>
			</div>
		</div>

<?php
//get_sidebar();
get_footer();