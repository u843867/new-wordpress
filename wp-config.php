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
define('DB_NAME', 'jade');

/** MySQL database username */
define('DB_USER', 'u843867');

/** MySQL database password */
define('DB_PASSWORD', 'kippercat');

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
define('AUTH_KEY',         '~;p=<>~tHd>u0<)n=t&`Q88,;?:m2;FR}-1i.$X#b*7TgY(dm.%pt}%ZU_+z3?Jt');
define('SECURE_AUTH_KEY',  'zX^wW]k-[T)gi>fJDSS)w&nfE[r^Ut|Y$l-k7uL6@gf.T@:dH9`g<nGJ:mJ8S8c~');
define('LOGGED_IN_KEY',    'N_4`uYiy_V&=cVR+n2DSQ^[rO9z&n^T@k<Xof]hsnKN#yAVw3A vI!?|C0X<:h {');
define('NONCE_KEY',        'TJY6`d!`G}{cp[YaZ|CJaX)]m!1S)xytML#bozCYu4[HV$80P,t>NuvG>&uZ,y=C');
define('AUTH_SALT',        'ErKmcTXUAJ;|XG7*T]o|=>LV(*7DQJ`IYa^k$B!c]Jemd{g,Q YBNmC85Quk1`.-');
define('SECURE_AUTH_SALT', 'wm{Qy8v?!AsjGV@In~zyuJf4e]s<[c:fXY{><inixc%-wUDc-Gld mf#J8)$mxVq');
define('LOGGED_IN_SALT',   '.w&Hol_4}K(07j&YFh3#OmN=48IuOD2:x;mMJ .J,r@<i=G728A]?7ks a.HJG7,');
define('NONCE_SALT',       'e>r2B$/2JeqoI@-}CM;{gs)P7AbKX&A4r!P6UE1=eT0B-bSp2$!x,:*<m1B|^o7V');

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
