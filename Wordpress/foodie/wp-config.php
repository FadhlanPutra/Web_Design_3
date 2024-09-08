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
define( 'DB_NAME', 'db_foodie' );

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
define( 'AUTH_KEY',         '8XJU&R~cQyB{(G_!0][}nggz-`I#x[_G@6k<v2 =[nribHC~CkWLw:fsL;nJMt>J' );
define( 'SECURE_AUTH_KEY',  'GY.|s-OG/Y,P(<O#[8Td# _:g.~;ER,!^,I/|a.FT^sQz~>SJpX}H@;TG?H4b9*x' );
define( 'LOGGED_IN_KEY',    'r5yB`^a6%_Q?MT|I,U`QSL^PCS)1 k.?A_&al`6=,.{}]oN1$Z-;uSI>Y&a<9O$&' );
define( 'NONCE_KEY',        '}IW//f7 kBoyfq!uN$M`WC+XtwMs$CGr4cM~+PxQou0:eu46Zn(78ROp)88yJ7ZR' );
define( 'AUTH_SALT',        'agHZugKqb~z=KrH<z%GehyU6Ya]~L^ygscNM/Abb#Cs#DfDb7W%>_h,~4VvLzh<C' );
define( 'SECURE_AUTH_SALT', 't,dUh7C}Cu*WYqlM9tl.9 `z7T(p?c}`g|.F%9T3PJljDEy@Jsh9ixWmNBx1MJT^' );
define( 'LOGGED_IN_SALT',   'X+#NQ8N$#<|S?Ct`5y*1S+GOCryhWb:bB|zX,)^e[s)sq!vwRjwIakR`h.$%$.r~' );
define( 'NONCE_SALT',       'XjRoHVpY|)7qQI@^yG]%LH]>rt5bP}C64}![[H4ky8{dvO%8NQT3tf4Dt$UL8iZf' );

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
