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
define('DB_NAME', 'home-work21');

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
define('AUTH_KEY',         'rQM{FiK1}dI0ZB|lV-W6+mZb6_<xgub:ls1Z3^M61y&qa;y|uwpN*7_E;|7O*twq');
define('SECURE_AUTH_KEY',  '4i2^qnIrJ zTxw*>wQ]q:_|avkC$bgZD1pCmeRC+$TcUb~d~Y-c}lAP0nIie.+I5');
define('LOGGED_IN_KEY',    'Ti54Ky#Le|</X,I1Hd)yG+=)(zZhxR~R-e;]Q)DIX{LA;q1>b>&2mR JupPYIG0c');
define('NONCE_KEY',        ':~oqb#~*JY4x2IEiD<-z%A}.,6-*-SV={QYOZ|B$-{El#12(PI|fU|q8{s?h#LFZ');
define('AUTH_SALT',        '#V`_bb&8n$FXS3lz2t/t4p}A= %DQ@}Cm}x27>}y%;Sr+APkd+jVJJU:/^7]2swZ');
define('SECURE_AUTH_SALT', '*>Ow?c<+H#^R$:8#UB9A6-fvtiM</Du+6?Qi1x0II+>j!C_f}Y}N[[*@<u!vb7L/');
define('LOGGED_IN_SALT',   '#TO_X/ x[:j]~cV+)N~9+:Qmg/._2%Fy^7Nl 2*&F3|(T!x6PmAAnX7X$ 8fF.-`');
define('NONCE_SALT',       'bm8a@ARtkkt^>Q-0Mu44NH,#Q_XGSfl;-2Ty)1|hKRs(%kfaUm.,CGX$GJRo_wBT');

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
