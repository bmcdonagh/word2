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
define('DB_NAME', 'word');

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
define('AUTH_KEY',         '+x1S_ /g!{#5:}*0~e)2~VTcMnSI`_NcGdx<%o8h^AEKqg7+%jbrh=+vc7a*FbkH');
define('SECURE_AUTH_KEY',  'x#XI=|~XjKpyIdk1cL}cdxM:LWlY$@=Ix~.LsOw(gnBueMk}v{1g[HKTniREpt-4');
define('LOGGED_IN_KEY',    '&6[D2do @`xCB^H%yq@o$a`MaD5>6*l032/If9CT`0NnTB<]S_aYvXknb<1?8$&@');
define('NONCE_KEY',        'k3T{t}iwiJ^]+)*4eH1NaipR7?_:)ap|Np{YU.cA*HQa8UFBKQ;rT,-Dn z`4@7;');
define('AUTH_SALT',        ')b=$FC (}o41cGS[?$$pA18uc1^NDK1OqcvM*m;o(vrPzS:56z5Dhl#[z<B^.=i7');
define('SECURE_AUTH_SALT', 'W+)I _Kr2oBxD~KBs1#$cXMWia)<(703Omw_/qBOW.QP=ta45BEDrTL^_&.yts<5');
define('LOGGED_IN_SALT',   ':&x6oKxY*e7gu]2uD;xb[bGlcH$5}Y8N4B5;10o=(6_-- 3r:DXZ`Usvh-~)v%[G');
define('NONCE_SALT',       'eK3tG^V}|=>&7|94m/j99:8l/D=fsh6?EbF-m>n(g$&rwNPMFCL!AD*Z;42h$BxD');

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
