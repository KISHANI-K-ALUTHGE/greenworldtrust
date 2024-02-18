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
define( 'DB_NAME', 'greenworldtrust' );

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
define( 'AUTH_KEY',         'TfN%=hVdp&:Pyr~A5FzzN?PpVjjP,5lV+j<3?c.t >Q*$$VK )mt^m]ni;a|,#g&' );
define( 'SECURE_AUTH_KEY',  'T7NsHQSJTZoi~Pq36$!q_<CZ*{,t[64LmM$674Eaq)Km_}_!whphR>ii2q%w%^,:' );
define( 'LOGGED_IN_KEY',    'l&Dj@[*I::EdHr^x.GgL/KKt$=;,Q<dErz7>9EPQ9307ChXm4DNJ#GQ&6Uu<|W0N' );
define( 'NONCE_KEY',        'e}3vXI0mJzQB)LzkkvZ]x.4J:fcojOng#tbOIFDCN/X$*?!OqbP{X4@U+h*@r)m#' );
define( 'AUTH_SALT',        '!:B[aIP)Gi>{H3UV8e}?moJ@gr^}Us7p^l1R]<oCYOE<rDS,-SI~~JGE,W1O}g-]' );
define( 'SECURE_AUTH_SALT', 'ixB=%|X#R{]1c4,[R0lD#s%MW!tAr0QT@,OXqKb}f2T<raJKz6_0#A%n>?s}/hrR' );
define( 'LOGGED_IN_SALT',   'eNoyo74!oO?c-([nTb>sG`@BMwM?|62b?gE4T%c0BsHmsSPF:.Ow<uOF|``h?J`q' );
define( 'NONCE_SALT',       'p*Q]t$ ~YpP:+zM5#Az09u!v0kTE6UkB9b/q/`N+/H:IO[QsmKX};2~.v=Zm18I(' );

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
