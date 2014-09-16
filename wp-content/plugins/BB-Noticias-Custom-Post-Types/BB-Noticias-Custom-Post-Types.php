<?php
/*
Plugin Name: BB Noticias Custom Post Types
Description: Custom Post Types para las Noticias.
Author: Carlos Burbano
Author URI: http://www.bitbang.cl
*/

add_action( 'init', 'bb_noticias_cpt' );

function bb_noticias_cpt() {

	register_post_type( 'noticias', array(
		'labels' => array(
			'name' => 'Noticias',
			'singular_name' => 'Noticia',
		),
		'description' => 'Noticias.',
		'public' => true,
		'has_archive' => true, //necesito este para que se muestre el listado en su propio directorio (ej: misitio.cl/book)
		'menu_position' => 21,
		'show_in_nav_menus' => true,
		'supports' => array( 'title', 'editor', 'custom-fields' ),
		// 'rewrite' => array( 'slug' => 'libros', 'with_front' => true ) //Puedo cambiar con esto el nombre del link
	));
	flush_rewrite_rules( false ); //con esto funciona el de arriba
}