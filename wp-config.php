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
define( 'DB_NAME', 'khung long' );

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
define( 'AUTH_KEY',         ';I{q9>fu2bFKTEv;WhFT(jpZboc|VgO=o7aVeLB?kmHpImjg}?*HC,&!qpP2svN>' );
define( 'SECURE_AUTH_KEY',  'tR{-cD#-|kIp)}N`i64=R_s2gmh*1ve*g~Dy6(Z=${OYMb5DI!P@SC)op;IZ _1i' );
define( 'LOGGED_IN_KEY',    '7:R p@XSwz8%OZQ!-oPEd=#5Qw(vdog3:%r[hzWs%rO+LPxJ&:BWh4_TVF0NX_6U' );
define( 'NONCE_KEY',        '<?~NxW)0g:bG#A){Y}{b$5mYHy=o~3owZd|K=b(*Jh@+Soa8K?nY<+^)@iJ6%x^?' );
define( 'AUTH_SALT',        'Y.KX.a,u)LH5dN~+-(PLcT>M9cAe&Ax@JW_.bR=fO1N^(`(|GvsY&GiQ?$j*fz1*' );
define( 'SECURE_AUTH_SALT', 'lgn7IQyair#O,^by @d`* 7Bo4DW@^cc%77HBSYZh*W+6e94Ye7p<E&c^2Le(_P$' );
define( 'LOGGED_IN_SALT',   '>rfw.%oI?X|*+i1mYLAOp4YE<(*jiN=_A!S,>Th{N|<O=Ds9MxVtbDDG9/-6yK>V' );
define( 'NONCE_SALT',       'gWQ3}$ytlge?j!)h{&hN^*0bLN$IBxt;>~uq&}tMH.f7>nN[a=jZ50jOa@)A/|M*' );

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


/* Multisite */ 

define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/Nguyen_Ngoc_Quang_Huy/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
