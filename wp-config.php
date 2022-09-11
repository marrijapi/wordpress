<?php

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
define( 'DB_NAME', 'mpetrovic_portfolio' );
/** Database username */
define( 'DB_USER', 'mpetrovic_portfoliokorisnik' );
/** Database password */
define( 'DB_PASSWORD', '0r9*1PJOoRF6' );
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
define( 'AUTH_KEY',         'kqi.Ev<tAW$[O~~_W>Z:H<;6gEc[K0F^E.QAv!fk)fKK%SIO1kt?@-W-kq> dU@w' );
define( 'SECURE_AUTH_KEY',  '!sXSDKm6AE_XZsa~q,5Zx_T)x8?;`d@,itwJtmJ2P&XFmpOan%*F!Vkbs1B-ru[a' );
define( 'LOGGED_IN_KEY',    '$skX/}%(<q26b(2!^Pi0C1MOeU6<hcvvV%#vx!{[2L[&yUM#)GPRo]QRItOs>mr,' );
define( 'NONCE_KEY',        'v/44YB&Z&TP5*/_!o|x8j~qi^kewIw@`7|X?piCA9SH4FN5vWQ)v]^/:Fk5X}3F*' );
define( 'AUTH_SALT',        'q/)Co1^N=O4S2jDUl7GS&C2rKIiRLNQ{p wf!wS)xd3Tb1C[}q;V}v/HP!-F3zm[' );
define( 'SECURE_AUTH_SALT', 'u|xEi>q9]?S G1kz;=W;:5[OWT^pe8N:L UPF`i tl[lD9GeyM~*d?q5l!?.63u[' );
define( 'LOGGED_IN_SALT',   'gOit 1 %}Q7cXP#bGd4I:DdT<<4pK4k2w0]#@^:JAtSBrN6^DI;YbG1}=p|b!J)1' );
define( 'NONCE_SALT',       ' ;$0Pp;*WOO:xFpTT<Xh0_jkGyF2^N|/Uj&~aXuw@ZjBI(&QyqGecIw`e_ b!m_/' );
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