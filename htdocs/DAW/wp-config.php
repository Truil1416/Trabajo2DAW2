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
define( 'DB_NAME', 'daw' );

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
define( 'AUTH_KEY',         '.n@{wSiOU6?i*W&(N8EVEzeY{p1ef)`!Q5cPNYP{~XHwD7(t@:O1Gxr8}/M$qc55' );
define( 'SECURE_AUTH_KEY',  'ujDaw!XJO:IzuGi8Z7cw~t]VAUamS_ r(SM^Ji<K:{bKPg9{vPvx|}G//~Hz%w<]' );
define( 'LOGGED_IN_KEY',    '+w-$$om?RWfKqXTqJ7%x3akpLX4++I@v>mB|.4/ZV.1DH`/bM@#.b9+E/6zq(#xi' );
define( 'NONCE_KEY',        '@nD2O-94EKX^i)V.FV f<|pp+f 9,Lg0Br89*+hfge{|*sdC D*U0BQ:a<9&^_Kx' );
define( 'AUTH_SALT',        '%jvp1L=tFo9*aH&dLso3:^78zr|eVt%}TJAXjW/Y]5k5V#x4=HFJGsT>,oU>7rsq' );
define( 'SECURE_AUTH_SALT', 'O2~>_mNMyIBE$ewqPhi[5]B8AMvz[^>~PpH&)GX33h OEd!!g*{/Oma!kQnTgw}T' );
define( 'LOGGED_IN_SALT',   ' /P<K{h3-H1QK X@4Q7e7wzRF*%v2}~6!A)`gp{d=lM)A?#s0|1/{wP*0:ss|4|f' );
define( 'NONCE_SALT',       'k*6uEX>ju6rFlZM!~addh25+79Uy[eWgN8%>$zI3hg1YqB|{yTJ8i/`<#D+#Xfz?' );

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
