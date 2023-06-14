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
define( 'DB_NAME', 'wp_npsg' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', '1' );

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
define( 'AUTH_KEY',         '(JHu&3P!_c61Xen#3?|Sqy]EPRDw4(j}B^PLB/&R=63|NS$P4V9%gLE%85EcpVR6' );
define( 'SECURE_AUTH_KEY',  'iw`ZRi)pf39/87ocP7go4(J8Ehv+D0.+2e/[B]>Rk= .-Dis6cWAG:_K*2SUvZ>o' );
define( 'LOGGED_IN_KEY',    '%6mSKrvC s83AieVmJyqhHfRGxA!LLP5Q[;;,0h)z][DbSB4hb`V[VgAb.o&g5-2' );
define( 'NONCE_KEY',        'zM>MavR0?NLPQHu~c+@$c>21r-AhK:eSN~^f(6*6{eQLCGC`c39*M/EtD{kkf`d,' );
define( 'AUTH_SALT',        'v_l`LiK+37B/Dq]lxe=>K6tJ@y:cJ]z-Q/|?ezxm5iMVa5M`dJE8&+E,/U`oAuVi' );
define( 'SECURE_AUTH_SALT', '^Lm8x8|>}c^=mjrmv#>V{e!U(JVlj[Uvd:mk]vSh`(koFma7=LH.H|-ujyBYx_F ' );
define( 'LOGGED_IN_SALT',   'IJ6(XRfe.%.ZjT+C_/i{8.*xcuZ0z$OKm&l]B/3gt1Q$Mi@2#kW874<yZ-BhQ*)2' );
define( 'NONCE_SALT',       'UBRurclFv+aS][h[t,`*QdFoka9Zkmgip/2nW)$eE)W]PL{rO*>]p%tO(g4ba)[a' );

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
