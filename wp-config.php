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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pawen_db' );

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
define( 'AUTH_KEY',         'I:0S7*A7KA6a#m+5h3t^eXU/9w(9}#K$&dmVWWzjMI|Z:I+mi!^M5OD/]Yl512(/' );
define( 'SECURE_AUTH_KEY',  'C<+sPyROGYBht0W?]7u{OrYZQw;Fg;v2f;M{z+Kj%EN;-K*nwXTifD:7}wqYT@]j' );
define( 'LOGGED_IN_KEY',    'Rc.([(CHx+_j72/n+hOI2#C-*+cac_Hpb/ju6@cYU2UEELX,`]9b22skl//{_CR.' );
define( 'NONCE_KEY',        'bI~tS6>,OLD(l(24,s$kRibe38qz<UAjYc XSZ^<Um Zrvs CnMBY3Hd*]#bb_^G' );
define( 'AUTH_SALT',        ',6G},`SGeP{-e-^rBrsh_>u9?O2l~]c,?t_ZvYoAETj=GO7H;_Cfy>Bt`O:5K6l-' );
define( 'SECURE_AUTH_SALT', 'Yd<,RK;!*.Hw;orXb{ya :Nhw>%d&bpRjSYY^42Ln<f0!Z.M*]QBE5OPzC2&DlE3' );
define( 'LOGGED_IN_SALT',   'gt2S*Yu<nZ4cnkOca*&pI]I+%=DwocsJmhQ%T*2$.7gn+0PDL552:q{V2H?SCdEf' );
define( 'NONCE_SALT',       'B]+ck6z75d7A0Ci~M%Nn=vap.W|?F`]_#T[W#c1P~XADSa@3%DURN>T<|]t6<{Px' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pawenwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
