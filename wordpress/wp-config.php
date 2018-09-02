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
 * * SQLite settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

 /** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

// ** SQLite settings ** //
define( 'USE_MYSQL', false );
define( 'DB_DIR', ABSPATH . 'wp-content/database/' );
define( 'DB_FILE', 'db.sql3' );

/** Dummy data for plugins */
/** SQLite database username */
define('DB_USER', 'sqlite');

/** SQLite database password */
define('DB_PASSWORD', 'sqlite');

/** SQLite hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** The name of the database for WordPress */
define('DB_NAME', 'sqlite');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K$+f~W^ZAB$BY&dn3:gv pjp*5WP:uede-o-]867,<^g5Ujv1S8*re#!p/xI-/Ub');
define('SECURE_AUTH_KEY',  ',)h2cSv@<9$/U_YX4rrZ.X KV_uYwT%~B{Yi(O#7cbIX2bXi8A!&e+h*O{[G?snL');
define('LOGGED_IN_KEY',    'RG3#78?vP6[-{EYG2%tjXGJ:wf7doR   htng~I~mi<A@Gy7FmZW&G/:xuRE--lm');
define('NONCE_KEY',        'kC0j DCQ:[tT[;~-fSxQ837L:}M|}bIsvz8^zEHdu@Y-szBhn&@$gH}K{}X,-lTO');
define('AUTH_SALT',        's;zK;d4gWhJ;KZWhXAQj0L;ts~`8|C&t^mx}<&/4Q|&(ZTKF!Z!/(gJa&$-,hb`I');
define('SECURE_AUTH_SALT', 'Qk+alV.@w,MTbJ?U2I#1Ba:T-|_/q5qk2Zs(dn_9XsbI/rJ698AfX5mnxq5X/^y(');
define('LOGGED_IN_SALT',   '*b.]A4_}gtUe;t Qx3j/EC[>i&w.w,m+JbH>r~eIBc1Sj:(BaS88@=i>&|:SIURB');
define('NONCE_SALT',       'Z}}hw@^=AE*[s.+kqD~| G2-]LIFEJiY4GL-+)YFig.3@>V,3L4l_.pZnpw!x3Hy');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
