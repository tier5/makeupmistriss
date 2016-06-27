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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '5X48UsVY7l');

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
define('AUTH_KEY',         '!b4Y%n%`U3cs^_{1a!#+r2CY1ae4c-~y(-]=tQ=!Cur5|OEqcpIuicuTgzcs&FU?');
define('SECURE_AUTH_KEY',  '+%YO)]]G}3.;8Wl:}#B$WPUqy2/4ix}J#J8];> :d$_vVqFU?_f%K7N(5{VxSj+X');
define('LOGGED_IN_KEY',    '5[yhQxb~_ScCg-T`#P@H!aMhZzR]<y*(M;]wddvm_zT?F 1q%@6!x63cT6o8D#_0');
define('NONCE_KEY',        'R ]?YXe>Pyhteu.<h]*X[b@91Jr4gE.g$f}^:hiqq77bx:mEi]|)gj6UDW]vR3y ');
define('AUTH_SALT',        '5.Q2mY]-1@D=?.l5)$=xQZ^:FCpt^FVRI<JUp082?nm$3&Ib%XwR[Gh)k2IsGA_#');
define('SECURE_AUTH_SALT', 'Fur&iB9Ro3>S] aUC$XFF$<Bxdb~vcN@Xz3a^A{yk.*;YRw`.~8,.N?8OY@c<[#$');
define('LOGGED_IN_SALT',   '<0LE[EG4ig]$k/JLhYOo;|Gqi_S}hGdz3J jk}k+Cf2Eas!keE;Q=42:gV?}z V{');
define('NONCE_SALT',       'JFfF*LYC%R>|%6BL.e%y $H(wl7 [YZ1yFL[+G!n1KW?2},ttG4l`8ox  -Dr?R[');

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
