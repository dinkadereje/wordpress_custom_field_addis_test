<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'addis' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eK7^[KFzQ](WY%Dz&[wPBk]CDafqp,XC=P8d;kLc9*OyQ)SIzuGJ 4-V^>f03;99' );
define( 'SECURE_AUTH_KEY',  '{2j^Z/>%9uCuc}Pyuy?Zla~{Pv#mG G_vZ#L#s6(X <X|lIL-GkYe{F]vm=QJd+D' );
define( 'LOGGED_IN_KEY',    '(QY;N2G*U}0h-)L@FSU`N;Vfnn@+>OoY;Nk}s;qD/{a5=mpcT:e;JzU:iN>YY}Yc' );
define( 'NONCE_KEY',        ' HElpbv_%B+CEO2)X2kcURQ@QJk1De`JKo]bgkH>9p-TY3y?>x/chr/HjH;[J{MT' );
define( 'AUTH_SALT',        'cm+X~a;}QTyIG]2JlNKeZfHXYo+rk MM4x5m1WiS2(ccuJ{xB?Tn_;H5t5T-|V_I' );
define( 'SECURE_AUTH_SALT', 'X__S1,ww~+):)>j^Wgm#rJmcg%+xZ5$hCI-rPl2+*>e|MDsJ;]<?!zPanRPn(Ffb' );
define( 'LOGGED_IN_SALT',   ' 1|jF#xG22GmD;).cBS^@4&ju9pBfe0*n@TQd[1VJ7V&$CfTTu8!.FUID1l8mo/r' );
define( 'NONCE_SALT',       '2O+|D~h9Q1X0wNaZi!-;}.w@nvbAq!ez>Dy|QhZ@0.x$s_(8I4QE``3}{a/tMSa!' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
