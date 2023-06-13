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
define( 'DB_NAME', 'nam_phuong_sai_gon' );

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
define( 'AUTH_KEY',         '?y@|hUGt:8<~OV|qn!8GcVM$^$^l_8c{}!Xaosw`615I36&k`<PV~B}4]W1jg5jX' );
define( 'SECURE_AUTH_KEY',  'l@JGH@P++G$f:.Cs~XlNwj6peC`.T[2pRka/QM4/1$#/gcbXA..i{9?TX?1zLM{V' );
define( 'LOGGED_IN_KEY',    'fg8p|M]xiS(<~`6~LReD>Nml)q(u`Bt&M-`gCY34;s/0nHH>q+n<Xgh/K4=dDQ(Q' );
define( 'NONCE_KEY',        '/p*gIF9QZyl:q!AkqR:>U%-AucHRG8pzkDi4`uU3l9BQ[yXHoZS|2NuQPOHw.N&o' );
define( 'AUTH_SALT',        'h]|ekrn*l!+:z;W7aln1P5&fg<{BU}<r^5q7~w!kR#H1]8KaVll;,-D;|>3([><%' );
define( 'SECURE_AUTH_SALT', 'X/`zzCO:$1@~Nk)$o{GYy!*Kc=+zW(kV i6N;Yf%;6jB&jKYbZ(#BtOgVdyzhmDA' );
define( 'LOGGED_IN_SALT',   '|LM:lx@Tv,uf@I#Tq]HJ1UppNPi&v`>Kb1p9w{T;K0][;:{c|rPvr])|3[(A=1GC' );
define( 'NONCE_SALT',       'wGA1w` 79#1*ex6VxsiuS`qD7kW5kpX,g$]bs36[t!ZZca6{o}soS!kA@R>X=i[5' );

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
