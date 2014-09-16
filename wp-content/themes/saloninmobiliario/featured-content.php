<?php
/**
 * The template for displaying featured content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
			<div class="destacados row">
				<div class="container">
					<article class="col-xs-12 col-sm-4">
						<a href="">
							<div class="margen_verde">
								<div class="mascara">
									<div class="titulo">
										<p>Compra aquí tu entrada SICH 2014.</p>
									</div>
									<img src="image/destacado1.jpg" class="borde_blanco img-responsive" alt="">		
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
									<img src="image/destacado2.jpg" class="borde_blanco img-responsive" alt="">		
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
									<img src="image/destacado3.jpg" class="borde_blanco img-responsive" alt="">		
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
							<article class="col-xs-12 col-sm-4">
						<a href="">
							<div class="margen_blanco">
								<div class="mascara">
									<div class="titulo">
										<p>Conoce a los expositores SICH 2014. </p>
									</div>
									<img src="image/destacado3.jpg" class="borde_blanco img-responsive" alt="">		
								</div>	
								<span class="btn_mas">
									<p>+</p>
								</span>
							</div>
						</a>	
							</article>
							<article class="col-xs-12 col-sm-4">
						<a href="">
							<div class="margen_blanco">
								<div class="mascara">
									<div class="titulo">
										<p>Conoce a los expositores SICH 2014. </p>
									</div>
									<img src="image/destacado3.jpg" class="borde_blanco img-responsive" alt="">		
								</div>	
								<span class="btn_mas">
									<p>+</p>
								</span>
							</div>
						</a>	
							</article>
							<article class="col-xs-12 col-sm-4">
						<a href="">
							<div class="margen_blanco">
								<div class="mascara">
									<div class="titulo">
										<p>Conoce a los expositores SICH 2014. </p>
									</div>
									<img src="image/destacado3.jpg" class="borde_blanco img-responsive" alt="">		
								</div>	
								<span class="btn_mas">
									<p>+</p>
								</span>
							</div>
						</a>	
							</article>
						</div>
					</div>
				</div>
			</div>

			
<div id="featured-content" class="featured-content">
	<div class="featured-content-inner">
	<?php
		/**
		 * Fires before the Twenty Fourteen featured content.
		 *
		 * @since Twenty Fourteen 1.0
		 */
		do_action( 'portalinmobiliario_featured_posts_before' );

		$featured_posts = portalinmobiliario_get_featured_posts();
		foreach ( (array) $featured_posts as $order => $post ) :
			setup_postdata( $post );

			 // Include the featured content template.
			get_template_part( 'content', 'featured-post' );
		endforeach;

		/**
		 * Fires after the Twenty Fourteen featured content.
		 *
		 * @since Twenty Fourteen 1.0
		 */
		do_action( 'portalinmobiliario_featured_posts_after' );

		wp_reset_postdata();
	?>
	</div><!-- .featured-content-inner -->
</div><!-- #featured-content .featured-content -->
