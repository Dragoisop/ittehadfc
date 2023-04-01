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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'uJ+B*#32xuyILu!;?1D`3<TQtrg|q&}gvD/3I$Zt0U!U,3CFEX3UqK!Ja$hXU%U%' );
define( 'SECURE_AUTH_KEY',  'qM1VA0`mSI^>o/k0oQC*&(?vRTnLkfp5NP/72,woXJ)/U#0OIr.M2o5hU}pE0t3@' );
define( 'LOGGED_IN_KEY',    's]jF)Hc![-&4n6BDcGNerC9Iwt==)y}*DzGW,4C nv><osiiE;uuNULGV2{rP94R' );
define( 'NONCE_KEY',        '=oR]?eq5qVachC+/}mR)y0!?h<H!M&gn^y@bqB=K-]6%s{?Ia&BfF->^PUQp>gpA' );
define( 'AUTH_SALT',        '=]LH*1a%U^B-WHyYXq%HXAs<$-MYUxPCMwnd_>w11})nV<4=cyMqND#k?S&)L;yE' );
define( 'SECURE_AUTH_SALT', 'o%2% Cd0yHMtya>Du7Biqvn +g1^V+db02RqSd{]YH_MfU:zj/-M WKpT$]3ULdF' );
define( 'LOGGED_IN_SALT',   ';}c7?=KoqlEu#qj^2:1iI9oWfUpZMr7s$&V9xaME,^u7KKr[JQD~P5pZJ;N6rChR' );
define( 'NONCE_SALT',       'D)Gm{;3)sfzRp>kYaAJyd8LrN#(4k)*AxQB^>sK9oW6F{C[!Cb&CA-hABl#<:=Ov' );

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
