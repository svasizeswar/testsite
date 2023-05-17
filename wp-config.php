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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'CHD{DgcWz%yFgd6*)){4l?:,P_@^&Mw4qLZ 96Nr`z~i!5Wa^HS/$sY?V9mz+7%=' );
define( 'SECURE_AUTH_KEY',  '>Spg6HZ?}wsH]RTDAa$ 5+9PN9~(XA-_NHVy&KWe:]bD$z-~?_zCPsv?W/F+%>>#' );
define( 'LOGGED_IN_KEY',    'RH0HXm93a1oY`/h{^LJU1F5x~W3k70c<[=%qjsMc#w%d~`D0G-w}1^_Yy$q.d0{n' );
define( 'NONCE_KEY',        'U7R)A-}G|7V*i~5qX TG<j1:`sc+0s[r@8d]~`z(L2<zt+6Vu9[o&mecHN~XJ5Ks' );
define( 'AUTH_SALT',        'c:a|Q&5$ii^=G&sDTfcneYS,0X>ZAF3HQGy9}%XC^KMJW%D.=ReZf.rTed!C3V@7' );
define( 'SECURE_AUTH_SALT', 'dA_5@!n%V+cf.K0,$LU 6zpaq=5K<<byYxy|au:`bb8G%dQD2gE#mF&fh5WxnpX)' );
define( 'LOGGED_IN_SALT',   'UZVeAJz?}=j6DM.yIah& >t0`iTN*60y#pYU:1gT1z.B!R=<cHJH[vrA-$6DU/F)' );
define( 'NONCE_SALT',       'aUTIrk{blCB*Y_3+_y~0+Qwc)3!Y~`4d[JIt5j%$n=XH@TuS/sh<3.c^8V{H|l&V' );

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
