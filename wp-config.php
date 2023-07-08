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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpflower' );

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
define( 'AUTH_KEY',         '4j,/HXg%%w`M7~en?y:>23Yrba[v3&3:=:f:wu5V5r0-bY]j-CT>d&$hC%n#Jkt?' );
define( 'SECURE_AUTH_KEY',  'LbuPFg;TPuW(>HrJ*cK&SCj%pN] {J/x2hQQ%8hWVB38c|3};pK-3-V7++ex9)6c' );
define( 'LOGGED_IN_KEY',    '6$VgGz**1<0jsY+jr1fA.Xt`tu:^1eHfU9!YgTl>!$Z+{Lvh^3^UF68EwO$o5+t%' );
define( 'NONCE_KEY',        'Azo@c4S!&Jp}0^sb:,|US)-e@1h.WK?3s>y*lK3Hg.3uODk..8Oc@s]=+CYef]O~' );
define( 'AUTH_SALT',        '4o5-Y2s@*I5myk$+t_rt21Pt>@h2:KJiiV<_NVd]Y~60g}r](.JbRb(?dvU60w5u' );
define( 'SECURE_AUTH_SALT', 'fa~J @Sd}pLI{i?TUzAT%Yv:Ykw.Hk-l@;+=8RATT%Kwoy1T9uh[l[alO2/lW%E,' );
define( 'LOGGED_IN_SALT',   'THvhv#~DZv,.>Ne)sh ~pkEh/Q[Tp7O`r;5HRdgw_] tg+nHw),WM]`Y3;~nWsL1' );
define( 'NONCE_SALT',       '|8|jGUYa^T#pNC#n?p+pwEm<`EK5Jhc,e~ KornIHI^mFra<V;hHkY<HJpiMhB/q' );

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
