<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'wordpress_blog' );

/** Database username */
define( 'DB_USER', 'blogroot' );

/** Database password */
define( 'DB_PASSWORD', '2SyzW%qh1OU57wCEo6Y8' );

/** Database hostname */
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
define( 'AUTH_KEY',         '~#^+zW2nnXgDw$:7?X]Gf.Pw`vOq0wdszI7tyQ]SVL}oqnuqWO=-8V!yv0*vgx@h' );
define( 'SECURE_AUTH_KEY',  'o(u&]sUZ%#GU1~<SsrEnl(K.soc{6uqL7dpXnYx,^>DaJH:/s;tNPZw:d9*RnSZH' );
define( 'LOGGED_IN_KEY',    'Z64BV-CkT`jnF7|%YL<zJ0Ei;`U8xH6)?_:>/_!4z%=!%7iB@+U$;Gp_R}Qv<l##' );
define( 'NONCE_KEY',        'aUX8Wo:RJd>p]~(1ofM*P`&PHSdBD{jf05c_mm7S7iy{!AcV=fCTD)R#aBhx,FSY' );
define( 'AUTH_SALT',        'X1!P: *#$7qRS9Rdx>[wP<IG)@c#3z1TG2*_cKU ICEI73AP^]G}-(d<+.V. ($Y' );
define( 'SECURE_AUTH_SALT', 'Ezx <SR`?{/lO(MmOF9-4=FY65X7b!R_mr,W,:tSJ2s;M>C3ls]<Af;ElgyPv0&0' );
define( 'LOGGED_IN_SALT',   'XdT_15 MADqHC<TvN!ov!jm/Riap6e%6hw0u&a>0yEz=&JG{G;*:N#o#X#a),KAI' );
define( 'NONCE_SALT',       ')d8|n$<faYH18P^ Wo*,uil*a}>:XXxa4>t(?+I4_jdJH!}mY2^_fU%!+R(3l^+q' );

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
