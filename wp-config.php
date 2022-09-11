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
define( 'DB_NAME', 'dcalasan_roman' );

/** Database username */
define( 'DB_USER', 'dcalasan_roman' );

/** Database password */
define( 'DB_PASSWORD', '7r?#],zbP?ms' );

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
define( 'AUTH_KEY',         '^o:LnH-Y)Hq+@j(SyyG**-x;Y}0(-sge>u[+ay|p=q/$>{RyZi!z7+(=:~K~vg{a' );
define( 'SECURE_AUTH_KEY',  'U%LPjps7_oo?P}Kex+(UjBeh8mN2R*+Rhr#D<qX^l*dkDWP.0qRW]?=2vaS;P5yR' );
define( 'LOGGED_IN_KEY',    '~yIy#g5[vd;iuu=WdE_?v</fyuE(2zO(x>X7B<M;ru4pTE/]UfQ:K`lWrL3E69<Z' );
define( 'NONCE_KEY',        '}rBH>b,8xpPk@yFOhdJRdZF)AG<njOQO=8GX^s+jKvC1|3/$InT}I4IZde_8>#HN' );
define( 'AUTH_SALT',        ' /(,hP%BjaAZdjpv484$lR)Ap_a0-3Jy{/a)d_Pm,}[:NrRiw~hVoG CWy-DICoQ' );
define( 'SECURE_AUTH_SALT', 'Yw(Ib{34g$P_V3,6=LUCP:i+/BggKqIiejXPD$E`y2,HB{xH(~s8+4Cb 2v::2?@' );
define( 'LOGGED_IN_SALT',   'l% c0CX*92a-bgDb2Qo9vG{][a^g&7DsR`t<iWq+YUjm&=Fd=P`q@D;g[W2g*kWO' );
define( 'NONCE_SALT',       '{};fJ>s 4g.& oy;2OIlqe8c>-GhIx.F!E<S9&?!|os.$4qG{G,3JAHBSc9J7u{G' );

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
