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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'z%_~T<6@M9@;{`X|Y-4YKnlxv;I*4jfwD[Bv;kz[ gHgkKO`5<*Qyvyvx#nbjy^f' );
define( 'SECURE_AUTH_KEY',  '(,Hb>b/A)jiD{+} 7-[I Gxd!nEvD}<qGjaw}YZE;J:3?|&kjkHmx?-1~Xkkf$FA' );
define( 'LOGGED_IN_KEY',    'G&,najK+<5X-W=VW4+R<Qw*hgJ2M!eV[sNLg+`_dz{p`oNOueZ_xj65,8)GEa%FP' );
define( 'NONCE_KEY',        'EPKv2HuIkj|H&Ns$D~B9xcsh`23x|FkS%gej-y0[:.,A~IdlC=)VYFL(4smwD)hb' );
define( 'AUTH_SALT',        'yNynxBr1-P*nPMrlD4*-_*zoZl)ae1a>[YQYYv7[=xLYiF+(2AhKr.epfRLHcx]7' );
define( 'SECURE_AUTH_SALT', 'kKcMMZ--$q{Z-n_[EW:;L17mU2Y4sNVu2_Y<2xqJ6C9X>?Fl1_64pb@xELh+_@9G' );
define( 'LOGGED_IN_SALT',   'W9=[5@4_9qkABLm(GpdMz`b=@u2PBlY|kb*VY,Yce}m 9SWH?40`F.FM~`&cY5dk' );
define( 'NONCE_SALT',       '>kmk>r;S# /2KHed->wMx]d$otLfE`5i+;vO>1ZXw,S6O=ggt>lG{ACDEF1~((H4' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
