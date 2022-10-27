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
define( 'DB_NAME', 'best' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{la(lMK+Ha_c)c*Qrc8Yy*!VPabH$y!,rnP(-gUR`rdZ9xQ=`9Q+?igg5gC;W^W+' );
define( 'SECURE_AUTH_KEY',  'SEqGIUyPSKxg)qtyc?](@-r`~aD5QcZ/-%d>m(sk*h$96/<q)90>quhqs(gd8KfO' );
define( 'LOGGED_IN_KEY',    'XJ=RfoQL3Kyj~l4g?~LnQn]u5![]9J7=`f%t|RZAHyw_@-p[QnAQ/($Fi6<Or=X9' );
define( 'NONCE_KEY',        '/{NowZ95.NoZi<2]_2X8=$1U+X*A{yr+M<-u= c ^`HY`cT7N>Z(3o]:{$]%2aa/' );
define( 'AUTH_SALT',        'K6p4=Y*V:rP_C{m;keF,.O7n.p9h3rPYHP:%tT(g;_wD%_a))!i/0)s:nazbLR2q' );
define( 'SECURE_AUTH_SALT', 'oSVd@c0cW?BHMRGHBsvUdTA;9B3<:SW9]RMmra6=/3%)4M8:A(u5Xoju5HW?TUTO' );
define( 'LOGGED_IN_SALT',   '<eBe}x({hV>F`gMB%E8ifumIUrNtJqPX#;YE}`gg;0c6Lcg4;e_x?G.myG}?E$cJ' );
define( 'NONCE_SALT',       'QJA-sNrFU.o<F9CQO4N0UlHnY-dxG8;?KlSgGV!{SXB`V&Z}Zq8;. s?l8/z2}4c' );

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
