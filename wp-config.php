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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-kecapmanis' );

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
define( 'AUTH_KEY',         '}4vP!tB|kOaq,eB*G)8SL;tF2Ei!!z]GJSt+PBB(Aa13c$k#cV@5;w%RPTzJSiXN' );
define( 'SECURE_AUTH_KEY',  '+JwMl1<*}4V#}f&By&a}PPBx4K)in/f7$zAvX]r;;wRO$[=__2k}(_Hz[;uV=||Y' );
define( 'LOGGED_IN_KEY',    'CdLk3J$DY<^|zjY[b,/OdNq[C|<[OY1vewk}8$rL+y$l+T^Jg,[`I>]N9+7ZAj2,' );
define( 'NONCE_KEY',        'sd`uhWl`E/Gn/u$cWvtZM<5ierL%~m{Pf8@_fOwZJy./]^LRSgXd+}R=v&|vWfa(' );
define( 'AUTH_SALT',        'Mo>5iV|rpSBldYZuL+T@1,+BY<s^Jz[{-j9PN0h;=&bV JHRU1s,LzRMK!qs[p7M' );
define( 'SECURE_AUTH_SALT', 'N?S_zm,u! (5w_JECP|a?|Xxt#Fn;M):gz!y10S/eU)Zzir&H|OR^I{bc>XNX!J$' );
define( 'LOGGED_IN_SALT',   'f|ADtq(+u/9esjWU}zxP*a{~]0=aYGu5/SXuP9K1MW9XQ%o%74:kW{HxfLU|a2YR' );
define( 'NONCE_SALT',       'RcT?NT*Mi3p]$qz(;Fl-;Gg<mo:UPC}N00e/u|2kXIwsPuE/[aIsPKoH?NYynl8Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
