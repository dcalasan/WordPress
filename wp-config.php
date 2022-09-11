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
define( 'DB_NAME', 'dcalasan_portfolio' );
/** Database username */
define( 'DB_USER', 'dcalasan_portfolioKorisnik' );
/** Database password */
define( 'DB_PASSWORD', 'D7QxiaHq&q_c' );
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
define( 'AUTH_KEY',         '(+7 a&P]pJGc9+.+yj;6R2<Jq_Cg~#2[A8Agjw/S &:HWjf|e~G|Wts^,}^P+C~5' );
define( 'SECURE_AUTH_KEY',  'Yn`X?`Hv|>LK8&ST<;``vz3,*Akp?6;0:Bbw*kfk8,tlpTF#O4~#hRoRI*|J:`{C' );
define( 'LOGGED_IN_KEY',    'ziB5+7cb t1O?Q`Z#2N8$?Tdh{nDMKuy?#uy-{%ew8xYNBUS/P `j@iY/hLGOZ+M' );
define( 'NONCE_KEY',        'FL:6@RWvrZayN0{EwME1;sWkVNC/Ex%R(6ecW)X.d9yRk1Y@Fl>[aGRI0C2uuWD5' );
define( 'AUTH_SALT',        ':r^JCR6k%9|u!1X~<whd)sn2Gv=~Jxh98>q1)!A`JIh/{9mD!hYc;ID=e$q&td?j' );
define( 'SECURE_AUTH_SALT', 'l9^keE8:snYkjrYZ|`>KSXO2`f.~;I-uig*m^fB.Siq9:W9Ls#r*_|._cj:Mf1:4' );
define( 'LOGGED_IN_SALT',   'x/$C%mU?vdzXE.s8{&=`J?+y{U3X_SgyA/dkYv;(ee@MxX)#Ci}psl6jQR(t3,NZ' );
define( 'NONCE_SALT',       'i0wHtk4kD<gG|t*:TX3qBa,-,_;c2J0S{zX9~81L^WU8aWp0%}*p:%^kCrL:}vBX' );
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