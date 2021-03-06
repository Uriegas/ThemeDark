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
define( 'DB_NAME', 'dark' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jholacomo1' );

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
define( 'AUTH_KEY',         'RL51iFY-,U|QC+CP[Qc_(st;=wc!W3^~4#4y[OH3xAyf82#1GB=3%{:%Sm/)!X!H' );
define( 'SECURE_AUTH_KEY',  'Mh{yMtU?psgJl&]?3O77yn^J!7nYIRP2 2Q%XBxm)@$)3lxoX4}F0|~l5m!IUPtA' );
define( 'LOGGED_IN_KEY',    '*SP>`;5!@}5l-l>Oh*:J]B>eF;qx|pS3j1UYD[?$t~,j%EBhdCM%PtE;l~Pnw8q ' );
define( 'NONCE_KEY',        ':Fy3VgW}(C2;uj+<2vO-DW29]QpGkoDR+iIjTd}bV)nnYBZY,hK{WvSc%%ohp[>?' );
define( 'AUTH_SALT',        'qXYru28+KX hj#j@fzdd=2TKA/[P2q@f]tDVH|_5`,G}PGNQ<z?P5m2Fcf{yme9 ' );
define( 'SECURE_AUTH_SALT', 'Q4ve|^BJFk*1Slo@Bu `o%pE:Jb5+ywMQ)7q%5Eec?KDQ^ix7F]+.$Bg3uvd.0q[' );
define( 'LOGGED_IN_SALT',   'o>glGeneZh.r]*FkU#> aXZUFyBxqZIACTvyZJ6J<@=VOgTFL[8omo*@;f}o{,rf' );
define( 'NONCE_SALT',       '~^p~98U{)`@eCPCFphS# !n.G8|*4X&<o6.?hYHP;tNMrJB-Vn!v_i/F&h,f{Oh8' );

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
