<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'kamanfo' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY', '+>wVv+L& 6/,hYL8wjgz!;(Fz>,Mdsf>Q1V4C/Ja|,VDF9~b<dj%04|+||M77WLg');
define('SECURE_AUTH_KEY', ']hIuB%&!6Q`ck|DDUFPpYo:op~~v*{n87YduwH{c{vj%j|g;Tva>+%fZVDE5x|T]');
define('LOGGED_IN_KEY', 'n}E#^_ur}yO^[/mr^+JNQ}(?=B)|X2sR|e,H6-BI+xQpIt)]k&YH#{(]t1R)+!AJ');
define('NONCE_KEY', 'ty.z(WfGuO+SQaL*/3!}?F%dt?*bO~4F]wV.%:k{718p|+uO<C2k55#bT.!aLnR>');
define('AUTH_SALT', '?g7?Y<h9]2q 5B<vZi(5Hjy/V{|ArTQ1Z#zmE,v_0&#7ykf~H9Czcpt-%%f4+SSi');
define('SECURE_AUTH_SALT', 'wg)DHKW}B.$$e Dug^%(pWBSMP)I06]ZnK_4%`}2eScIm-EW->*g:a+DlcIQ|d1;');
define('LOGGED_IN_SALT', 'K0,pY&+||;{K!n>C5B*,Y8[e.+65VJHhyPVc{zc%!eT+@fGxJf/E3uI+bRRWJ.hD');
define('NONCE_SALT', '$sQ0(`m<|E-NM2|VDBs/I<s0p-$2Iv0QQ[t~Xt3DHC$zlVJsfcw{o~Eg6q&`d231');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
