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
define( 'AUTH_KEY',         '5;JocO-<XHD&<&nEy&%|/M%mha$L8DMmZa_N-dXCuR7I6X:00vii3g@cCvVVhF+E' );
define( 'SECURE_AUTH_KEY',  '* P:}hGhOecAb`wKo4~}%_vz7sXtNGvl+8]6.|!)B60Z%|SqLceOW>~a0qV89-Xm' );
define( 'LOGGED_IN_KEY',    'WLysm_Dax9<&UT ?e?:wBo:`,Ygs;n%[.sgB+YONCzn-Bs5=0]{Qkva]@xx#.@}I' );
define( 'NONCE_KEY',        'B QxNEu8ZwY,tWake}YInny|IuO6Rl-*rkk>0%IxPfN<B`C_I!**k<Z=hJ>|/2dB' );
define( 'AUTH_SALT',        '(D`?BQfm.+ ]:X>Z!6ZDsnN<&M`@i3|tRsMC!U#Q#BqUG|#3=VOA3GZm[/mhnDwq' );
define( 'SECURE_AUTH_SALT', '-D}c:y98![Q> ]$;Vu<4&i2m0VF+CzNhQ=i?V2!Aa}=H]4?P5/@4L{[-~KI|1M*%' );
define( 'LOGGED_IN_SALT',   '6ZyE#*iBq+mp)3/NuY[1Ie7Hbfv,tev8yDz&{@Z,N&+)&-rdTeHDW1pjsb~krJ%O' );
define( 'NONCE_SALT',       '>ToGxYx^ZLyIJkY3a:SRQ{%Q`Obn-^]pD.IDjQAFF@]svr%h$T:gY86|PnS@0HVF' );

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
