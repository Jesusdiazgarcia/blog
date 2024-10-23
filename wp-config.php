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
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'blog' );

/** Database password */
define( 'DB_PASSWORD', 'blog123' );

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
define( 'AUTH_KEY',         '_Xa4h6-s10?+k~i~Ta;uOu:@|5Q*an1jvLAg!p;kvoAW *86itjv P_f!0t@)D^t' );
define( 'SECURE_AUTH_KEY',  'iG%Wu1MRY5LP~1XJ}8+C-Xb{4/j-= }N)/,|BW& ]`L|Hagz4rc4<_RG[p=asa!}' );
define( 'LOGGED_IN_KEY',    '-.gjXfdJY+R<n0 zjL-]I;4)wvzQT:03Yrb dlZ;Mzm.h~0X5)Ll)_]Dtc{|v MJ' );
define( 'NONCE_KEY',        '`yn_N }*::5AmjCLoxw3hf%tDDC&4yVuR=dXiM~P7:;IAYb>-fN$J2Fdh[I%L:(Q' );
define( 'AUTH_SALT',        '[QzB3mark%0B=P:q6`af3F/TsYG7P&$}=y-h#qas[w2S*p^A(<j[!$3`|Z~f-]sa' );
define( 'SECURE_AUTH_SALT', 'Qp=8LqYyR&V@Nx~S9vqXJoOH5H%A0McQ%cX39IQ.g VH<T~~tH/ICn:5s-IVnmq>' );
define( 'LOGGED_IN_SALT',   'v BU?{diCP2n!Ukl&^CqO>vh  qZSujjgr@ *p]MRU9oOHJ22YfHEN$s?om`#Clw' );
define( 'NONCE_SALT',       'dW]V/9qxu}0<FhAhp~?5rV0[]@+8p@In5g7EB{9;%0wN]xb*YSmQ$Q;k)A`x+w&E' );

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
