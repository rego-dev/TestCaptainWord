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
define('AUTH_KEY',         'iYQ[@atY!O@!f)>!k*A`AojXuMokdK9W_i&ffr/ y+I|h2v]^{Aa5CH)_oo+%FMU');
define('SECURE_AUTH_KEY',  'Csx`/6Op|,-;[n!Id#c~jhoWOQTY-lsEovwyI)ykuWv[OlFptPrr,5xt:Lg{.KaL');
define('LOGGED_IN_KEY',    ' ;EzRwg|O(#,)Wu%7yG~M 8f $xm-|/l9f;fho-^X#P^u+l<] M]3_ $G,j:vDQ!');
define('NONCE_KEY',        'U-Z8xZhjq,Gk b9qXofoYW|S3E7w=L$RL(&Dxg:8]bzV(`r.tUuGeN| )LoT%?mT');
define('AUTH_SALT',        'S;R qYblapino$L[gRCjJ.Gl]Q@eGvyHjRuz6jdks g#fL7zgH#6CAOCpQ-lL%!c');
define('SECURE_AUTH_SALT', 'ChbL~L,@mV@ha+M,>yLvoyT.z(]Rx*7N 7W)efwJ;EMNg`1|)R~G~%z]j`iHkTAf');
define('LOGGED_IN_SALT',   'n!kLsdd%`^9h%E4Eb@(+Kv{[HR4*#h:|^/>->PfVn0=dZdM_4d0!iDbyDP}oIp n');
define('NONCE_SALT',       '&{$XA9nNuJ*/]|WKJR-N 6r^}[;UA`1q5Luq~,1ay16AcHj+%wTXl+r|..#-xYXp');

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
