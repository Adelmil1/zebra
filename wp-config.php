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
define( 'DB_NAME', 'ShopSup' );

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
define( 'AUTH_KEY',         '(04P-uzd(Ag5VfXs|>(69(guyu086}Jm=2GIfj{9dXc*YL{n>92^o]gpNt|92,hO' );
define( 'SECURE_AUTH_KEY',  'UOSgl-$KW%6Rk;d`)45/lm*6$G#(1=iOlg+GPp<JqwHgYm@>JQoV0jl0e]EgmsnI' );
define( 'LOGGED_IN_KEY',    '^mAtF/2!W|XPOCjO<+ B@AJJ;-,JaqI9f_2?F| pe.yLUPM.L=(-D:P5QYa&I(Xs' );
define( 'NONCE_KEY',        '0+?+0%s-w>#b-7{=9wB@cSD^*b!..}w:;{9g![aEjs#^p>(1mtCiX.uYMwVB,/JS' );
define( 'AUTH_SALT',        ':KcGB=,JcYh}(|LiS)qeXR:0!%C0E5-IPF<^h-CD(0goeXu@tU#T7ThqIVj8R3A(' );
define( 'SECURE_AUTH_SALT', 'RE@JLH&SnbRnd]hBWH7i>8&?j=wi@#xx/nkNCp+oU,hEs?skA7Od7FIe-3s^y`mf' );
define( 'LOGGED_IN_SALT',   'gR.a{2mM-8rZ9L?I;RxY>4qa@:=:Qg)S@Z(B7o9r)i-*-DXXV02vCwWr0VpM0{#q' );
define( 'NONCE_SALT',       '1E^$i#:~FLCz0x+WKW/:3bzSqpurNAQar]Mh:gN,^KxnjE-:M}$>;:T1DfI#+GHd' );

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
