<?php
/** Enable W3 Total Cache */
//define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'dcalasan_digitel' );
/** Database username */
define( 'DB_USER', 'dcalasan_digitelKorisnik' );
/** Database password */
define( 'DB_PASSWORD', 'I;NtTR5&9K;g' );
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
define( 'AUTH_KEY',         'nrl6|87=n/2V<gl4A{L<iO_abAw{`Hx.~|#WYs,I:E<qWy3Xk4lU5Ab9N]-ue>4~' );
define( 'SECURE_AUTH_KEY',  'rf62f1bt3jQ,;)x%%WBp:PE%(g!**Vpuz+?PGy_+4uOySQE}9]*Tf6h3L17a:6!E' );
define( 'LOGGED_IN_KEY',    'GG2#t{fZ.m0@|VpQY2k$-]hU!?l|]!8#)x~Y}KR_hW6Gs*R^s@Y%m[]=H2ttowRc' );
define( 'NONCE_KEY',        'Ra?xxg4|9F9B=//fFa9BC:PP6}#8%3a~/7V{^B_eG[q5FRLx-apTE6K*Q7zV?W$D' );
define( 'AUTH_SALT',        '&pJ;:,f=@z>{LDash0+eo(y~&6<rs~RpfbrlA0l6@R_$90+aJfUD*!9<4)B$;umk' );
define( 'SECURE_AUTH_SALT', '*ov]/P,fb8.N/9?E7rZ*o-R>hUggWAv)+|o0K7.dI|C|A`~w;dWK:GhJ1!35[cul' );
define( 'LOGGED_IN_SALT',   'jA254lwajEZbreRnOeIZE&^$BxL;7t+-]LXyq y<J,*$,o!m9E$f+DaBmKg SDX4' );
define( 'NONCE_SALT',       '=: OOCa:j}V9=SFxV2hu^(3So^idKth$is:/~)dK9alEnAg2)fNQ(i_y*PO:u*5h' );
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