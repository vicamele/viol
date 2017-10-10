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
define('DB_PASSWORD', 'hola1234');

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
define('AUTH_KEY',         '@_.DUHa!>?.}9B9<$5CKI`&OV`j$]CSjo,k2neac.6R~dxbzs_?_MDdM#>hiu]Xa');
define('SECURE_AUTH_KEY',  'uVeFD=R]v$+9S_(*h >CdX%{y?i7)jtz(G!f+u=i0|yu29;D`8OSr|nS1mx!/oS~');
define('LOGGED_IN_KEY',    'AZ<UI,#bxD/nrd8Gd#SoDxbZ^l9Y)v[|+l>x@)yET|-%k))PL@-iYDA5IVnf*F0,');
define('NONCE_KEY',        'Q$e^/APhqLu%)-]ARNDTF{D$W?!+*Yz|l)oEx*xoNX/ul]y):kC (aw({O$#Hnt9');
define('AUTH_SALT',        'aW/&B0+6-%e.7H#e1;0EIynW53Kl*TW_N8vdiIw2oT=iZ5t{RjfnSc=Pm+hh@[;>');
define('SECURE_AUTH_SALT', ',t-jw]T}.}ic_}<>:4vTCru ?GEc%Sin]}ZO}??Z*hgJ69rx0a58 qikka@T5b;x');
define('LOGGED_IN_SALT',   '%u_:HYHKmPtqxlttOJ!FH`S&!!YR^;=J--:+ KK|C,BI#$GM.qMY~gi.zh_M/|aa');
define('NONCE_SALT',       'klj#t}[PY@{(Xz7c7eyPt;T9{J<<Uu;AbY1Ot~*IWy7V;{Oj2Q6{RHXzezx9|F@_');

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
