<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'divsizvx_aquergy' );

/** MySQL database username */
define( 'DB_USER', 'divsizvx_aquergy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aquergy123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IX$8sWFW]H/iA)LBs=27esMW|WdDzu%mug:ZZB5/?;hX-pK}&F6MdMi$qaM=NdB7' );
define( 'SECURE_AUTH_KEY',  'i(zlwmN04rFslZ!PMIsX>`EzK:TuCg5LWCej.J,,R1T`xm$@,@G3ay~ArQch>,E%' );
define( 'LOGGED_IN_KEY',    'h1i!/o`^eW*Qwz8aH0{Ltd(9^&K8-fXc``]2~VE8WisUHbJSy#JD+udcP@eXZtp:' );
define( 'NONCE_KEY',        'g}`XX-w_ @C]]GdZ7}tQ+_Nd#oII7}9yN7}Q`+JKLI)6yFW`S0&{iWilGkgf8H&6' );
define( 'AUTH_SALT',        'x%{c?]TdnP-/~N0/jqt6rNB^:`6).qpU0hr5%XCMv_7V=FIH{A1:P&q)rFc@ kpT' );
define( 'SECURE_AUTH_SALT', '2w,r3#L2fjyCXfzl&j;hlO=Ay?sSs(yvnj8HrHpY7B`^f8a!0r(F@BXl8V}Y]wX}' );
define( 'LOGGED_IN_SALT',   '}@#+&}Ztbc~iGJv<m&Hv%7RgldMVYcQ!o@eVl[+#kkK{p{7eS7qQ&<]r%H$]LD5_' );
define( 'NONCE_SALT',       'Bu%G#ErW[Q[m$!`xe$<.#:s1xGsnKKbU:laci1[U6I Vc~Tz% Z+&<6|&mOp.a2 ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ar_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
