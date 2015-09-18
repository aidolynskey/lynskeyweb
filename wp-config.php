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
define('DB_NAME', 'aidan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&8{1?YS??$,b.pZN,J<?NAG(Pw|3BIC+5AxFWpv@jlP5,=<U~#C:(p:;CJT}DqLt');
define('SECURE_AUTH_KEY',  'u!XMq_x2PW6*PC?ECb E-apARgqGknJ0Axs+e09]7ybH6v]8UjXs%l(EnRwP$7Ll');
define('LOGGED_IN_KEY',    '8V)Pl@AyZA9.@ >_ ytN`J<|qQ+h`oETIP}PmDZ&2O-Jx_oXnuZjmLwS&{A(+:b,');
define('NONCE_KEY',        'G;?Ie2<h*,S<X1 p-)1D[#A0zc=_cCJ](c,n5|L|>/k{4!?}L+Ig,]iN7(a:TZT?');
define('AUTH_SALT',        '<Ww|8+Jx0`WMv&Xr &o//yPZ{DnjLxGt|[j[Sw&y|0&0;`9?S.]]1v-s-JY_tpK1');
define('SECURE_AUTH_SALT', '1Nnn0+!TkV*H+<-=+$&3V0;/jr3#Hhg/$5a#B4?:^zb1TRLs.P~imGVKHsXK`P{c');
define('LOGGED_IN_SALT',   '7_rCDLmciGHI?w!{N)ZohL;=I(*G9-PE/sWz+>*1_tJkkxVM{-M+U7waEv&jh6B,');
define('NONCE_SALT',       'a{f&6raS4*qppli{fr*eDbK .|j/[fNVqe}/PJg]y:I3%*%a?7;2EZS69j7+ >^5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
