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



/** This switch statement configures the database connection for each of the environments you wish to deploy on. */



switch ($_SERVER['SERVER_NAME']) {
  case 'codefornyc.dev':
      define('DB_HOST', 'localhost');
      define('DB_NAME', 'codefornyc');
      define('DB_USER', 'root');
      define('DB_PASSWORD', 'root');
    break;
  case 'codefornyc.org':
  case 'codefornyc.ored.net':
  include(getcwd().'/php/ored.inc');
	define('DB_HOST', $h);
	define('DB_NAME', $n);
	define('DB_USER', $n);
	define('DB_PASSWORD', $p);
    break;
    
 default:
	  define('DB_HOST', 'localhost');
      define('DB_NAME', 'codefornyc');
      define('DB_USER', 'root');
      define('DB_PASSWORD', 'root');
}



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
define('AUTH_KEY',         'qrU#&8_SAVeSqF?f WYzw9,P}rBB3v!|q48qY?0e2AHL~WC}omnwXL5w5|+l<@Eh');
define('SECURE_AUTH_KEY',  '!Z5QPj>~f{m/,wigSJhwAo,qq-j74TVdM_o}82OBek]h!`&DX9YP@1)[9dZW@h,R');
define('LOGGED_IN_KEY',    'KI!@lo_m$J>rm;::+(DlMMV5Bkh[Bes=?xdSsG)> 96I&5kKdSU;{I_;ilP7]xhD');
define('NONCE_KEY',        'aF%WqudEWleht:QCf,g?vz|{[t=B(6[xS{EgGa}#=Vw`^RBOo@1oB.U!piAyapH7');
define('AUTH_SALT',        ' MW2kDvj>R,<^Rd=!dtWV7ilU]ZUbH:zBVmE].{O1&akU1|Rn:k[KCKvQEb(U7]:');
define('SECURE_AUTH_SALT', '[]&dIx)V)j1X~LY0fu5n21[^_!J-siVlC]Zm(Echm;`2Zczc2n!rW~#4P;ul=rM=');
define('LOGGED_IN_SALT',   'oe!$9J^2z.AVj1i!@{%Bh=c:nHmiR%R,G![$#RY$;MYHRMs8Rs7(Zj=?J-9:tRhq');
define('NONCE_SALT',       '76i/fzF,reDI:g]t[Ds-!XU:]$,DqNBj{VtM|uQ{5d7EC?h)*Sq_uqXv <*{(bL8');

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
