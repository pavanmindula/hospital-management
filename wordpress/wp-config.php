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
define( 'DB_NAME', 'hospital-management' );

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
define( 'AUTH_KEY',         'Zt>PT&%$Q]Xhhdp+s[5rY|zO!_b*coXcJ6_P.@-JHQ_V#j l~o4[-cqirN%061MO' );
define( 'SECURE_AUTH_KEY',  '|bMY~q5=FMRmiP=1M$(-nW!NrOpty!-)9&P0zH(Y|?Rjr6bJ=@~|~]r[g9z9Ty:K' );
define( 'LOGGED_IN_KEY',    '&36NOw}F=Ncu]1Sb$cEvQJs7}j*Sl1BhYETDb;h$jhI^yy= z_IZP^lMX3pM[Nf3' );
define( 'NONCE_KEY',        'N&;^g[BTzmtblCbwE{>USWSqq< 9Fzf&Q|ZYZ8<z#I|%cv!nkvYjzs:u%c~Y!V8{' );
define( 'AUTH_SALT',        'yY7~Cu-=[}s1@p@1]I#/=b#(HO_iG/zv):Z$}H_s;%)dZd_u%SHZlyZZ%oSw1G/!' );
define( 'SECURE_AUTH_SALT', '2]<o<M#tKQ(HzZ$7sk oF/S+u/(wjEmVbTyI[n5^+5GvcQ:)U:3-LOt77~YW&}8w' );
define( 'LOGGED_IN_SALT',   '!0gzZEkN?,&jAFEUcmBhT7Is}R]?lx}.3 ~.`xck{=%?79rQ&WY|_r3eL7P$iZyM' );
define( 'NONCE_SALT',       'YHY),b}r<0.dK[w6/RJsQA|CNRt~xB#>-`$],.xjMIi[!v/uW!rR=asfY-?3:usL' );

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
