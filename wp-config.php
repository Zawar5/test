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
define( 'DB_NAME', 'wp_bingo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';dv]dFD m{aTW?]+>K2czBRHEtf(Zjg?am^c7/zI(C=gm-!o@7mLlefl>O`@eQ|T' );
define( 'SECURE_AUTH_KEY',  'Xm)oj<<PS27fV^|Pwv=30v#J?rxjTz(0^wE0pbWCa7?8qXg3MmTB=H{h(:6uiH2u' );
define( 'LOGGED_IN_KEY',    'Rl&)~XP :yUxrkKkDvj%fi%36lyL^0Ea^9v)VW8lY,i5wcb-J8s.,mytyTl&5n%r' );
define( 'NONCE_KEY',        '[ k&>*U8_v8hhB4^uSYr%_zdh/(?[RQ]!/(euTAY@5&G%?~}6NZgB-$D$`L62Mj&' );
define( 'AUTH_SALT',        'D}k_HC]~b^tcz4$C$Hh2^MD}<<md=u~zrS|$ko$;Wkoy8y0lx$1v@Z|:[egmd8{_' );
define( 'SECURE_AUTH_SALT', 'yrTDt;VDAd51!sRmJkf27FGlw&sn#3mm?nB.m0DS_*Qu$FjPH87_lgodI/aOp3EL' );
define( 'LOGGED_IN_SALT',   '?Ct-`W7cgqh$`g$3,a:6|c/,=M1M|&DGGcXeb0zNx47h{h7)vVG:U6sscuYky+bu' );
define( 'NONCE_SALT',       'TXvSu{[~*-u1^{4qfoo&{$q~$OrAw}7(h&EHq#)O$x$$9{@{W0&019y1Yx3,k_Fg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bingo';

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
