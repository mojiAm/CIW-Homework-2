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
define('DB_NAME', 'myblog');

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
define('AUTH_KEY',         ',U$*TD3Z> DJ C+[1mG{d2q+E_%~s jJt}Lv)hb{NcZ)/*jBVkStrrd~M]t%5L}1');
define('SECURE_AUTH_KEY',  'HeBky9@imy`8_A#ivui<t1wYp,p}5MIpQChCa<cw *V?q#RKO^cF({k$?CSqt&q6');
define('LOGGED_IN_KEY',    'S,vl* U**gmR4Y+k?Q0os7H:t(YoNG=#jC@]AjMHo+j>$jbe)@[P<CwGNQ .Gk}9');
define('NONCE_KEY',        '`I82;6l}yi1`SOqlY_)!|OYzFZdQf_TLCs9Sn{L>[fB$Iu`!.gMmms(sjVaD}?qy');
define('AUTH_SALT',        '?7QzKgHpNI{0#QTpZRDAnCYsvAk;.}:L$~`/WvEe~;Itx20K]7Xkr8{Cmdbn6%;U');
define('SECURE_AUTH_SALT', 'wH.XY`W|}Z}k^zhq>$+b:cqH^L1S|4 nfu^qbWT_M+O5<.-B8`riqWeUT$HasIvI');
define('LOGGED_IN_SALT',   'huU:kO4F-PKVWOSaYI<t?8h;(OV<+;b=y#5xq;&*{|1D90R{yf caH @yIfN?dB9');
define('NONCE_SALT',       'KJH5+8uF?Wyl_F.<k_&O<pc|s3>LiVIb6k/L W2|Puzf}YS]O6,s|zyo;<W2PwR1');

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
 * fa_IR.mo to wp-content/languages and set WPLANG to 'fa_IR' to enable Persian
 * language support.
 */
define('WPLANG', 'fa_IR'); // by http://wp-persian.com Team :)

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
