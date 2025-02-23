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
define( 'DB_NAME', 'resturant.sql' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'https://azadehpourfarjam.github.io/resturant-db/' );

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
define( 'AUTH_KEY',         'G0D ._jjv&6U=U1:S66,/MtnDohhZ{~TQa_.;wLTd]n&WzSsS6Q1rfM}V];/JG^?' );
define( 'SECURE_AUTH_KEY',  'E[L7|_gBnw5TJ7f{$7+b-Sy;ywSJ)u$zzNa~ziSt,pNG`O9h/ZFGZ6acVl5es-(I' );
define( 'LOGGED_IN_KEY',    'u3KFU[6Qw;+~%+QG^z!{[xMAt+*]Bu)E&FV>*.AyDA_6BsJB~}Wg.=RoYsh8Zk#/' );
define( 'NONCE_KEY',        '(w`tn2C:Xl9Sh/lk}<*+<?xW;3}fKu3Q}f?gG.y8]$WRYed3r8(L(^e>{Y@&W}D[' );
define( 'AUTH_SALT',        '/~4MRzeJX3W;##16&,_{9;8gqCxE&[)*k&iUy7K*4q0<F=Yh: |A}na_P9XC|[N(' );
define( 'SECURE_AUTH_SALT', 'bl:()+Sf062Wg!D>,k[w7YiG0}n(u1InMmudur-}d=Sg.<87Cq3G5ZS4nf0>}K+]' );
define( 'LOGGED_IN_SALT',   'S3^db)GIg ;/y[J]xBMG(Fy%bb8 1uS;/1P2hU.}x73c3JaHp0@KLgSb5{6.K|De' );
define( 'NONCE_SALT',       '+FBor ;~>cCKV4??h%Qzd]Lclz0+TY+GS@0k?NEx`;Upwbuv)y?t_uViY8!5VbL-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
