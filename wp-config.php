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
define('DB_NAME', 'peace_tree_counseling');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'g@{4Utxeb#L5ty9>CS5P}C4Dc<@tZ4EQi`r}! uTY*Q)V86N.<FuPyrV81mLUnio');
define('SECURE_AUTH_KEY',  'A|h!*){GoDtH7HDzkk3OO{0G>D^mEMw]oU6.y.* &&IoowRc5XgFr-d93$^}3@M=');
define('LOGGED_IN_KEY',    'wMyLn5{7GBk$WV1gnB1#Iw:x0Ab>>Fkwr}7&!og^&z}@&j%^{;%( vz<ojRl=O9!');
define('NONCE_KEY',        'fuLZ!.xjLw;hXR.xEOeQWY|SvrqQF{`NnRnSd:s Bg_h?vL9B#3hYf#3^|&RhO${');
define('AUTH_SALT',        'Ka8oU. so@Zx0i?+6$t%~>.:6hcrp|sjmz_X(@b>y,;JF?gZ4V1^V@ $keg$-QF4');
define('SECURE_AUTH_SALT', 'Y/AN-TJn?hJlZ[4BE7TR~%e]^_ ;>3`<uT/jrW`Q?|qdh1-C,?0+Zd~UK!{v0*5o');
define('LOGGED_IN_SALT',   'HB)Kzw8-:Dq<aj}(;=|G0dw+Ci_v3I/k{!KrBS$@DFE`~a1#K%*GlH=u0&m}Ew~u');
define('NONCE_SALT',       '7d/SsihB^#HSiCO}`!;Jh}$h5qwjJ*m<lMGzU7K,I&5~1YSN#m~W16JHWn CR0+T');

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
