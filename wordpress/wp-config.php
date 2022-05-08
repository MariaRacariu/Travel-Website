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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'travel-database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY', '5Ug]KKon.~h-$_b#fFp{ dsQHw6bX*VKs}$fb9MPx7<tmG/Eo`<^DMM00R.^R)&C' );
define( 'SECURE_AUTH_KEY', '9#q~omBNl~3w-+ZV`bdrH`M(J]S3*t)lt)Kxj1V0}E[yu<]c2H|9H/LdAP*vnjO,' );
define( 'LOGGED_IN_KEY', 'H$}6BGe{-w.jf7z_UZqD;UK s/,=jWeO%`@t|EAa/zn;f~Kh!65U$#R6ayi7$->{' );
define( 'NONCE_KEY', 'w)@XQ0qhlS KldX(G45%yb<k7+?KQjsg-Aa/.D{IxwhSMV<r_@|Lw=@[RE0=rufb' );
define( 'AUTH_SALT', 'pW~rI*n4d|hYevdRlRBrCffnmssk+_3A7RW;[&7Fk+XLR*T>,D?]GEP&X,jR~q#D' );
define( 'SECURE_AUTH_SALT', '~e1vTN8R|J@m-x*.;[&5xE!;NL:-TZ#:n~F`_n$5-ND;jk6S>H?W7`WA,9`H>07H' );
define( 'LOGGED_IN_SALT', 'C/V-SL3I}bQHyu^A,^UfC!z{v3C!~qbDCvA!eSNzYEqvA~e2k_#2:VcESYo!je]`' );
define( 'NONCE_SALT', '!8bK[5x~d;QQM?C3Db@d* qL~;@Jg>@t2{ -)t1[KvI+q`EFq>xH-ySFSm{5cs M' );

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
