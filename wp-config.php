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
define( 'DB_NAME', 'archishah_db' );

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
define( 'AUTH_KEY',         '=/H~i <MZ@q(E@Fu@O/(!3I)F>SO)E)1VCOy kIS;m:5aD5#^T+A%)7<Rl>xzSTb' );
define( 'SECURE_AUTH_KEY',  'zFqo{f*dR[M)u_<o&3VHWLb0cQ#< luN1^-|j*}&Rtvn.hbtE;/pebI$_@zj@X-,' );
define( 'LOGGED_IN_KEY',    'tYc/i4s`<BLLqItwh<`:qGrB(d@dT+iO=hrV8vMwL%HChhLjGxYq*>%co4!zU8t:' );
define( 'NONCE_KEY',        'lEw ,b=/}PQPTa~Sw9n)-U%h9FL?$&14 .pB4O-~}ftf;94iSeb R6qDl{K<x*<j' );
define( 'AUTH_SALT',        'FP){j)UVOdR8Y<47BZ{{;LR3A>=UZp_U3Jn)f2XEQpy{VCdrU9Z=$,3brk:F$t%?' );
define( 'SECURE_AUTH_SALT', 'P4pb*e;T.6H0(ik_s30C5TtdtVS5ykj^y6U2ZG7mKI~E +#a/i-%g[BO$=dz[c(l' );
define( 'LOGGED_IN_SALT',   'uwknhR0{v:%upUAv+77<.3X^G DFE?hWN6e@g_AJ0$:d=|bzaQGwGO$,U}Pp],D<' );
define( 'NONCE_SALT',       'U,nea#eIE{Sq*?tG=u}&azrQvD[BL<})Z[bBRwV(UQ!:@:[rCb9SAKIB(T-_&=+#' );

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
