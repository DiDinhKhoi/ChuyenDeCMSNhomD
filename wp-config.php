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
define( 'DB_NAME', 'chuyendecmsnhomd' );

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
define( 'AUTH_KEY',         'Y,aR2o # &]v%lK;</nV@;BsSa2_#=P+xvJzzvUm]lJUzu1YD pyb*l#fC_GE$dy' );
define( 'SECURE_AUTH_KEY',  '/)X@,7$q7>y+b6dL?dJDbxyYolZqz 9SF):P rGHdf!Ky*_U)7EMH7BriwHL?Cm?' );
define( 'LOGGED_IN_KEY',    'a0do?[M6x{#$|rV{*4p&s(%$4mJ3@kdcYbWpvlt`#+4/Cz5BJ2lXV@3^(+AO_Ts:' );
define( 'NONCE_KEY',        ']6zZb3SnbSZ_{2rXB>au|UYQvLSQ5mc/RPTRdW_<@@!z(Xs7@B&2rqIH~6p:XUD%' );
define( 'AUTH_SALT',        '?@J5v,I>g9dT8<`tj8H>wml,7Qs;1C%Yh*t*2T<z8W}oi=l26XsS2oF7:JMH%;ou' );
define( 'SECURE_AUTH_SALT', '[+pXoI}ba#.-TWtdU?2iEAwEaRi4gNSWmLmmLnc}hzb!{j`Mq:V< Vf7c`~:iDG`' );
define( 'LOGGED_IN_SALT',   'H/!LqdDUono%V=K*E8i?;}_B8Z]6r/cn3w-tpR6-t2#O~-~<QfM6OFzYFX]d?ER)' );
define( 'NONCE_SALT',       'x,-,p75C__fl_ ;EoJV3__~ -yMo.z6KMP:NHeco9VwXl)OL5S9<|lv,e|66]tB ' );

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
