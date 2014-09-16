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


		<div class="contenido detalle container-fluid">
			<div class="novedades row">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12">
							<h3>Noticias</h3>
						</div>	
					</div>	
				</div>

				<div class="col-xs-12">
					<div class="row">
						<div class="container">
							<?php
								while ( have_posts() ) : the_post();
									get_template_part( 'content', 'page' );
									if ( comments_open() || get_comments_number() ) {
										comments_template();
									}
								endwhile;
							?>
						</div>
					</div>
				</div>

				<div class="col-xs-12">
					<div class="row">
						<div class="container">


							<!-- NOTICIAS-->
							<div class="row">
								<?php
									query_posts( 'post_type=noticias');
									//Start the Loop.
									while ( have_posts() ) : the_post();

										// Include the page content template.
										get_template_part( 'content', 'noticias' );

										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) {
											comments_template();
										}
									endwhile;
								?>
							</div>
							<!-- NOTICIAS END-->


						</div>
					</div>
				</div>
			</div>
		</div>

<?php
//get_sidebar();
get_footer();
