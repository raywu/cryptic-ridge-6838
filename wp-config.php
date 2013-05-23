<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '5o~O;Q_W.2*QI%Kf4b +xy#OmsXcU=^_f%~&@}TU+4!(#nKJp#H4)2}+-yS=naF_');
define('SECURE_AUTH_KEY',  '$+$?{515e$JUjSOCW&h~}gR((Sf?Gg=nD@@A[>Fo{8AJ!Pb&<<O@W|B`dXVQfWaw');
define('LOGGED_IN_KEY',    ' D&Qh8.)&#}~Rt++_ZTQ]=K-e%RN($rgN8Cz<s5v:;(Fi`%]<1@QGtzO@Y776IkH');
define('NONCE_KEY',        '6@[!7k_gCf.C(+`V3a;=EYI1P$ zYUJj|1;Ng[OR+UkMK}?K4#/qm|thxgv7mS7k');
define('AUTH_SALT',        'EhgcvA7BJ&f-;i~2|A3U7VnT+9{{&ZlddAmz3kAq`*la|J,9vPxg^{=zm2Hv@%=;');
define('SECURE_AUTH_SALT', '5ta+Zq<iNjXmiH(DMQtxE!q|FIBP:</0}h@^b&zh0b#)d62,R:BjF2;:Ip7p1?1b');
define('LOGGED_IN_SALT',   ':ow#xr8yBSCjmS$wce9BVC<KxY*;f]n6] |suwC|ME;HUwZSjR]gs-QCGZ(L/67t');
define('NONCE_SALT',       'N>c+;&+Wl`.%pO ms,0-$|L:e?pBkmk!i#zZ*,7FN5Z$gd,IjN:O/&X>[9<-hj-I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_ALLOW_REPAIR', true);
/* Reset Database Plugin
