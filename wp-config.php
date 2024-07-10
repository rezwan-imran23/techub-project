<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wpbatch-02' );

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
define( 'AUTH_KEY',         '/ugQ9w#|gk,pc7mibr]?x:]b[YQUx mOX4hfNCuhkH]=x|7V`zcj]CdcPoz)D7Ic' );
define( 'SECURE_AUTH_KEY',  '|^|YKSx:1OAAX3#_{5FhV0p{e3(-TfTgAjNL`P&RH)TO($Ql?D=<cQ`aIF1GMUO]' );
define( 'LOGGED_IN_KEY',    '%jI@t4]0!r- or-mFf6MzB;RvTB HDNIe#E&-u# /yD,39.umDE-pi7;GR?{f>Jz' );
define( 'NONCE_KEY',        'd$c!K{5t]F=%XOEbdY`eG.OjQL1z$B`dM^fgnFTm;yaZ_]lP^H`jA9S6Pc/(FV/b' );
define( 'AUTH_SALT',        'ckB6&vgC!<X)5oo+oL(wuj}2q3{4#JaRZrQD.&e~ }iB4 ehtsZq9yxz~J9{OHkV' );
define( 'SECURE_AUTH_SALT', 'OOshrR]3e]7I4m^*QuiDImC{n/_[t+gH,qM@o*sO%1(>YA_uJp?*/r$DBgySO2(&' );
define( 'LOGGED_IN_SALT',   'h.N{=WB`fl.SW(^-z8/k/fYx.lW,i5pXzA@H/mL^3H^=/JG1f2(E ]EieKw_];I%' );
define( 'NONCE_SALT',       'gj8 /7872C:0`Gak&tQ+?K(Wo;$s9P6XP+fKh`]v!<K30M6fh^BFt4ZaSjH+ nag' );

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
