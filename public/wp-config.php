<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'loki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         '@dVQzkv~e@%6LhyF5)M/PVYa}Yt9KT{q7vQ%6m`&%i,m08KjlcOEnbFO6t!iB(k!' );
define( 'SECURE_AUTH_KEY',  'lFYs;~o/?SxH+VC53ZYP)j.L,67s_8g#=WC6V>o 5VQYNEP,kK$,=,}iRC)!_bwM' );
define( 'LOGGED_IN_KEY',    '.rmqNt98|Y1D/?Zi`?DWtE+u>KVzlap%d8}BAI*4}(~:54GRI#.!E(^wIG (*E4A' );
define( 'NONCE_KEY',        'L#Q4Wi7eL=K6rXZdRmob_=RR<_,50)n4r!cji{W38[udJPPtj2v{gX2 kqd%(:.?' );
define( 'AUTH_SALT',        'HXa= 5L:)m(QOKc)A@|r^0`7v)TRMc%WznOwB}Py$ehO>;8hM8oy;aJD#d9%J_7#' );
define( 'SECURE_AUTH_SALT', '=}!26ok[No1Od$pe0?wL{J6<%1BQAlmBQ>-m[,2HAjxe5DlYK)N^1t&Pi!Bka-oW' );
define( 'LOGGED_IN_SALT',   'XC5>]-UrY%+d .L9<Z>V?|)z7WIwp&J8&]f?ia?7I lFGX^i0t{SGDr(=TT~g,Je' );
define( 'NONCE_SALT',       'GDuI3OyMQMeUdQr~B|+Ban@/jaqU4BeW Nq&JL~8}w4m%{I4QlEo1a!Rlm*.3+e,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
