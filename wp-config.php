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
define('DB_NAME', 'soon');

/** MySQL database username */
define('DB_USER', 'soon');

/** MySQL database password */
define('DB_PASSWORD', 'soon');

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
define('AUTH_KEY',         'ZO-87:=$l-Q}|uI.C)$L).gYuUWIA3T68MKse%xj9^ts=o g9%F,N+31g{IG<k<<');
define('SECURE_AUTH_KEY',  'T37 c?)5fKROB7wO9kLqIgA=4DF=-b4ZPxdI4_w6v{L3#g LQY}4p#3&FxupapJe');
define('LOGGED_IN_KEY',    '3~~MBA79FEz.+*d{4WSK5HsvxvV{KhGgn^Vwkf,KRpnFC~X:bcdZu)$t^JV+yG67');
define('NONCE_KEY',        '_wtw*}d+7P,_U-g>3|Fl`WYx+=-MI4N2|H)lSqX=%-nR-EWf_+@cdK!%OO_9Cm_<');
define('AUTH_SALT',        'm45b]EqZ-*A!h#mGLK1jwg^<as5gI`!rNdDm 1jC,#VWtO#xYIDc=#p n?p2?ma1');
define('SECURE_AUTH_SALT', 'n[`j#/|&43g5|Vw24~Q>9_nG^/k?_2E4W@VXyfoYwyqx^&$BN.f9=#S)}T<?Vzu`');
define('LOGGED_IN_SALT',   'bHt(x|Abg cq>ps-b+ziz[0Cg{@[T#nt,#gQcp>4;8<?v)z*-;t:}z|T=;N#>l/I');
define('NONCE_SALT',       'F-(lk;DaRC+}3/?P;VEu+zbV9/aKE7;dgHDS_qCkvwElMA<Xv&98O@V8[W_a^QmW');

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
