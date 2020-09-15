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
define('DB_NAME', 'coacar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '2IF=O$;JgI4fv}6 c+}_*ed>e) |*WTN(v#.8!>#I?e7z_/fA}b4 ,VtyoV`5ODa');
define('SECURE_AUTH_KEY',  'H%(w-J]i<md,i-x|2_Wk##|Fx}<%z3b Xq|QEwj7L<Lm5ij 9;{%y(.VEcpA{99!');
define('LOGGED_IN_KEY',    '~@jHa-=rvJizMhsr^LTd]uFE?jxx(91d?(=u0(*gvdYY|1z`7x6 5rK_mo[gH<bC');
define('NONCE_KEY',        ' F*j7mUSO XFJhmThKvs:%.T(D0_ba:%.Pw`&T7,T<MNqAy 6DXQt$4M|#k#`|tT');
define('AUTH_SALT',        'fH a)~f4mF^WoECbK;,pN3]wvm<]^OWF0*QYb%JeOiq,2pAB:Q=Y11Pdw.`JohIa');
define('SECURE_AUTH_SALT', 'CV$N&){q4.?x#9Q;p3hAW9c3C;,,QGNz(j.(hBKOj 8tXf8T7V6P4vd8CeUJ[-%1');
define('LOGGED_IN_SALT',   'pb(64fk#Xm<R?4QGz <>LR$+eLeKW@jBS-wg2N]R/x*V0:|>thy.(X<8M=D6)Ou`');
define('NONCE_SALT',       'WajM6#uO/8cEUwa;:~+30cc3cxHT1?hrjARy#S0K/q[+{@sUCoLztgN]I4<d( XU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
