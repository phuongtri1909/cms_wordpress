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
define( 'DB_NAME', 'wordpress_631' );

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
define( 'AUTH_KEY',         'd0ITpN>lpv(3X&)A+U{&>{+[_cx;w@ ihb8tT<A!@D8DD10OZY`~+@1T!]fM8aE0' );
define( 'SECURE_AUTH_KEY',  'CYf/{G-:c[H/Hx~bZ)CeF4cZE7?GR!iJJ<04<k>pDqVLA9A4[Iindc]^:hjj`_2a' );
define( 'LOGGED_IN_KEY',    'Sjt!OloIryibrE^zv}&LK?{2C&W7sOS6_Kf2RDn,jz:ao+Iq5?~p~,0,NMj0Bf6-' );
define( 'NONCE_KEY',        '{8BJ[r&/DIG,pf99`#Vn -o%@oYY+C!i2cO^,nX{FA&QR#FB)WBH0S4F21enJ.m!' );
define( 'AUTH_SALT',        'b8-VNAMqM@#Wp*)JC*bqG0oJan0+3YDq::F3?l)72A>ZNorHz2Wqjt9[9-XJm+!L' );
define( 'SECURE_AUTH_SALT', '?zi:X |hu:}(]d0dYVe~k.+|{M{m.3Uo,[J`klkr!ym#-CH]g >]sN)`z&u@)d0_' );
define( 'LOGGED_IN_SALT',   '{dS$it)flwi@Q>Wh{*NkVwMC VI:IP) Hr~)q]G^uW~I}YumZu%uz>#[p/I|cV[q' );
define( 'NONCE_SALT',       '/:hEd7GGoP]ac&iwUnCfB)6r}tg>lO/X1UEX^Hq IRox$a!uf0bE3F%T(?;9Q*L7' );

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
