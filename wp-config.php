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
define( 'DB_NAME', 'dcalasan_trpkovic' );

/** Database username */
define( 'DB_USER', 'dcalasan_trpkovicKorisnik' );

/** Database password */
define( 'DB_PASSWORD', 'F9Fgl1XLVb3b' );

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
define( 'AUTH_KEY',         ':k]/Wlb;}1vdxC62 sI_G%MFFKpq*bqO0VQWs.F oJv^XG>FTy^i&`6v`xk`4uU#' );
define( 'SECURE_AUTH_KEY',  'NfM^}j,a9R:yq<-xct2kn#WeO@D)`C&*(twL`|<T^gs<nSi}^.qO!>=y=7|z3Eua' );
define( 'LOGGED_IN_KEY',    'z?Ja+<$chd[$+h5[=^lp >-Uj@hbk$LN4jcy(,?7~?Fz9lcdgB=NN%R$vl0d3(T!' );
define( 'NONCE_KEY',        'v8&eUjzJtLbr//:sVSuuP|~s&EuVUwYsU0<e)1h}fX MX+,qCY`bOUX=8@S_Lq,X' );
define( 'AUTH_SALT',        'VSRXObKr!>E)ABx]%Z2jg_@B<_.C eV=aa$%CHQI]wnE?m$UhhqT+o341c6wIsQ_' );
define( 'SECURE_AUTH_SALT', 'P^zKq5>9lFr,NJbL6THN&hPG?xqF(g4n[sFQAkIBH<un6NPbmM>=Ul%7F8XE3b2W' );
define( 'LOGGED_IN_SALT',   'q$i&vonUh6|(0`?35{%1gla1Lcrc=Ze;[:xQjQPW_Sx[Ib>Xh)Q9G*IVOg$UX:!L' );
define( 'NONCE_SALT',       '9<PP923R8;&.aF%WZAeNkwgLf@|gT6H4Rb7TETdUz?3Xe}2Fn0S(Z/W!pGd.=0B>' );

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
