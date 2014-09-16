<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class="variedad twelve small-12 columns paddingzero marginzero">
		<?php
			// $image = get_field('imagen_destacada');
			// $size = 'imagen-destacada-home';
			// if( $image ) {
			// 	echo wp_get_attachment_image( $image, $size );
			// }
		?>
<!-- 		imagen: <?php// the_field('imagen') ?><br>
		título: <?php// the_title(); ?><br>
		subtitulo: <?php// the_field('subtitulo') ?><br>
		texto abajo: <?php// the_field('texto_inferior') ?><br>
		<br>-------------- <br> -->
		<div class="contenido_variedad">
			<img src="<?php the_field('imagen') ?>" alt="<?php the_title(); ?>">
			<div class="info_variedad">
				<h2><?php the_title(); ?></h2>
				<h3><?php the_field('subtitulo') ?></h3>
				<?php the_content(); ?>
				
				<span><?php the_field('texto_inferior') ?></span>
			</div>
		</div>
		
</div>