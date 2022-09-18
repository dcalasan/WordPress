<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'dcalasan_projekat' );
/** Database username */
define( 'DB_USER', 'dcalasan_projekat' );
/** Database password */
define( 'DB_PASSWORD', '?U1qPOMRG&rD' );
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
define( 'AUTH_KEY',         '(p,-u9!ly{J,Jk$s;uKncO!{Iy U7,Snv,8;(?{j//;#C3~Z?Z7~_;090No^X; F' );
define( 'SECURE_AUTH_KEY',  '9vTTOOQMN]Qq]8XjI:8taA#[._s8u6Q|}QP~fN.[,6HI{%tKqAKyCxR+K~9Yfmj,' );
define( 'LOGGED_IN_KEY',    ')EEY>D::P*/A`5m]sMo!Lm6r#?2][i53 EBfx:;Ep3Q1-GG,OK&Y9e>i?pe YSw#' );
define( 'NONCE_KEY',        'TAL0Y81,=YFoM56sl*eNWnFq^W,c#|FdNk7~o-55_nIvZ>+#M vO]eA&(a:^$2{l' );
define( 'AUTH_SALT',        'BP=*n}Plc(cNf?{7@be%kk)!RX2NJ2F2i2sx%gz:CnTLX{<sx^YoW 4HEj($OpvB' );
define( 'SECURE_AUTH_SALT', 'h<o|i`.jMz~Oi=>5rn);sxyte?)lCQoYb p6uSHQm).4x)/R >r4u<seM Zr8$_(' );
define( 'LOGGED_IN_SALT',   'wWcGPUk/&(|`GFh;Z^2B1V)]6@^(JI>[r-61I]44p.h.G/8Fq~&f,gUeyPd(l2~+' );
define( 'NONCE_SALT',       '[rXxROy=Ln$bI%S4@YEwsw,VX.gg(fjhYsN ?wtyrW ]n!!Ez(`~0h`9,]wF~]H/' );
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