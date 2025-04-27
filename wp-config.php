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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[/Rh~>ERdHZLetTmde!;8zbTl.>L,NT).42v2W%Tx7cTr~d8 3i[?jehM1!KXr&s' );
define( 'SECURE_AUTH_KEY',   'ym$$:zoe`[B#*lb4s:u$$r/9kUr UqdG1[7[6)n3Ji<B]ft1W~:12%]RF9^*e ){' );
define( 'LOGGED_IN_KEY',     '%B90s|9I%wleVPYZ@D1E(Y3b7L_GIE+~IhYH}jmu;-SU8A`O*bDpejl#Mh2lO3Z$' );
define( 'NONCE_KEY',         'xb_?E-t^d!jsb*gojg^d)9YQ5V3xY Z$hQ7j*Sg+pI7e{4YW:4ezjw= [^xL<|EK' );
define( 'AUTH_SALT',         'jacxTgyJT (`7$nT0`(5?KL%*2FvA0zu^|p^<la-@:=Xf:5~nU:ZM$g{5&Z])t:@' );
define( 'SECURE_AUTH_SALT',  'M7ut`CXpa5XE{`]g1Z+/}x&n30k}$Y?e0Rn{U:tR> uc +[%B`#shl#awWvlKtoz' );
define( 'LOGGED_IN_SALT',    'OT&oF6$WMHF1FSj8GR2AIZJ*hUAOvq,A>DF!bp=[CO=E]Bue$!RND^;-fF}L!zsW' );
define( 'NONCE_SALT',        'q~%pOO}zy!;Jr9H*)yk@rtpHRN[ >-uA|RGqDEKl8X;vd2ByaR`n8aC#i[k4s84L' );
define( 'WP_CACHE_KEY_SALT', 'G:; JTjDmHc_bBoShmf+EdtA}BY];(BuC4wI&h(wbka~ +m/#de.~XYm$4k<Rwav' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
