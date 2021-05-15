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
define( 'DB_NAME', 'cahayasumberlancar_db' );

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
define( 'AUTH_KEY',         'dvn)wSqjY_HO}[dHUkLtm*gg$S^e4{<s(-:A-6Z/|!U^a!#<!]yhs~rgF1[!X0pG' );
define( 'SECURE_AUTH_KEY',  '`g{=l<UCpr/USylfAFT`Q%jT_pKO2=r[VLkoK3/6t9/cq`%)t_yyF46^&+LWi^5i' );
define( 'LOGGED_IN_KEY',    ']P]W);nz~&smQQq:7J{;UML!X9)1o1.;d3T&b{Ltr(;LF_>YIY4>VvBF;x~t`T:j' );
define( 'NONCE_KEY',        'z28}|Xrhp8o^zcU3XyK;tqpcz1RkPLiK`P*3SDMf:VP%5jJt3p:[%~e=bx&XXcHd' );
define( 'AUTH_SALT',        'yw%Nl42/TM8D(v?&E_q~bvLM`iG[X~2@0<W.evtPhM?E|iob $b~(o,.#;4QpR~b' );
define( 'SECURE_AUTH_SALT', 'ye#k:r}*l`8RSa+J@*]9}2iGnJ8QqM&!;5`Yfd`$pTCJJ,`{]rXGh%xY(/|aA~g1' );
define( 'LOGGED_IN_SALT',   'mz2*BVG<~;(YnEc+f:SSHMBJJgCRko:MZR-sT!UY&vZL;4_Dg6{A6=@T=N.u`ZH%' );
define( 'NONCE_SALT',       'rL~SCrZSap@v_;wmYW$}os_MX=vFmfJs{f_-:Lk3xLc>MW}wcm]CR5n06Obw=8&5' );

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
