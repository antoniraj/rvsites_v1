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
define('DB_NAME', 'rv_sites_com');

/** MySQL database username */
define('DB_USER', 'rvsitescom');

/** MySQL database password */
define('DB_PASSWORD', 'CGz?EUGK');

/** MySQL hostname */
define('DB_HOST', 'mysql.rv-sites.com');

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
define('AUTH_KEY',         'uAzi5i|O2u2trIW~L8Oh4R3eFS:u?JTO6~V~`#3LvRo4R~ZJt%m``wE*byNY)TG5');
define('SECURE_AUTH_KEY',  'U|IO1p!@oLhB6h7OgPTL1z#ioZ!xNtGi?C3&w9*!^QDYBlGv48#pJp)VN%:C~M7B');
define('LOGGED_IN_KEY',    'k)it9stA6&)wmuX(HM$jn"_^iA*mI7NHf7Gce74D+P0la!(GH"^B:&ch%/F)MioZ');
define('NONCE_KEY',        '!q9HfE0Ea|hzs?B(LbBVu3Qq/vl:P%x9u_6T;vpFEd^$DilfH9~82HA~F`"`"RUN');
define('AUTH_SALT',        '2zlK/+Qy5&!(UtfhtD1G+Xc+L)g:iv)kfN(EK0PYAdyHtwh%`^+Z_u`jAd7MWzUh');
define('SECURE_AUTH_SALT', 'a+er89Eh/CV!E?B)SNB9S$NRwY|7a#Mv"n?#uK1#7blHJ`1B~nA|0Hz1h6CBM+JN');
define('LOGGED_IN_SALT',   'z9v(EFEkk!K$@a4?Va"YdS^~~ee%N@~/7^YXa66kL+0ogU*qdU@~G9N0C+2eFgZP');
define('NONCE_SALT',       'ul"tt5Aqas+UweN$V)U&QOU2vqf#kZGZ_dx6+(SAee$yLAX(KLg;8F~Q!N/BlDC#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_vz5ehb_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

