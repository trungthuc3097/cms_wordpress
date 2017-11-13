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
define('AUTH_KEY',         '9%8Vz<TN8V<_|0=B2vNX_lOi_Ik9FV7g hY<, 6zw;Bl2~~KSh&_H3 xztF+7u87');
define('SECURE_AUTH_KEY',  '3!QrrW| Gn_D+8*,6d|8Zb6XFLfjxjcn`G99NHLnTfao=nPp ~GoCk[uGA*+.$Nl');
define('LOGGED_IN_KEY',    '0MNNZv,b6V#oV`=nPm40K)?WM2`.-~)G+u?ce<uKb/n[fI<::s vzDjt546Wz?oL');
define('NONCE_KEY',        '1!K?/![&-P*Dx9m]C0]kX^T>slUmkB&XfGxLXXwOlp-F8JbqUGb{Pleh}&5>Z6+@');
define('AUTH_SALT',        's[UJ//W9cs6|ot7/]S|yN.9t3X>&<hC0hwiS{pWF~UDfopI1nWK2]7>o<Z=|C_-w');
define('SECURE_AUTH_SALT', 'i<Kkuww5<_-?b++ZV4X$N!}g$D-fN1@s8Zt3*U|EsB58p{A=Q6$]V>;_2vqy@x3:');
define('LOGGED_IN_SALT',   'Kn1P|tg>*:=JI^a0$2M7trR)[O-+>N_L@1]cpvY0:=R!uM0|D,CWZ+1 2.&ED~wt');
define('NONCE_SALT',       '<dGNllGF_9K2zz T z1M,Ef !Sa0NxN_BrKq$C),Y.wKu?8Te*mR[o3rVIA@|~P@');

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
