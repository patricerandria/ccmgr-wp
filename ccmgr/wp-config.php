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
define('DB_NAME', 'katowpdata');

/** MySQL database username */
define('DB_USER', 'katowpuser');

/** MySQL database password */
define('DB_PASSWORD', 'katowpuser');

/** MySQL hostname */
define('DB_HOST', 'db4free.net');

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
define('AUTH_KEY',         '#|IpLcZg+*_3YV9fFlp@6|x@4]fObUL;f,KGyEVx[GP[!^Q*KK^rb*aAm2 t%y-:');
define('SECURE_AUTH_KEY',  'tCkx;q75ez3Y?nC^0tc:Xpmd(W:.=_pMv(H2BF1{6bVoQe:s%=uxk-_hd!JT8T#_');
define('LOGGED_IN_KEY',    'Ic*419%!a>*RFtSe7`.pFYU>lXI&mC{^Kj}=8qB+NZO^0S&/]D@(8puNn(OT:DLE');
define('NONCE_KEY',        'WFS*iV:V B#Ksp{S d4yQymo^[nj$y,8.i+=n(E~pKteJ(Z[5CA/JetB0]Hn_iBa');
define('AUTH_SALT',        '&^ZyQl7uf81X0=0N)ouW4R;#:_Y5EGRQ*4>04$^O?@L;CR:ms*^A}Ny<d#_*v h7');
define('SECURE_AUTH_SALT', ')R`oFsjvG>)IEm,n3[_[lP*BUex2:I(B}U/hqxM<uAZf]*4t7Y;a.4?G>:,uaVE3');
define('LOGGED_IN_SALT',   '4_<#M/WYyZ#ag;eu#jb+=gZ<rm(391+8)? Hc 1?XT@5H<c~T!SIa.c:7d<Rk1P~');
define('NONCE_SALT',       '}rdz6ixE-uM:5~VBx`v+3o2OcS9[iB^;aKUDMZ2h%~Hb-)3{dZOYy}!$$h|O|isF');

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
