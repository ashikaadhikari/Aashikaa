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
define( 'DB_NAME', 'Aashikaa' );

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
define( 'AUTH_KEY',         'OY]Jp9Y)L9J]YNtRS7rYsX&jH$?U0&^F6BJIGqBf(3xLR0KDLTY72-neJY=*,Lzj' );
define( 'SECURE_AUTH_KEY',  '-]fKyh54_`7~ZC+D1q8:NfPe>p%p8k7FKypy]}hc`9qwT?&`bIT=<A:2h5KlF!Lg' );
define( 'LOGGED_IN_KEY',    'D}NCwla|PfJaBX!g8fOE2=)@/;:.m]y;u)?epScv`xLX8VXHcm/sfwqH6ljeb0jX' );
define( 'NONCE_KEY',        '|2WX<CEBs##vd!T/ ni#PeT9)WJ1=:?G>4gR&s?ospPO/+oI1)kvYvrw* :Pok)j' );
define( 'AUTH_SALT',        'U1N<Yh~KTCw?3c-s0zcExS0][ &(~i3>Qb?`6TMEV4*gxn_kA&!/nOj+Df8w7PfZ' );
define( 'SECURE_AUTH_SALT', '-[/zx3-fVsyP6GG;+;d@WQq?t+FGDy Y-jps.WY|:71yc%::{T0b,U+FR|Eu&R,_' );
define( 'LOGGED_IN_SALT',   '}PYDmq|)~)3.[I<5|kn>/3tA4Bg;:+y!e$lu-}.eNBj)NQqTi[],Q;,BQv0XLijB' );
define( 'NONCE_SALT',       'Pxc0<F$yed!z1z_ !g+?:]|oo}se4yAbUd_}Tkjjgs3e2!2s/I{.JQzlwlJzMqA5' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
