<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section id="slider-seccion">

		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26033.845558497233!2d-70.98921816829495!3d-34.600001963024035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2scl!4v1403882911932" width="1680" height="600" frameborder="0" style="border:0"></iframe>
		<div class="row texto-superior-seccion" id="">
			<div class="twelve small-12 small-centered columns contenedorsuperior paddingzero">
				<div class="row">
					<?php the_title( '<h1>', '</h1><!-- .entry-header -->' ); ?>
				</div>
			</div>
		</div>
	</section>
	
			<div class="row contenido_pagina" >
			<div class="twelve small-12 medium-12 large-8 right">
				<p>
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
				</p>
			</div>
		</div>
	
	
	<div class="entry-content">

	</div><!-- .entry-content -->
</article><!-- #post-## -->
