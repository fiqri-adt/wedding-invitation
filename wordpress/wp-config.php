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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'invitation' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'A84frtg7;%AZTG~A;Jp2%^:7-@!dJl=4pok$8B&`3O[W?mz$Y)D+YgfH(`@l[_?s' );
define( 'SECURE_AUTH_KEY',  '%~[*P34lsjK .wYJ6M^ca`&3nd;Jp?D]XEP$W&k1Y+u]<9WT<0_EdR(F6j3ylE;9' );
define( 'LOGGED_IN_KEY',    '({Cp7yYp!gX^v2.eNx~M-0mla=&.RlN#wEX0[Rkfp8~nwg?fumJ9rp~$q(}4,x5I' );
define( 'NONCE_KEY',        'j!+y3NQ/I|{89;xYYENnj dGb`{%+ 7vArM6vDtHJ7^)0As@QxAQ~Ca31ovX_F` ' );
define( 'AUTH_SALT',        'p3,L|[3@)>b1,={4J(xu3K73fU(G|x}OON~5>q[3wZZ*Y2aTyz tmcr n;|:eAF0' );
define( 'SECURE_AUTH_SALT', ':6-Jp?KSrRK:ay}n@Djr%P~%*dD+s%&&>gJ._YblyUOvvIS1PZDpmn_A7p./i6U!' );
define( 'LOGGED_IN_SALT',   'wd7#9T6L-5-~[;$e2oNbT<P_OHVTZuH2b=(eYN(_fU>mwJVin]OV49}wJ/~V4DQ#' );
define( 'NONCE_SALT',       'H_$8mCK5ZNd_8_di3c1gw-~J5 A=kOpN(r!jsV[~ a]fij=Pub_t3(MVZM:)W%Q>' );

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
