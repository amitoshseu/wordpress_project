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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mrgain');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FOsTlDqqw>&PnGVV=S)kk47jtGL3kF)H.{R<|!TDXG9A!V0.)hHk3;ZsDDv70mda');
define('SECURE_AUTH_KEY',  'GrCq0`1]m4^`0-DT_&a/]H1JzU<{Qs@>P.h)ns{JU<tuL46ch>[Q?LX5oxQa*<AE');
define('LOGGED_IN_KEY',    '|g2,F<CLvu%_K} 3_r0zm8Rusk@FHi*myxJk{68;P8F*LVOl<NR|+lW>Kur1r^GG');
define('NONCE_KEY',        'Xv C_>OT91SJXwx+Pkd9(.0+;84XlGqi <[JWKR bfAIdH2fm)Le=k85$LEU1.~]');
define('AUTH_SALT',        'J5!ZPu&ZbVwk<~}T}Qg{o$,{%iP3&_GXZ?M7/x3D~zWZd0v0LdsWd<|~Zc-D(:po');
define('SECURE_AUTH_SALT', '((LX5*5:V7k?<P)/p2P&k8ABThIkUzLiNJdBgIz= y(m|BP F8YBteNXIJW3_=;O');
define('LOGGED_IN_SALT',   'A=i,2rzD;kd.E=  f-KOwr1*h}N[#iq0QHERf)nW.iy|w}3klmnUA2+;8cG>OI`J');
define('NONCE_SALT',       '1Y5iu<MX?I}6X>8W1w#MKK]Z_)i?<z@%KyzgLmHVRu>aZ5K}9 ^wdkRVs[mrM^X~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
