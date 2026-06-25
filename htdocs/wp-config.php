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

/**
 * Database connection information is automatically provided.
 * There is no need to set or change the following database configuration
 * values:
 *   DB_HOST
 *   DB_NAME
 *   DB_USER
 *   DB_PASSWORD
 *   DB_CHARSET
 *   DB_COLLATE
 */

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'gtY+.R:eM^?UGN,D5^#gX8R7}?n1{LQ_}1PY0^T]!n+-s%!ZfSj%{OktQ[2*]T]J');
define('SECURE_AUTH_KEY',  'lue3pq:6I~rDWyS7Kl|Lxa0l6G)PO5}HPoe8V8IYHJxXd_~GuUsmAx2u:Jr3TeF4');
define('LOGGED_IN_KEY',    '#2Tj+s4+cg9^K1A0;0lc*+<e}8V9:=Vv^b4)(~xOlSmT<F{+=%}P|R?GztX36x-j');
define('NONCE_KEY',        '8T^j@1v(>c%Zl;:!:4ZJ#X9zAh%Tk_@@emzg$1J|,B}Vzs(9#kBs;*2W.4i]<;]R');
define('AUTH_SALT',        'X8FK<IMh#u3#Pn>Or80Lt-Rk:Od~![0trcUaGK-3d%fxCTxhKnOR|-Y?S@AH1(aa');
define('SECURE_AUTH_SALT', 'xaii;4d>J},{5I2VOlfqv#|JNpI;xf%[#7}8@E[>^DE|ZTbD$^o4Jj=IH[bw{+~[');
define('LOGGED_IN_SALT',   'YY.a8qc8zTTQ31;I!},3QPFeh8d(E[[Cw[81Y8C,GTLeVXZ~EP8kOjh%3N~zvQ%8');
define('NONCE_SALT',       'qVB*g!UpbN:nL9*M7.?_@,69l2ntS}G|9lXl,^X<KJX29eeq!0jAMPB93_XL<NFn');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ppw_';

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
if ( ! defined( 'WP_DEBUG') ) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
