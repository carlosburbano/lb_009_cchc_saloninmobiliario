<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
		<div class="presentacion jumbotron">
			<div class="container-fluid">
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
				<div class="paisaje row">
					<div class="col-xs-12">
						<div class="casa_amarilla">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/casa_amarilla.png" alt="" class="img-responsive">
						</div>
						<div class="senal_vuelve_casa">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circulo_vuelve_casa.png" alt="" class="img-responsive">
						</div>
						<div class="edificio_gris">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/edificio_gris.png" alt="" class="img-responsive">
						</div>
						<div class="cerro01">
							<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/montana01.png" alt="" class="img-responsive"> -->
						</div>
						<div class="edificio_azul">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/edificio_azul.png" alt="" class="img-responsive">
						</div>
						<div class="casa_verde">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/casa_verde.png" alt="" class="img-responsive">
						</div>
						<div class="cerro02">
							<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/montana02.png" alt="" class="img-responsive"> -->
						</div>
						<div class="cerro03">
							<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/montana03.png" alt="" class="img-responsive"> -->
						</div>
					</div>	
				</div>
				<div class="llamado row">
					<div class="container">
						<div class="col-xs-12">
							<h1>3º SALÓN INMOBILIARIO DE CHILE </h1>
							<h2>10, 11, 12 y 13 DE OCTUBRE</h2>
							<h3>Centro Parque (Avda. Presidente Riesco 5330, nivel A-B)</h3>
						</div>	
					</div>
				</div>
			</div>
		</div>
			
		<div id="main" class="site-main">

		<div class="contenido home container-fluid">
			<div class="destacados row">
				<div class="container">
					<article class="col-xs-12 col-sm-4">
						<a href="">
							<div class="margen_verde">
								<div class="mascara">
									<div class="titulo">
										<p>Compra aquí tu entrada SICH 2014.</p>
									</div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/destacado1.jpg" class="borde_blanco img-responsive" alt="">		
								</div>	
								<span class="btn_mas">
									<p>+</p>
								</span>
							</div>
						</a>	

					</article>
					<article class="col-xs-12 col-sm-4">
						<a href="">
							<div class="margen_verde">
								<div class="mascara">
									<div class="titulo">
										<p>Ubica los stands y actividades en nuestro plano.  </p>
									</div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/destacado2.jpg" class="borde_blanco img-responsive" alt="">		
								</div>	
								<span class="btn_mas">
									<p>+</p>
								</span>
							</div>
						</a>	
					</article>
					<article class="col-xs-12 col-sm-4">
						<a href="">
							<div class="margen_verde">
								<div class="mascara">
									<div class="titulo">
										<p>Conoce a los expositores SICH 2014. </p>
									</div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/destacado3.jpg" class="borde_blanco img-responsive" alt="">		
								</div>	
								<span class="btn_mas">
									<p>+</p>
								</span>
							</div>
						</a>	
					</article>
				</div>
			</div>

			<div class="novedades row">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12">
							<h3>novedades</h3>
						</div>	
					</div>	
				</div>
				<div class="col-xs-12">
					<div class="row">
						<div class="container">
							<?php query_posts( 'post_type=noticias'); ?>
							<?php //while ( have_posts() ) : the_post(); ?>
							<?php $i = 1; while (have_posts() && $i <= 3) : the_post(); ?>
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
												<img src="<?php echo $thumb; ?>" class="borde_blanco img-responsive" alt="<?php echo $alt; ?>">		
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
							<?php $i++; endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>


<?php get_footer();

