<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'saloninmobiliario');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'P_<+M}XBv(Sx=Bf{h`/X?VAY*>8y+v%E*dY9l}yfCIQq]dzEwhLkee8DTzZ;dL3u'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'UgvAdg1u|:$iU-]$z8,1>?*Wn mE;l:|jFI9!#[X$B&Xk13PQ9v8[UBU*(mO/$ye'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', ' &ac5?,8(24uOUK<Xwr=A5_~->s}]R8rD;JT( q}-vkb$<{e{z[siv;$$dj]^A<c'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'e6.dK~bYYv_pV/g5kr#%SKf:buAkD3pCYc-IvBu%@8s@9vn[Z=Fml|;-<bLRLZ>m'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '%nAcA J,vgdGUXJXV6tGD8x0<it`oGRv-d)u-Ndjt<Iqr<gIf{&RCfMTwAS 0VOy'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '}aYn6TR/Jg7qv*=S(xFzsgmh+Ca?^~HAv@00PD7iL|S]hkF%~#$%YL$tBM]nK`=g'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '+jI]0`.]z&K[gH.N*jJr9iV%!abb<(hJ<8Jq(gq]>m@nC[/|Y_!<$Jo5!_L*E2-f'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '[Y(RYEwtT|zX,9v@N!.A[kWo<yA2-ojIKibVR!6KJ7J!n8~h`0FOtRt|t4PGz*dg'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

