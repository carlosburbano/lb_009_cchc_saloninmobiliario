<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->
		<?php get_sidebar( 'footer' ); ?>
		<?php wp_footer(); ?>


		<footer>
			<div class="container-fluid">
				<div class="senales_footer row">
					<div class="col-xs-12">
						<div class="senal_izquierda">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_casas_07.png" alt="">
						</div>
						<div class="senal_centro">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_casas_10.png" alt="">
						</div>
						<div class="senal_derecha">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_casas_12.png" alt="">
						</div>

					</div>
				</div>
				<div class="marcas_footer row">
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<h4>Media Partners:</h4>
								<div class="marcas">
									<div class="col-xs-5">
										<a href="http://www.multimediosglp.cl/" target="_blank"> 
											<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/multimedios.png" alt="">
										</a>
									</div>
									<div class="col-xs-3">
										<a href="http://www.mega.cl/" target="_blank"> 
											<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mega.png" alt="">
										</a>
									</div>
									<div class="col-xs-4">
										<a href="http://www.latercera.com/" target="_blank"> 
											<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/latercera.png" alt="">
										</a>
									</div>
								</div>	
							</div>
							<div class="col-xs-12 col-sm-6">
								<h4>Media Partners:</h4>
								<div class="marcas">
									<div class="col-xs-3">
										<a href="http://www.scotiabankchile.cl/" target="_blank"> 
											<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/scotiabank.png" alt="">
										</a>
									</div>	
									<div class="col-xs-3">
										<a href="http://www.bci.cl/" target="_blank"> 
											<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/bci.png" alt="">
										</a>
									</div>	
									<div class="col-xs-3">
										<a href="http://www.bancoestado.cl/" target="_blank"> 
											<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/bancoestado.png" alt="">
										</a>
									</div>	
									<div class="col-xs-3">
										<a href="http://www.abcdin.cl/" target="_blank"> 
											<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/abcdin.png" alt="">
										</a>
									</div>	
								</div>	

							</div>
							<div class="col-xs-12 col-sm-2">
								<h4>Organiza:</h4>
								<div class="marcas">
									<div class="col-xs-4 col-sm-12">
										<a href="http://www.cchc.cl/" target="_blank"> 	
											<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_cchc.png" alt="">
										</a>
									</div>	
								</div>	
							</div>
						</div>
						
					</div>
				</div>
				<div class="info_footer row">
					<div class="col-xs-12">
						<div class="col-xs-12 col-sm-3">
							<p>©SICH 2014. Todos los derechos reservados</p>
						</div>
						<div class="col-xs-12 col-sm-6">
							<a href="index.php" target="_blank"> 
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo-sich.png" alt="" class="img-responsive">
							</a>
						</div>
						<div class="redes col-xs-12 col-sm-2 col-sm-push-1">
							<div class="row">
								<a href="https://www.linkedin.com/company/c%C3%A1mara-chilena-de-la-construcci%C3%B3n?trkInfo=tarId%3A1410296585869%2Ctas%3Acamara+chilena+de+la+%2Cidx%3A1-1-1&trk=tyah" class="linkedin col-xs-3" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_social-icon_in.png" alt="" class="img-responsive">
								</a>
								<a href="https://twitter.com/camaracchc" class="twitter col-xs-3" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_social-icon_tw.png" alt="" class="img-responsive">
								</a>
								<a href="https://www.facebook.com/camarachilenadelaconstruccion" class="facebook col-xs-3" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_social-icon_fb.png" alt="" class="img-responsive">
								</a>
								<a href="https://www.youtube.com/channel/UCWboB0FRrnAWlvuIM0druww" class="youtube col-xs-3" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_social-icon_youtube.png" alt="" class="img-responsive">
								</a>
							</div>
							<p>construyendo redes sociales</p>
						</div>
					</div>
				</div>
			</div>
		</footer>	

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/enquire.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/bootstrap-hover-dropdown.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/placeholders.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/respond.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/selectivizr-min.js"></script>


		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<!--analytics-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-48622229-1', 'saloninmobiliario.cl');
		  ga('send', 'pageview');
		</script>
	</body>
</html>