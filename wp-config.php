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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'bgdnyrmln' );

/** Database password */
define( 'DB_PASSWORD', 'Rz4WXHc@uuz5uOeq' );

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
define( 'AUTH_KEY',         '&.%)#=;d-JDgF]!zG|fG)?E{A`9^0XB$~YR@.6/C%:D]3f$wc*2qBda>j%y)TRe?' );
define( 'SECURE_AUTH_KEY',  'J5V@/tA6G-PQ{g;c;wu+3S*5TObXyN7$-15JM@uG/]<}O)q_x@QdT4veD;Q=[/>y' );
define( 'LOGGED_IN_KEY',    'N;<8:.nCh-QpR9]Fu^Fnb8>=qVp3Fw;30Gy._Y6T8lgB``qe~Iby$|Ao.z8g1$2a' );
define( 'NONCE_KEY',        'Jmr2s@W:?)Qc<(+t3Q]_inj=b47OM_h e+7BT[/ ;@Fi)zL;,O_}GgyF`6r}5,T]' );
define( 'AUTH_SALT',        '{Jy#a,V#s5Z^+-`ZC/pT^jtB593vdg}[i0]lo}q tyQFs>*_Ia<MceR,~[)Xby2 ' );
define( 'SECURE_AUTH_SALT', 'y8**5$%ub1D}]~18(QE:}9vW4;H1WiH;2fo=JD/h/!AE}iS$^uZl$zu{eTVacv& ' );
define( 'LOGGED_IN_SALT',   'yaO6pSawke]G0{-Q*CjPDbXNtWzKD+=H43&,H]=NH&Ug@CX-QFdw?VFVB_u[`Hn/' );
define( 'NONCE_SALT',       'T6MX)r`RV?}0P3?0J7_lsEt#?G_nu?$=SJrv@G_:mby[}q9OZhS~l.*lr-cU:UEJ' );

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
