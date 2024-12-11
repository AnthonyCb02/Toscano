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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~sZ<k=LXyKis{/FdQ;-z%Y(rW5yO3WRi>8oy[U6%U6y>tScdd]>}Va:,H#@6bN34' );
define( 'SECURE_AUTH_KEY',  'uIv,rr5YHy@FB)T$[mBLMbhhcTLU&,cr>YZ1qfk8eCOAQQ6k|B?p}9F~AIVcDgHn' );
define( 'LOGGED_IN_KEY',    'u{(M%,L^I,W0m;E-3_;BGH;f1-VsuHA77LxLL>jc?drpY!*4gw/y,/Ry6zuF`V4@' );
define( 'NONCE_KEY',        'oJ0pmZY=57VY:+@hD,,^WC a*{7@w;!(%G91^XZw{2zaxkD{),b,qIE{h;aR;=~@' );
define( 'AUTH_SALT',        'as{:%QvnU@hiF/oABtxgY$LM}]^NU9,nWL#5j&!qv?4B$6rv)u)f[<$|%<d3>e;a' );
define( 'SECURE_AUTH_SALT', 'i:b!iY0`^GW%`dvR;t.,1WYA>OAz1:p{NMFH#t2}1(PiR: 3cUT|*#T(0H=wWGsc' );
define( 'LOGGED_IN_SALT',   'x[uWWyN@rDg9|qS:sofN!Cr-a$gqK#tsnECCyYUx|8>_(1te!$|6Y!~scmP`j8E%' );
define( 'NONCE_SALT',       '$za, oHsE8^?[K#P_7+dfv:o2$r lEI]Yi4dnn*UVR8-S>K9Z9-q, ;H5&D|gMxF' );

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
