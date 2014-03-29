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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local.ircdanang.com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'HtK.KsO|+c%>D}NrBNk#Domk-BY+NS@cfl!- +3{b|}~@N@.M8^JPHBuJQKri#b@');
define('SECURE_AUTH_KEY',  'tN;!bcZBC-)n~2#2|:dsWR0N++8+2X;2](1(J5cq?t6E7lyp?pc$ !y0H24cSX+s');
define('LOGGED_IN_KEY',    'IoW&?|CYf_MD9+Fe)0EdF>:.4$}u rh Fg1+`WTFMiUUgU,g0lqesET-L59Y3.$M');
define('NONCE_KEY',        'XibD)DQs?pc +e7*!k.b/^FikY^72cxqwnT.QV6MlqN}|Jb9iwwakyELYVZ$zNJT');
define('AUTH_SALT',        'UGmLG^)2+P6o`IlBAt/pqG!Bk._{m`F<M|%@w%_,|HK(i~#5&^Bm[<b(9BC+h;(*');
define('SECURE_AUTH_SALT', 't8zP%IYjuJ;U_kd@/x:rG3~oB}/NX>o+q|J~z>OB|ctM-uT_iFKSi KQ=Gtl{e=3');
define('LOGGED_IN_SALT',   'dy_Jbc}<*QNQE(!]M$c=,S,xd^},J&Fl|[#9o`dQhu@v{e/MwTNo|gkz NbkESzW');
define('NONCE_SALT',       '!Xr3Mo`/p[]x+:U9YljH6s1okdF3Kpf$:<=.F ,geD&OTfJnItdvH!+b`0Ri)!8N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'irc_';

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
