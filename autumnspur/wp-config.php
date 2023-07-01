<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u652899044_1FShD' );

/** Database username */
define( 'DB_USER', 'u652899044_8naHc' );

/** Database password */
define( 'DB_PASSWORD', '72TLcEZQvb' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'BamQ[F71W$5B$W:KHnJS[`^[2i,l{<Onwu-u1Bv8ftlya0e{6~5Vt-ishChgRB6v' );
define( 'SECURE_AUTH_KEY',   'M]$DY!2fNo)z9wi0-Q^Jv_$vF~%g7;;hmQ,H3J|Hv,tdsV`hN|um dQjdz|_j9x!' );
define( 'LOGGED_IN_KEY',     'F,M!zk8d=GB#5GKq3qUq(P(2}_D/?A=X^Cra9cq5[[zYu15;z)R9:/.?jk48l{:R' );
define( 'NONCE_KEY',         'j~CwZEaW|7bf0-klO&(h1b_znvwp3--Q+R1 02)3@Zixi+4u@O;a-p}Lbn 6n2Ig' );
define( 'AUTH_SALT',         'dUZ})DdXFR0uyq/zxr$L,;xuM}^Mhl4<aL1~C4>waPmX#gEg}OsKNP?Wm02X71bv' );
define( 'SECURE_AUTH_SALT',  'X@6Cg2QqXBkbN`:Zn:p9M-*#6n6oPfo[B~vOoybH8GM?Jiv:?rGj_?~m7]Ol3qc!' );
define( 'LOGGED_IN_SALT',    '&E8de>@iU$crhth.r_M>Mhp.Ezy7Z~7&9lW=8T].9GNUHsMa37W@ ^.sb&;eTQ.-' );
define( 'NONCE_SALT',        '$TD|SY(]/]FYaA[T8WHp-EOn&wRGTMVg{w?W$~DXKca&Y+DrBXqSpF(k1|EtcSfT' );
define( 'WP_CACHE_KEY_SALT', ':.g$RHJ]${9N?%Y5c.@8YVimD5UO^52q)?+@hIGi<4ZvNp8mZU}04-/m>>z^`vAz' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
