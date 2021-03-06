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
define('DB_NAME', 'wp_tobacco');

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
define('AUTH_KEY',         'G/rElM)$P[ja7[3CyJKPG7_O3>`|#Gb;*LK2UAr}!=Hq8}_57=u@M 3@fX]gY8ED');
define('SECURE_AUTH_KEY',  'F%1s+Shx}<v%*q??k$2#<~~=~rC0V.8 Z//?_Fa7EN|y(qEy~Vc}$tY;ykV#m[!y');
define('LOGGED_IN_KEY',    'VU1{{qo`l~3}ef#>W1kw],|bjW))H-REpSI?/c1^m;4d_mjyPxIt!}fP]0(~`6P1');
define('NONCE_KEY',        'wc+K/LIdA4`bSB!J8wQ1AQx[XYQcKwg$$`1I=[uf.*jMKCU8E96|Te^e{w~@@=%W');
define('AUTH_SALT',        '6v#]m5coJ[*2JIo7?)c>oCny[S3z/CANr0T,3j?(<K&cLYm3L]c/CPE[[N4G=#W7');
define('SECURE_AUTH_SALT', ']8|qU3}TxJv#Do^83%LL8&4j^@2Bel{Mgw(4)>Z7,^(5^G}Y)C.>8e[=i!3{>oKK');
define('LOGGED_IN_SALT',   '6B}Nz(y;uV4p@B-on/r$mfl_yPW:kfQ4l7D*;~%hDj3pwfXW&-XD64j~O33*H_/Z');
define('NONCE_SALT',       ')3GD#W#C#KEsP  V4@lh@F#PL_FfxsyrB8ukbAu,27<U*s+0ZgywaM#ViG~z!,<J');

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

define('FS_METHOD','direct');
