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
define( 'DB_NAME', 'digitalmarket_db' );

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
define( 'AUTH_KEY',         'zGb5p$8LsHNHqR{Zt($c8u0:(;NXTZ~Ls;s3-C>?&r6M[<lz`c[C9Z^[?W2O:I&A' );
define( 'SECURE_AUTH_KEY',  'mwW3&bzEA4BnE21![4-,^LMZi[P_uRxv+HG2S^BCWD_J]PIy_7q-2:|5~OKBoegA' );
define( 'LOGGED_IN_KEY',    'XJBx}EaPZ`A3F$a8&0`nDrN4PAgNKYCu/51sR2,q,&FTW0ExOh9%b?a}aN9J{8WW' );
define( 'NONCE_KEY',        'x2mhQu1DM*`{2`Q=zVdH:Zaq3~+K$jw; DOxT9)TmO`h`/9`/1E<$m>`3u>3Osl ' );
define( 'AUTH_SALT',        'Nqdyph/,2RIp|3Fkqb]e!@N[xU?`VW04u&#,b}vZ}$dt6&=.~|Cv{Yl4r[z|/@5G' );
define( 'SECURE_AUTH_SALT', 'DE,gr.Dk_gELhU6V5A5Qv(fP,GaG]/5#?&}SI)nD(l(~T^Tf1H:U/4r??#*|RlA`' );
define( 'LOGGED_IN_SALT',   's vuS.XvNDj1Wp[3{5~3ehf ,t6izo>&^UQg!P8ZzWUU4|dH_<W!]sa|+~J%Ev1k' );
define( 'NONCE_SALT',       'g9@qH#+;~`]6er?V1oPaaPu03--1:a>5{PMR{a-X1L6]Yig^o,VIwcVbkuSFQzcr' );

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
