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
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         '?$rTkUwnz- m75SZq5Q{Jtz)<?4fT kS2JZ)NPI-]FjsT*rKx9w&N8$&yonWy6 }' );
define( 'SECURE_AUTH_KEY',  'E2b]3`B-U^S+l#Pt6Q}e.;oq%2yqA~W^.>[WMrdc| } {vwGk6X;q+Q1{!0ftw(`' );
define( 'LOGGED_IN_KEY',    'Lp18S;i:|M##MfZ<pXM9aqim4:Z#x,^}p2jEfIKjo!:6|>mFsgj.e0>@d.0xnfU:' );
define( 'NONCE_KEY',        '2ZQ*FjXgv#_slk!V<@ltR,2^X~{:G@99.A,-c#$KJv2{Z!sS(U,sY?To>[0K#@]V' );
define( 'AUTH_SALT',        'Y CVbD$xIo[nn)_Fs!.f/ =$G]W~zN.K,ld`G[iz|Wwd3]|[/.v0ME=;<_64|7Wi' );
define( 'SECURE_AUTH_SALT', 'Kg_o$w5gq#[]Z~?R5~q-1|w#G/y~0z&/4k@Q8Zs75sm.OSlK-c`y`%F<8HAW9l+%' );
define( 'LOGGED_IN_SALT',   '{DpG#bn~!5yBS0o{GwjF?U9q|yFscF&>/d07g$@x{A?%h%Loe 2N&&zTeB(O6;x4' );
define( 'NONCE_SALT',       '(`!Ce,1*0qXLtj3x^ us0kvWd4* _MzC`~22sp!L#2.w^4OiM_0.T^%*|*404J g' );

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