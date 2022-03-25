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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'A)8&,_o4=jptDfi9KX{QKyLEOB`dS>A~&,[ GO6-@R@NJ$0rOYHk;,BB1PCxtoj~' );
define( 'SECURE_AUTH_KEY',  'Cr*U@xMksykM|fAtQ%Yyb5OK##x [c~D^54|fWPk3@s(MktQTgV8;]+)uFI|_(M&' );
define( 'LOGGED_IN_KEY',    '-no3__oIlhoCLOXLUD$y!Z-(6Yg%G8m6erCQ[%CTia,]I@``$*>-x#IP*wYFH!sH' );
define( 'NONCE_KEY',        'n?UZgJq-dH^mP1{w>y7X~>UD01sX@3Mpj+FdpSb{X^~2K(PT{&r-7-E=%Syeu^xP' );
define( 'AUTH_SALT',        '07^c}_!hfXpi/B3@9m.%x%]yU$ZHhE$=A-|i%?dt//,U)8n+bWf>,B#>2}SGKjDb' );
define( 'SECURE_AUTH_SALT', 'h72|X>g()yA5&&%oVK._l]3Q699sUz;Ij2bF@{GsK%-6>fTO$f{eO>JrT)6zs%C)' );
define( 'LOGGED_IN_SALT',   '_dxUx1/Pje,Vh(#`,{B,|iKDPQUC.+U~A6Q|LS%?%od]Q~`{^]t6QPb,}UY{NGgq' );
define( 'NONCE_SALT',       '8V) g(15GOW9w/UT1ysA.hwJ$ Y1c)=P1si|A]0hY~Z fXJL7V#j.A3e a?I@>gK' );

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
