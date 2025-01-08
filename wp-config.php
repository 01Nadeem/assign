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
define( 'DB_NAME', 'assign' );

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
define( 'AUTH_KEY',         'hc%8w@CVBV(IHtxo8*EA`YY)llaYSJz?+9{_@w?lmf`[ihsTo4aR]fXf+C]cCB2G' );
define( 'SECURE_AUTH_KEY',  '19QaM893+aWR?l.TuC:7#oQxe2=v6Wmj 0xjcY2DxjviKr$9-}w4^%;X7o%a7rX2' );
define( 'LOGGED_IN_KEY',    'ce/>v&$*dJ7cT8)v0|)b0> GusH:JJpKN[3{G7`mz> OK%/Vv3zM`v~w?bsr$>7.' );
define( 'NONCE_KEY',        '-=zwSnzXX]Q].{52Pv}F@$nk:B),<.Uvxg2E&YK~-Mx6#(*wa5QEhzJ]w//BT4k$' );
define( 'AUTH_SALT',        'QL.59P06&~[Y0Ee?2zd+qBw^52v&c(_aTM*TE]A@mnR0jO@N>B>]+s0o>Q(6%]2:' );
define( 'SECURE_AUTH_SALT', 'q[tq&8.yx*AN95]pm,C zX[R7%7%b>/Io11oIV!4q3uWA<n?t,hpJkB4ecg+?as7' );
define( 'LOGGED_IN_SALT',   '~G@|uuu5(t8XZ3^@gTz2ZnQ@R*.f,8NK.X>MkH3w3?nzyK@j/Y5#Ucv&pD&yrXhj' );
define( 'NONCE_SALT',       'iX)_+Ap$U,#_M[bB06OCI#picw6+1a.D>1sYj/2`+C,DY2aTN)$f/mpKmW`513-k' );

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
