<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'mpetrovic_projekat' );
/** Database username */
define( 'DB_USER', 'mpetrovic_projekat' );
/** Database password */
define( 'DB_PASSWORD', 'BqXtohozcb7_' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         'S qTcq0$P@vPB;gPO@SrK9},*4?x<OBbQyz+SWQZ=lC!e[j2z^Pu%PrirF>rxVQk' );
define( 'SECURE_AUTH_KEY',  'ZwP3;6E:>1c[OSW7wh5%8}q~,Uc_x&;owx8W)B9)[E7cWhOE/;9K3W[Jk/@7-~ f' );
define( 'LOGGED_IN_KEY',    'OFdP7:<1H>R+P>vP)rflDIPz!YB8Jl4%Cq@zraQFm O_[,ue[((mcrW~EqL3Drr!' );
define( 'NONCE_KEY',        '1~-h1,Z5>uV(A97g6{%rs&dA#I^/i][yt(_C?!5GZ4Y^aRp~MT`6%g]:f/Bbj;P7' );
define( 'AUTH_SALT',        '@_hCrc%~.5.0AvUw_Au8[G$A(&,5AQdE4mt.RCxGxT&Q)3=;J4lHojJ`rroKB~m-' );
define( 'SECURE_AUTH_SALT', 'MZR|XWI@(`Jm($eeC1Chry*JOrj?;WeWt&MB#)CzEe_TTDh9Xtz@Z.AMx_3[`H>h' );
define( 'LOGGED_IN_SALT',   'f$xy8P=oe3qZSc}:U4x#sDrVeUR45{_~o$M%~!m4=^Gt]0{>3u`QueOT43WcZ.1f' );
define( 'NONCE_SALT',       'yV^b2Sf(:|%o.1$fD!ya1u(}%aX0i58e*c/Nl-B ym~ ,EqF-Ou5jq:s)-kM,{5-' );
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