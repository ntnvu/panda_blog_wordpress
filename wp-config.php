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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '!123456@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         'x)x-$=z}HM++f3llH>u9r*AFxL8PVE9Hc0!ND -ziPL5K~{&IL7*a7p:EiZ2^u+2');
define('SECURE_AUTH_KEY',  '^w+vfF(pr@ajPuU&?+g$2w2u8I|#fOj9xM:Z-*%}/K})rgb+1!6W!0Z:w/0&J+_9');
define('LOGGED_IN_KEY',    'Dgbl onPyn]7uT`Ft*!D#]}lO(,_u-mwd^03O)!1DjJ|7PV_AL8(F=c*d.]z1[lS');
define('NONCE_KEY',        '6v~lp|,TN_PLU*:@<XGq[QAr[CC5O?fhXO{pZ:w5raccPC~G{=<THGrF[-/L].Y~');
define('AUTH_SALT',        '@JRw+E^LK+}T$Uw5YSj53)Z:oWc>P-Twl#[mgLaPCw;4#)1i76Nba!kzR$aC&L{$');
define('SECURE_AUTH_SALT', '_=W}G1L^?GqUjI>-u u1DuyF.(/rj.9)#n|O,A++5enk+:H7A%9 gxU/Wak*tAGD');
define('LOGGED_IN_SALT',   '{~Uw-]9R)0PFcLsiXF;s7XEkE345xbxs-83+`Konjlmz&QM47#=4+hXtJQ*S_w.5');
define('NONCE_SALT',       '6Nw-sq9eUbVx1YYU.X_|GJP]||tYiS%3S1:Hf[s)ow=4@k&I:oK0xm(RMU>sbF8_');
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
