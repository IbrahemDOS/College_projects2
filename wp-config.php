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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'q#qclBT9uSvi@U}rsPOMdUrPy3vRvp9ulG?ZN7_A,HX9-1=sMz9ta _uAH9!{L~!' );
define( 'SECURE_AUTH_KEY',  't$:iE-%l<Z q9FQ@#ss=Of,65b~d^(cS9cVYsN[3;1:Q nWc93MjSazVg1SbSnG`' );
define( 'LOGGED_IN_KEY',    '|:w_ZC(IW:L*Lm17n8GX&/:K_.ojjVQb&;$pE#pE )#J?S#X$2Ct3{re#z?(AD_3' );
define( 'NONCE_KEY',        '1WF>h};DIZ,Fs|k#9a)<_X1WUG/6+yx}3p9K6Gr.7$[;=$KN6TSI{/mt&s@9Kkq*' );
define( 'AUTH_SALT',        'wl16FYkx<rT)&;TM*JG->V0RN(,6Hz06!36FW&1Fc?NbJM_UNOT*X;-tj-D0UeIK' );
define( 'SECURE_AUTH_SALT', 'Z8<%is~SGHflbN!(31h:!/OPsphZ/]gd@_F~LIx&6=?Z|zED4?<Q)X^luz@4]RJ9' );
define( 'LOGGED_IN_SALT',   'cE0z.@`k4|r!{dzeZ*-:T*[@n,+52$O}l#hgjrpnl}^M*/rJe1I!0NPCGk:4tewG' );
define( 'NONCE_SALT',       'B1{Yw&6Cd5r^uO?]+C4anxq|(`=%0V-r)_MxyFc=)-B<n9,@y5%%31VTjm.j!Un&' );

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
