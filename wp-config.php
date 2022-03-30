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
define( 'AUTH_KEY',         'PY>iPn}P+?H[;1mnd)LaK]syx,L:!KFX_{pP_>3BWN4Ul~T*pcL^izvTR?;YEsJ$' );
define( 'SECURE_AUTH_KEY',  'hn.s&a6B==Ut0R&,R1 ]Yc-Ilj$VhTLQUq= S?;%/@w-`&.HXv:msmfmSY>uVN<L' );
define( 'LOGGED_IN_KEY',    '_>Y).Omt6bGDt)44-wB-;W4[N&#aU)VdIA5Fu6;iLJLjlgT~Yw3cQ { r><U@cL]' );
define( 'NONCE_KEY',        'tPrC%>MB:?A.(/1n*4${K9:Vv6CK3*B%/)UO^4w|Y &}a7P%`N|uu{DAKPd_dkQ_' );
define( 'AUTH_SALT',        '6Uq2BJY#)U@&&q[d[0,GCd^<W/kJGZszE#fm}/S,kaSFb>djlK)Mm>W=TIUnlKJg' );
define( 'SECURE_AUTH_SALT', 'GO!g.-DUnP>--xOqqx5c+l<o92rGLp{6g50!GcgyOI1X`/1VPg!(VVPngc-b&J2P' );
define( 'LOGGED_IN_SALT',   '=1T%$W7O8EMk7o)[>/Swkw2h1|:>p`wB2mRH_{$LkCZO.KDK_VnINm#nb42W|B(6' );
define( 'NONCE_SALT',       'ia(+!maUQ)NVq/?~bbG)ig>e*<(^jp3:x1)w4BMG[HC..Ye&K{NOYI7g3hLy8{ty' );

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
