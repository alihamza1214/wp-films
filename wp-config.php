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
define('DB_NAME', 'codelinewpfilms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tahira');

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
define('AUTH_KEY',         'Zqq~|Sxb7heGZ,IVfUc*w2vMhrHw5:%X*Or}TqFqt`#=1CJd-@g,W4A}>TL!4Y&e');
define('SECURE_AUTH_KEY',  'FJ/(`k#]/hg ,*.}w@QLKKa{^9^E-@.B[mCl,}}je9L.6m=KB._|G %3X[Y6_99l');
define('LOGGED_IN_KEY',    'mBj;@} -^[NjFOKhQ[5]!N:EY[=RgCj#?w,_.-2cdMMfstQS=PB#,TL)la<Z~*E~');
define('NONCE_KEY',        ':SK|{L2fX^7ra*OxVK7a7@IryqY*>]N7Z{O,o#h7YsHc$Q%DZHKvo[naq*Y+S,Ib');
define('AUTH_SALT',        'O~6TI+djdJ],od,O7,2d;)TQQCb8ZXn7qu])bIv@2<>McLYL,n}0ua C}phf4+q:');
define('SECURE_AUTH_SALT', 'e,W[-W_&TO!,[IL3j)qPL<BoA k(a]Iu+P0g1:PfgRo_E,S*f~C_dq$$qzzLT+( ');
define('LOGGED_IN_SALT',   '>>#Rhw87v[fY,f|L?3Qe*>N;64)#lu*2uR/1JA3MhntoOv0c-XPF+lT6/klD;@W4');
define('NONCE_SALT',       '> dI^c;k;fhtM|s+_B4V>u)go/}Pga=E+@YX)ru-U&O#Ir#n<_[a;n<76?$p%[!j');

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
