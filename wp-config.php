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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'raksulvn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}`Q[@aGp(<fS2^EsPBtcglL%WEB{^uOUkj|k{Bn^<.cZc$IZ#N*0Qzh6Qgg2L]d}' );
define( 'SECURE_AUTH_KEY',  'GH2,UQC,-t7{i*x${by&hx#[Lo#~?/%_`jS6L^/C438f3zpbw(m0GcmDtKa<w@+[' );
define( 'LOGGED_IN_KEY',    'c:BZcUT087/pFljLQPp,AithZN6+v1O AD&3s0|SuqLmHFu$m~K8x]<PLuf}B@Ww' );
define( 'NONCE_KEY',        '(5/bIN##fGs5@J;@iz>~}ywh<JeSG3XHDZ$*d?J#*2j^,lP9PdkY`K&+BSS3).u#' );
define( 'AUTH_SALT',        '%k84@t)#qe8bVdF/WnXH5d8gv:|r>)ullx02ku2>i8sA6}R|wdD8d|F!7{NX-Fsu' );
define( 'SECURE_AUTH_SALT', 'I@,CDSlrK=OYh?t5BUtuq$A_7+Rg5I2Od/gmjuxEC/j=8KiS9b&b&-A(8hyT?H1S' );
define( 'LOGGED_IN_SALT',   'oVn}%`b1lt0=.:N#)-EHJ`S_AM$Lq%NN0N=cM4DT65qJ^?Qj:Zaz!By~F%pkS$*f' );
define( 'NONCE_SALT',       'VXfa?E^62pjzd|,<6>o9)*M^h>4A/iiE8Q:zr)90?MN!gN_3pr;){[,M@/gtkhKI' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
