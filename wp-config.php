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
define( 'DB_NAME', 'mpetrovic_trpkovic' );

/** Database username */
define( 'DB_USER', 'mpetrovic_trpkovicKorisnik' );

/** Database password */
define( 'DB_PASSWORD', 'L%HidSKKKvg.' );

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
define( 'AUTH_KEY',         'ttbw_cJD32MrW0B3@_Qbw:QYd.fY|6XTIh@P5I?GEvG*>bb_@j%8#<YgmALN3/$*' );
define( 'SECURE_AUTH_KEY',  '=ScvKk.Hll9giuAi_Rh aM4VA}#VlQ{<_I>CJrAi)l?$mNb?O;h<V>{EPY^tjb@#' );
define( 'LOGGED_IN_KEY',    'zTD%gTN]9C]kx.ATKzJ+g<RYBpr.ulzi1Q8aOGe:wc|MNhai/g9o+/Tk+t<jGv^^' );
define( 'NONCE_KEY',        'D}h}OXhZ7I@xj4@U3n.VIW)clvz%KY*u[cZovLez=FDLig1UA&&m)b,:P#BqcCT?' );
define( 'AUTH_SALT',        'Cj?_-uYHJyhIbF1i]4B#=<Y,-H^BB?c6Ma% b$dPA#V9{^k5oEuppcmWM?R#roAN' );
define( 'SECURE_AUTH_SALT', '5%j=^{gUr^n3HY:RrD)JOhuagIE(k4iyof$ttq_5%5-Nvc5cqH5J/qgk0+FE}C3I' );
define( 'LOGGED_IN_SALT',   'AM#qOcoakpGpd.$1 EiIc!6nEF[%bNmMr$)QQ87_:=b(MuCyeV7`R8<^.r(z.&,9' );
define( 'NONCE_SALT',       '){7xjF8tO{1Nf|9,`8mC9fM/9cm</~(15H?AkI,iWJJeTJ/h585y4vaQNZ(~S]o?' );

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
