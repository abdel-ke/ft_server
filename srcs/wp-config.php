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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '+cN^^*{9YspQm!oe+E-EEA5e=R1MrAZ|Ju`C|:e>~C(y?P2Ln^!~[PfO)#E<&*k.' );
define( 'SECURE_AUTH_KEY',  'c/ _+DDfyXd*u9:xdain87MTN7]8>UVZT500.~yTmdYJWva|ixd`TaNiE>tD`SG+' );
define( 'LOGGED_IN_KEY',    '+:+/5pL^{T.>2)+hw?bGd,/Bf11:0e-1q`>XX[9HSmD]KYi]`IlGo&pWLxK<[`uw' );
define( 'NONCE_KEY',        '`Lk_SgLQRBaK@fJJHI4gEdYzT;rV6vmO5*DYe{}GNWE+gg~8]P+O6a<`6RV{&<Si' );
define( 'AUTH_SALT',        'nSgen)0rs}n<dzp$?(IXXF_i4](((~?T6+v2F*e)9yRtxfjAe/=5XX&hBXNq<|{<' );
define( 'SECURE_AUTH_SALT', '.,)u06*a 1o*FBi}PRm-jHHZn19o`DY7[`2IB`8NELU,iQ/_#+2IV0g28`u(<CSS' );
define( 'LOGGED_IN_SALT',   ')6J&{-Q?#Cs4F)+Nv4{u?#xJ|$2}H*{>k|IB]!)CPc$auD3*oA}Gv:%_(QsC}RT#' );
define( 'NONCE_SALT',       ':]27=-^{#2vO*z+l~|u|Ia>]>Mysfm@htMpr*&,di1t=f6VpNHR6&]7_1a-U?Wr6' );

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