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
define( 'DB_NAME', 'u652899044_P7SXb' );

/** Database username */
define( 'DB_USER', 'u652899044_eaeCi' );

/** Database password */
define( 'DB_PASSWORD', 'AQRxoGsH77' );

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
define( 'AUTH_KEY',          '?.gZ% ~%f+zis;V^C7n_FWXe/ 57lTZUts`V#vauDAh!p,_3z^I PF;MtkXM/Y][' );
define( 'SECURE_AUTH_KEY',   '8qc#ut0,Ru{S<8VA5+^,b:l)=Vrm=CDdnG{x3yTpKw#?lN<4n[{Xzovd+C4r@h@n' );
define( 'LOGGED_IN_KEY',     '2Lr3Qx(m5~gCUnLAaAD BG)OX*4U3Hzh9.1ZJJPEh$W.ZKzO0?O*R0CW{B.jC>Yu' );
define( 'NONCE_KEY',         'j]:`(|]4|9~DwWH3#Z;fmKvhQZOEL F@M~Z)zZ9D*PzR-YNTn)Jf;mVD~=ZZ8yH%' );
define( 'AUTH_SALT',         'i(7S= h$w6Nbgnk%Sl;C~1,Z<U8cfrL~{&oQFz,xP]w`Uwp},oTb+w%y}L/TtAZk' );
define( 'SECURE_AUTH_SALT',  'Bri#G{oZw//Q:-s`h!-f}#% 0{3lQ45>TR;U~eG>iAj?ha!<a{<+)0,PTV6=-p%-' );
define( 'LOGGED_IN_SALT',    '1lLr[d^JU:-O4],Piy4m`N,ms]@ffncyx=:jAeXC)M[2Px=llDu3OO>l%H5HhTSN' );
define( 'NONCE_SALT',        '`2?H7D0f27]7_#:.YBq$T]B1F~rj;z&!QRj&*(UPIcj/=^PAEdJ!7V2(Lm)F^~)&' );
define( 'WP_CACHE_KEY_SALT', '}1FRDY#S:qL;p^Iiq.8&z$sid3 uY/}c|gdpll!b_~pXPnr<S6y9}[.SG]~,wUFV' );


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
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
