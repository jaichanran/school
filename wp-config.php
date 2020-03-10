<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codeanddesign' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C9@|;oI^$6;LobX$R#?LM}t6g^H9HC4FuKhRi*CQx1ChwTmKLUAff!nL&grkhG U' );
define( 'SECURE_AUTH_KEY',  ']X; <8m.&>a~`IdA8H8BSN;,X>2_|[odPv(ru|:g]9K|{sze]v-r%?l7W$Z1&v^+' );
define( 'LOGGED_IN_KEY',    'I!J(;*4O#u[.BB$K#+~RL*$wYnm-{?Z 82+!:V.6<H%i-Wlrn8z`u>ivd?#3(JT*' );
define( 'NONCE_KEY',        '@6_mR~:&j=>)$qalo_/}$6Os8n2gT?_s65pN2@*XY.I;.&`aBbtR!.4/x^E_OF;/' );
define( 'AUTH_SALT',        'j:XpKIR!Zvi_4;[)BjH@l`]*OoQ )*:sVm,iR8aEP6>jMhHGA2O1u>sig-<-#F/H' );
define( 'SECURE_AUTH_SALT', 'F)![f0@vu*Fpw(x,NMOxhOiH4a}A@i],u-M1Dg}~Cg9v%wMk(ZVxP5L9^.bTq2Wv' );
define( 'LOGGED_IN_SALT',   '7T4,{9:R87T+]w<a+Qqh8|$pm(t6;6.nxNV|Gt/kq8)2#5iZ<Z.!d*z8t,= m[Lv' );
define( 'NONCE_SALT',       '=j,Ep($L704#i^4$JWkA-xcsSrMMDn$Y/0jUxc0;tFUWOa<,c_&PP[9D$9zD3ruQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
