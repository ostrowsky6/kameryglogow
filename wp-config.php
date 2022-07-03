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
define( 'DB_NAME', 'ms-szymczak' );

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
define( 'AUTH_KEY',         'OR/@r|%i(ka~F/uoUqaOJrkGu5~jv-lUM3~f.@6}ohn.IIFP~{dsj#OU$tlMRMB ' );
define( 'SECURE_AUTH_KEY',  'mqnEB|P }zKR(F>~Cvd6+g3Fi4iW+x4/x5>XBqT=U7-ah-m=j|8sbNSD>/$(yLu1' );
define( 'LOGGED_IN_KEY',    '4:8]EX4]D8C%@,K?mPZ1NVl5KNHrGrDN%Y(j]2;uldsSS-l?[CnOkIlDu2c4jiwP' );
define( 'NONCE_KEY',        'h8)pWbg9ImG*hU/n->U&tZE:%ICh:kh0.}L,k=z+[&*>Y,,))vso~C6u<8|t*iQ5' );
define( 'AUTH_SALT',        'Srkk-f:UcR^fBihn#?Q:A||M&Y.m>sri92{m$e,P.dic;c9jr]vQN4g}j6]:{|#n' );
define( 'SECURE_AUTH_SALT', '7S!OCMYG)tN5Eb}7zvcKs0x4jLjyo6]=s:M^!J$Tux9B(5yYZe^`k~/1XW50lGn@' );
define( 'LOGGED_IN_SALT',   ')lBBs?d.;tLuJbAz*v-&. &jc^DGMxX!DiI<L(3e5im{)fN1vBZQJDMLo.xLl?.E' );
define( 'NONCE_SALT',       '0M]LquN^eDV+YL0VhS(}uq?LPT4@y| ~8~{>y)tF#i8[e2$faK}]qN]F6PE$.sRO' );

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
