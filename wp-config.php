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
define( 'DB_NAME', 'voyage' );

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
define( 'AUTH_KEY',         'P:GgUdQJqg[r3VF>ptSp}|na+dC^SoBH3{D8F{y|[dxSv;%-&x=RJ1F0J*l*8?HE' );
define( 'SECURE_AUTH_KEY',  'N>#FJ>#a`Nfv4YN=8)QOIW4HyQY 4%qX^q1b8NaZ|5Q~,acgB{-gYYGs^Qf_O/<r' );
define( 'LOGGED_IN_KEY',    '2nrk9X8[3[q)!.C^(3QwK8vv.52G+U#CO<e+0m)PXbvYG3=w!peRmYG&~YqlD&t+' );
define( 'NONCE_KEY',        ';|8A4X7q`Q12T0 rq.hog/GxZoB_2:2lI4HG!I.g?b4).baDKG.O1oHzH#[WnaCz' );
define( 'AUTH_SALT',        '>@)jR&b!jvL/a=1.2GExmTHfIZuS  q*d^si<a}JDR]7D2(xi!*Y<VsvxYu1O.3T' );
define( 'SECURE_AUTH_SALT', 'if[Zg kx#OL7BAY<#/w9l6=`RG{p{%%pe:)~M02#gYJa_$f|/52P .6y;0Tt~*Ki' );
define( 'LOGGED_IN_SALT',   '~ 4)maTd+cfLt]wNME|^qbb>d,UT]e U;zn:PhirF%x|G~8u1{{ gm(nhBf0{BYd' );
define( 'NONCE_SALT',       'B.p!>>.Ai>M=yL[^-x&Jak`k},z15Yl_c*Q$8fEYwR[UXe`Ykrb1#= &J9~MM=C(' );

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
