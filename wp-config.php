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
define( 'AUTH_KEY',         '-_e|=%ejs|LidXinrEUcarkKD9y~u+hHQ=r%a7[OPBX%gv#(}ki^08?9!b^Z@7X1' );
define( 'SECURE_AUTH_KEY',  'mD6AUr~[fb[gm>UobWSQj[FO=,9m;%8fa<n^K[(,6hZU0uEh*I9<U r2bb}Lb{:H' );
define( 'LOGGED_IN_KEY',    'n*N_< YTfOu5tmUzNYn%>7k1~JmE?X.P~x$m^97KF=6P!=t#j4k31H)mO0w|=pa?' );
define( 'NONCE_KEY',        'kTye>PPkqm|K%`t7h*s^F6u!&;}zV75Gj:`zJO0n>@:b`?qVYhv+U]tEBkbw)bb@' );
define( 'AUTH_SALT',        '.Tm9RcM#iTQyaRe,$#l&L[[#440ay6 q*x7}T:eL9Hd &[EcbA~Rwgz_,!-MOM_!' );
define( 'SECURE_AUTH_SALT', 'Ady:Q&{I*4_P3Be<Tex1sUM:4V{`B55@0oK}`Ll-^{]ElgMh]i(ukxCp0WEvFe)=' );
define( 'LOGGED_IN_SALT',   '5 cj@w~VSYl_y,nM{[~E6Xr{/)e97StvLRtrV{s>:goI=eOYU-a~v-}QyP6]dY2%' );
define( 'NONCE_SALT',       '?H CM5dPS6!ymZW6-*gnKjx $oU`jvOK15>&1u3+3OEH,Tg!92S^u_gYs%XQCN6=' );

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
