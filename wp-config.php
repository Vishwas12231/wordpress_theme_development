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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pomerol' );

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
define( 'AUTH_KEY',         '@*D>aq&VFBNE={{i4CYRoJj#f26jjHF,q__#3,7@>DsjB/$^$L$j`~Y>aZr;N&4)' );
define( 'SECURE_AUTH_KEY',  'rzlbK[C$&s!y%9SW1On:~pbnYWpqs-6-5e2pSK_a^;lQ8-Hi%mwU{(dV9JU#*@JX' );
define( 'LOGGED_IN_KEY',    ',38jf~z`Bi_no Gr6!+@13^Ltgjk;o{4fMR_ns>uFq4.aD@_!@H88e$`k^iaMycu' );
define( 'NONCE_KEY',        '6b-%D:@w7; tRYfS)ke cE^b/{ J<Ui%?lQL1uww#Cc8C7lI[OMGpX3g1Wy.^4=N' );
define( 'AUTH_SALT',        '*%WU:`7KKgBjAKKc[7G-AhMfUJoy{G6;VeQ-kNMUGxNu1^=PS 9<_?K<&;Mm![4V' );
define( 'SECURE_AUTH_SALT', '}G&X9?WkF`|M(fw5Tc|LL!0`zS4+fBcLe@IlT34MkgzPa`cH8$9=__bnk]4EvxgA' );
define( 'LOGGED_IN_SALT',   '4A@4s:X2!}rdR@s8#&3vXfmzneN4+]*<%p axud9]r$:* AYXaquk[)uUAvVg(Ab' );
define( 'NONCE_SALT',       'PrX6.MxI[0yhl.j.M5T O<+h[_!TGP;AO`Q.MxgUMuvYl-1W4erTB9.@$|_A2Jd2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_MEMORY_LIMIT', '256M' );
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
