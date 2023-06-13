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
define( 'AUTH_KEY',         '(B-iezHTCT 4v!v#}?EQ*M: u17|%dJrm5&Z|ON<{U^H55y~YfL[)h}oI|l-D~#>' );
define( 'SECURE_AUTH_KEY',  '+>-=:/[Nq?`(%=Jd-Y?AdbMO0GJ6M^0xYwSCYH-/DLG9U KW$R*8*+|.~?}Vo9{n' );
define( 'LOGGED_IN_KEY',    '<>+0PAfL/RrUw=# 2o;R@Ly>Ue0EZ)Ie0zn*6H*UDdJo`Zp,&Och*%U88~2>ZCTu' );
define( 'NONCE_KEY',        '~:=_6&?Ds[OyZOT-R.p<]eNOnY_nnf^Q0-JBn%_-Aj(hF5E>$4J-Cgr%ip7DqW6D' );
define( 'AUTH_SALT',        '9lsp(CchwrR=uBq.I`m4wy9l5#I|%miJ|@({t/i;YZ/*;2f8}LDkczG3[GvSVb,k' );
define( 'SECURE_AUTH_SALT', 'Y<21&kL)X&f13+Vjh]:UB]jauz>I+HH%*nRK!wX1rxLmE3wDK?A&h9%:^F[]p489' );
define( 'LOGGED_IN_SALT',   'hdo`QxR#q};ZcmfA##B*3$joJ5nt=;SOBDl/mV/JP]`iNFDoz-t?A4f9!2fHqL[)' );
define( 'NONCE_SALT',       'y,zzD/<LwBO#UG{]0 m|K*;(b BuqTC[mjS2FGXrxr;|TCC;*?(pwfW!6&.}D2ZI' );

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
