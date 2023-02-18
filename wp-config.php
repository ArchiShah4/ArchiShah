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
define( 'DB_NAME', 'archishah' );

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
define( 'AUTH_KEY',         '.3gV/jQ`[3.+y-y`XaYO)4c1.Kt,-X&r(h][~/4Yt0|JZpHBwtyQJ%X/Hb*F Kv9' );
define( 'SECURE_AUTH_KEY',  'g=ANf^dk8^V}?&~d?W2+BS>j{i0lyN{`)0c|5^n41BH>BPU8! <eK2p}G8Y(K%g<' );
define( 'LOGGED_IN_KEY',    ',ul+~:.UZ-L{b,Ah5U+>$yFY.i4m[Q~[T#tlXb?90-7gL:axb~$(oBVog$ t,K[<' );
define( 'NONCE_KEY',        'n@E7`8Q2F 6^I(XGnqQ90}T27`/yZ8[n(Z|6|x})OU&X~yaBDl3T|?=rRj2A&&Pj' );
define( 'AUTH_SALT',        'S]sm:T8NK9a_x$29SIYheXX~`m5O>t&kUKyu0M C8Y@8Vwq0:T>a<2H2O{Az%@6k' );
define( 'SECURE_AUTH_SALT', 'K:L;JpogK1MpM_[8?7f5=*vHp^Vm*60Q=DA?VuB.OaOJ43fwQI^BSdq,A=IC>?_C' );
define( 'LOGGED_IN_SALT',   't+B={_)m{S+Fng|}lZ{?q3-PDRw+LVkgJm#]h-p3pMV</_H^mMs3Er/K|BSJ;v?<' );
define( 'NONCE_SALT',       '5gW>;P%rpN@~EMjc6:,4Xc8vVD$chUH5l=B$/?~V2]za,kmrfj,keO5;CTi1Z3p%' );

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
