<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class="four small-12 medium-4 columns paddingzero marginzero left">
	<div class="twelve small-12 columns paddingzero hg-recorte">
		<?php
			$image = get_field('imagen_destacada');
			$size = 'imagen-destacada-home';
			if( $image ) {
				echo wp_get_attachment_image( $image, $size );
			}
		?>
	</div>
	<div class="twelve columns small-12 columns txthighlight1">
<!-- 		<h6><?php the_title(); ?></h6>
		<a href="<?php 
					$link = get_field('link_destacado');
					if( !empty($link) ): ?>
						<?php echo $link; ?>
				<?php endif; ?>">&gt;
		</a>
		<br>
		<br> -->
		<!-- LINK CON FORMATO BUENO -->
		<a href="<?php
					$link = get_field('link_destacado');
					if( !empty($link) ): ?>
						<?php echo $link; ?>
				<?php endif; ?>">
			<?php the_title(); ?>
		</a>
		<!-- LINK CON FORMATO BUENO END -->
	</div>
</div>