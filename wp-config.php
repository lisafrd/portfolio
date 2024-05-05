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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lisafredou' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'V`6tTufm8>)e}?ttVFL^Q 3i!]nY_7DS|+i+D3#~?5h/Y1:`El>MjkZcixq-9^:5' );
define( 'SECURE_AUTH_KEY',  'lqVYmI#o^`by{2m;)JQ&kGq1<a}meT4(T_Gtn+?!wW.i.a@!vg<oi2^Gd;sftWD8' );
define( 'LOGGED_IN_KEY',    ')FCO&ILk0XDx(6YuSB_wYgQTdUF6-V1Y)vB7C[&z~2<>C6]kf+6CboTG?cFhV[:K' );
define( 'NONCE_KEY',        '^%ZS Dp9)z*]t./:%y+oaf`4j;UQ@KNP/W6yD[@p`.:e]y|`X6d7G9KZs-v|75f$' );
define( 'AUTH_SALT',        '=xTRn[?rczL%XARrr^^vhd*sFf>>?2RS 4^cK-g/g7y[I8{zC)I1/68U0j1dEgtl' );
define( 'SECURE_AUTH_SALT', 's_=SNP/1lWhz0Z;vlMb,(my9=|-Dogj!=$`8B}>E3q?O[VM/}W0w+1eN799{-nM0' );
define( 'LOGGED_IN_SALT',   '2&ySQ;%GI8h9J^f?C=<jj+vaaFVdn|9>.OOT+j2KX.a}TV*?]rU32-[Nq~f*z@ar' );
define( 'NONCE_SALT',       'Y-0pR$p%sD8Z89xTj!V +L_1ehZ>PSCm$;?fQj(J3}B{Z*Lw-,$qk^g NF E;_W`' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
