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
define( 'DB_NAME', 'dance' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '9_q(_QTdxuKF=Jx.c.27JE5GPllAj Kh)M$P~YaXXWD@!ghFa%~pYJ94YG,s4S>>' );
define( 'SECURE_AUTH_KEY',  ' 6O%ud}$y7x/}C^|?^[y^pPdT{6f|mNK_BPf(-H>RhytnA7rle=CS2M*H)4ded3D' );
define( 'LOGGED_IN_KEY',    'li!h-iZHhCH7n_h=4na{q$>=~bh5Hf4~n+mVq1C&CvGS +Zbl);o9aDAYm0O#suE' );
define( 'NONCE_KEY',        'b}M6_l3xRi_f_TT HpW6:.V-asRF;2[Rj1M^,% F6Q#bi:jmrSX&OfWM!`j#Dl>_' );
define( 'AUTH_SALT',        '2w&b~8<DOrN/X5,R[{9JUE-pjUXmGD}X,V?gKJws.$lzcS|~X,`(Ku8gD3rjXsZa' );
define( 'SECURE_AUTH_SALT', 'YZ/KyhE{JvE=<w6G~|uf{:D=S;1:.GMtpA*d_XI _P@.$riP{Bg;zEQcYX.+[dn,' );
define( 'LOGGED_IN_SALT',   'BMuU1.D#_M7c%eH<k4@;! ]2m(0`Wg3Xu<|m^<1KD)n0b4T:a1Gr$mDV9 -ll!6L' );
define( 'NONCE_SALT',       'H7bL.xW+,kA%QA}fZtToo]cdUE`Ef&TWI>kWk/}5gz&wV)A]%[hqEzI>l}l?2tzu' );

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
