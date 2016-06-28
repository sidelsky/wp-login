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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wplogin');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y5eD,rd!gC:g8G0JgkX:ajQ+WRxzx=mB`-pvUg)aka6:s_t>O=+l= 8uL$zI/%{S');
define('SECURE_AUTH_KEY',  'XRV^>0uGg1-E3V(xrumA}h8VR;t9Np)|@:M$iV?jbAi!-`! .rJ@?|A +H{w1<LM');
define('LOGGED_IN_KEY',    '9::R$G,~|+<|O[5bHz9U?d!ueTn=~S!|GF/gjHhh>VRZ~7JT2 +{CjFD%|l>>;N*');
define('NONCE_KEY',        'vq~K } .b;^snp%ad?uYN^:t4D!f&6&Hv}o`8`9NS&2~|h2|K 2w)yE]<ZX.tczz');
define('AUTH_SALT',        '|FEH]T>#>c|,%G];vhd<p<G1X4pCf}x%,$h[8Xx97rMAfvX:o|C(  4ecWw7G>K-');
define('SECURE_AUTH_SALT', '&c,xDZ-GpqVU?|l_:-,PD:5:FFNsz`dNLyd*6uF%E|A5NC&^Ilve)%T/$|355-,{');
define('LOGGED_IN_SALT',   '4irR8E6T7U[s;aZD78_e ]8Mtf{+;3`flyffF:=>h(77+Sg<.i]Yjf!gWz&QSQZ_');
define('NONCE_SALT',       'IJ>(ofv}-`_)794n a%|YcaE$+RRqys^wFrexmW+rt}.Sk1/KE~;%yeF /O3K?]2');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
