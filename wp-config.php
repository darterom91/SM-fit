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
define( 'DB_NAME', 'pruebaBd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'yRsio-%mol.u1+%RU6_sEnY.fpGz#@..jy&|Q <qh81{=ksoD=7QB{wjKe>5Bd2u' );
define( 'SECURE_AUTH_KEY',  '!8MX$Sk,}|eR?r1d4WFtKj%nE-*pWY]}e||U(}?tRH+sLF9X,1#UC3#j>UTQ8K2x' );
define( 'LOGGED_IN_KEY',    '8Bc>3Lp*gw@+ZDb%&;za:U/d) u87w.xlmD#Ru=:O[adeb8eD:ZL6r{KiV$QP(cj' );
define( 'NONCE_KEY',        '_K>n?_KeSv]MKO}VY7|G!(R{2~/<FpD=obC!yKdxHgi_hg{GD`;nQz%@f0G(gwde' );
define( 'AUTH_SALT',        'x(EW6i8FjLUZ2(/}q1H5O~1MclDE%tDjI;- 2pw(>`/<Kr@*3,>_=x*C`!WFK:k7' );
define( 'SECURE_AUTH_SALT', '%6N[Mb<(tkY-1K0*k>~:8jfJN:;(O$S1!8.z0  +.;!cn$4v{<Sy2.aCQN$v>A-2' );
define( 'LOGGED_IN_SALT',   'qxwy} -A&d0F[L*L]1*?03p]LZsQU,n}i9u2|/-@M,hEm0i|_sXc-K)w[!PU{t+~' );
define( 'NONCE_SALT',       'CqV7}/ RyNc-]u*lRgf.6F:I-S_:v{?8ziJk2d,hh>K$W(5xakpqYII]3GRdh+yR' );

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
