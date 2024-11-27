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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         '=?Ah~5]&PFH)<yl[N)zy7$h{H/YxWvh#g-69 %m]<[~Vq;P_4(X-RQAoWzQLn3Ju' );
define( 'SECURE_AUTH_KEY',  'KAOBrI:k!k7VwTj*qJCIm q _F{41hR.WE$Fde]EAUVSIAP~2s37OR3gR33pBCCM' );
define( 'LOGGED_IN_KEY',    '2f)OLNBph>*bN$(^`(h6 gvn]Zh7l(fCUN3P^kUT=C=e:Li+}FYi[6(H)-(O?k%}' );
define( 'NONCE_KEY',        'c}Dtt6^a0!xO;D:$J>_hlnfzo2xjr6]0J<YO__zTvkdtz7@Ykg:J=)I4-YF:NjxR' );
define( 'AUTH_SALT',        'P0Z=QpCZ<Mg~EJv]yEjh9&#k;Ipa*-aS,zdG3:% NDASJU>`8Y g[V~p([GJ3ro|' );
define( 'SECURE_AUTH_SALT', 'R%t%YC3/#,ApP/>L3kyDc3J|#M^!]4&_YR++27J:Jrq[vVvq!3?Z1uU{[XGDi>P-' );
define( 'LOGGED_IN_SALT',   ' <k 9)V`#(:#-DpGf@v^GY(~ M_ES8:(yKjAR[[F?eJ=P%1*1PB}w]-xJ@sO}Y}d' );
define( 'NONCE_SALT',       'Rk-DajATY1<i9~?PgR`TNL:^-5B<^<IY|lin-5:/s8B;ptidRzI<vZb)M^^4cjx/' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'SAVEQUERIES', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
