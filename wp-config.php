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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '$x}SSLm?zHl_ <zW[PdtBhZw.Rz?w1c@/&Ze;|*`dXt@(y>7Yj/XBPI:YxQ]_B=8');
define('SECURE_AUTH_KEY',  'e+iR~_*_+@|5v :[b*.5<rIxV:iUgdY-Rjw0$|jw`MH7^=A5af[6}pxdrlqYrZPv');
define('LOGGED_IN_KEY',    ';Un.:QS2Bq6B#l&^G_6UGtmt7ou~+57,jh9<Uy?rzZ7VN,5pb{V4%j|]P3`+ooNW');
define('NONCE_KEY',        'XOyI@*sZ4nnl34{Ei4ASJl!@nh--;~-c>h }>+-$hO,xK<u(VVU}OK+<cOa6@zT#');
define('AUTH_SALT',        '3Rmo[[.yJD7Ex]W|ewG630)|SYYJFV-<Jm#jc>CV*uQW$xA7rKs.g1@fj2P]zk3(');
define('SECURE_AUTH_SALT', 'HJe@Y$;jg^9GVC(Z]>^[4Y=^N:WordCP5wVp[;p>xJ~J}GsdfK:jDCyanaJ<>bXL');
define('LOGGED_IN_SALT',   '#UO*1&*k1<y#U+5U2>$-D8]N>G$o2zp{f{zWgQJ,^qCxXx.K!L_r@#|mey_d1<04');
define('NONCE_SALT',       'yuS25WyB5%(rZwz2~ueD3+M.LUGe urG)m_c}F= 3tr?^rr%0z<;nx}o *w&fCK:');

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
