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
define('DB_NAME', 'task');

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
define('AUTH_KEY',         ':%Z~VdgYNQ7RadJEB%j^rH]BjvUUMZ1QrxZo{l~8pC%q7kjLT[+?Z`8{MlUvFCU}');
define('SECURE_AUTH_KEY',  '!;Q8eFZZGWt`l@XFm@/b++qbIGJZ5-DlgJH_57viF$<tC9ZbK0+#H]sHd_?]*M4>');
define('LOGGED_IN_KEY',    '2`4I2rHzMD>O<nIgLMG&QbpY8f`DG[yd9)QojyJgX+IIXB(8nLI<af5(/B:ab2C4');
define('NONCE_KEY',        '(|jA[WpG*N+/WJef[vz9lf5bE7iw,LW<!92|SiZd~0-]s?uPu[^U[LIH0$L2M37X');
define('AUTH_SALT',        '[)[e7PNGcWD>Zg:gQv[1OlP<MB58Qe$O`<7ltyX^ZDD/FiI(]?<R*VmAjg6m%o#a');
define('SECURE_AUTH_SALT', 'q`umzgIT)8^gwwK;Ln3$:_Pa_TCiD^3N{e&NjY*&7/Ke&s+|5pT1O+k]70va}`)p');
define('LOGGED_IN_SALT',   ' YF! ll!mYTJ>%w.lfSmYMpW=c`RCepYn4^ qxuVk}~y6.b{I@T,7wu +oEKWbCR');
define('NONCE_SALT',       'm*jbZEeD-zAJR|Qw(6t,!^(gi{Pe:[EN|x0P;^$Ls7PsX(8~5+mI]v;}M(!iWU;|');

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
