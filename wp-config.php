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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fateccorp_db' );

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
define( 'AUTH_KEY',         '8P< ![833e9Fm~v;.mqftS:L 5VM;_E/=z |DO%Lwr,,[4JfA`ISPkN,~R,rF=$G' );
define( 'SECURE_AUTH_KEY',  'JiBF=nP+V26$OLVW_TF-6*,9>/O4(?2:Q?1H4_Hw<,.Z_<s/4x)# t1|t878[NMR' );
define( 'LOGGED_IN_KEY',    'J@}dS]:)n=I9OPsGdX}(A@yTbCe*N&d%<Yn9Css<9W2B-SX~t?-E)0,|q88-^TiR' );
define( 'NONCE_KEY',        '+=oXLr}k57~SL%qQvHzb^X$xJ/?L@{(.;qYh12Cr5F,`rY+]alC.8C?ZlMzrX*q`' );
define( 'AUTH_SALT',        'Bemf,HN!,iadM]UNSjT&J``?D-,vFipvm+H2nsx/0}S>us>jK_M @1|rwe`V4vu2' );
define( 'SECURE_AUTH_SALT', 'ZM;H<* 5e9@O&WEGqUJr88`M1XMl%|!&_qBq1(9V3|@<w^{fUBw)P}xDBLioOqEW' );
define( 'LOGGED_IN_SALT',   'O^IwzPvBtF2Q}1ZseI2r?Rx[t5{a8HqQ)9N5?}rsX@zjo4I]eAoM#e{ZTb1HWz8u' );
define( 'NONCE_SALT',       'L7oz7PH+GSUgZlnINe^73aPC7k5[GrddEQIBx.DdpzR 1Rh6fO>@qRvBl>]e7f<g' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
