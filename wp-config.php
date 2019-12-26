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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[LUangZ*h!%G]Sy*Bm>t`+<mF+d#+K{vozKg;{K%|y`@^3{Y<yM;0?#6BA?b`CjK' );
define( 'SECURE_AUTH_KEY',  '}]cWyPE2jvo>qIA-%m#(-@BjZ8wD6%n7X(2{2+::Gs%IVo9va!whHPN6{[Q_xb?&' );
define( 'LOGGED_IN_KEY',    '!XP`U:zXNdU,9[m*|nnYpJ2Gb(IXsXZX:2~OED6;YZ]oGXn@ruJAJ3D{wvt6/N3w' );
define( 'NONCE_KEY',        'tc!#CZkF>Tg:lP38<8dqeP@Nbe~6|l8h8gq[@EFo.5}xlwNM1b|1TjT$}N_&%:83' );
define( 'AUTH_SALT',        'mkmBzp3,cBMZ<3[b:ucIj(4|@bQ^~~*W5,e%nGN(~lweoj2 h.0p<TNga-ecNZdO' );
define( 'SECURE_AUTH_SALT', 'JN?Swk^;a6Zi/mFa)Eqd`EmpJ%{)0(Zfb65S7=2*^sr3I1oVDB =m.^6}AB$%5Z2' );
define( 'LOGGED_IN_SALT',   'j+[G ^-I~Phg[(Mbrl^AI5~TSa~k<vt8gL,Lz6M#6Coy6VUP/;+9GBT)9G 8MZxU' );
define( 'NONCE_SALT',       'qVAD~QG-3u_VkN]FpiXKs6E 8Z&^<,q2[XMxqNYu/NXXE~H:5$z4l#x-=nByG)N9' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
