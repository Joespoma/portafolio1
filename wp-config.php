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
define( 'AUTH_KEY',          'Gx8n/@/bypc}Huk_>wkT:O2R`8a{yl`.SWyudU}m@[cK.#C$9$^=,d9CyizBH5T~' );
define( 'SECURE_AUTH_KEY',   'qak<0r9+A9&05n6dgM|+lp.0<{Q2a~Dl)C)L@lJ FIhv&&0r`Bb<[q;b$~e`vHR*' );
define( 'LOGGED_IN_KEY',     'j*9=fvgc#grgk8HB%x7@] iV|[FkJD(^V6c6VsaVd+@3A97?&DeVoKHbDS]=M*OB' );
define( 'NONCE_KEY',         '(=V#ug?BHBqn_OUR]R!t$%.kD|kwoR31/EO#3+~Vy`3Zu|u#E+nlwCj)W3dRGbsN' );
define( 'AUTH_SALT',         'B];cMI~EqW(&0yh@09:;quk9Z1hscmkcVObNU;.?zQ4jZdG2*slI9,E1y>M4 U/5' );
define( 'SECURE_AUTH_SALT',  ']/mAz{eWConG,K zHt7Ym&uPpweb{I%NN7y*iWkF XMBBMaunOV{^QOxnWI6DyGa' );
define( 'LOGGED_IN_SALT',    '}8vjekj(d<wrlqO]iO|>5]8m=BH;C<>pKTvZWYf9xSl]&`81|=H^7MHx<;{U$/JA' );
define( 'NONCE_SALT',        'fwr_;V`RV]`5Z(XgH9W-I8>BDd-Re^`N,8: <Lx41PdKV52}fzd^*5?`]@x{n!BE' );
define( 'WP_CACHE_KEY_SALT', 'G0GhJ<{8gvX]}Xb20h0[rM?-C|N%Ps<hEP)H4T<R{[rQ4Ul>V!N-4s%kqe8NDOP8' );


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
