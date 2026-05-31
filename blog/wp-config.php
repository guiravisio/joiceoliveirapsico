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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u927637920_k4gdQ' );

/** Database username */
define( 'DB_USER', 'u927637920_4vpg6' );

/** Database password */
define( 'DB_PASSWORD', '3O(:M)<x9,' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '8#Ce/k~mQ>hB7HL||nhT!wN%<L^Y@T<:JdZ{{B:i>w&9V5n:81V%Z#r?A&Fn@wfp' );
define( 'SECURE_AUTH_KEY',   'y>8o-_+vzaDVW=yE+qY6drtzu20Y9(3Ug+kE(8ab;lMS6g` iWd.9-pc*RI/TC)8' );
define( 'LOGGED_IN_KEY',     'J|Q]_1%4@kmI,9YzZ{pbaP;ieM&aa k&>pcrS$6Vd8&VF? 0T-^!dkH;xJL&6:.B' );
define( 'NONCE_KEY',         's{HTQw0X-|~ZV.T0{`2u}!B|0|6|,e7P31,Bc!#|BHp&fWcRY))--?Jukr*VQH$a' );
define( 'AUTH_SALT',         '.M#v)`T/LS^EB#ZdRvAZ;tK[$=QFr lVk];aNO<NtVkk1QXaI|Ys<F!-%:>1!-G<' );
define( 'SECURE_AUTH_SALT',  'kQl=/`S8rB;BbQ*{x,V`hmp;F:3vaLp+7BV(+*>.P(hC<,TzUVXCAe,!C3FdJRH]' );
define( 'LOGGED_IN_SALT',    'j@@xp(*]pFDTs9%Cq+yn_1G0_#JE/{^oc9TRP!I(Q-6 /@vM!(J ./nXaL_o|P)X' );
define( 'NONCE_SALT',        'bEUwykcq+ {:Efw,k--/bibhv;|F}MF{@BUKk.0T_a4(ul@k1{_VP5sh{D]?7W17' );
define( 'WP_CACHE_KEY_SALT', '!vzK$p5(tHTx@}2a2Pxa&jWC_n5H[1,[<>jrqIqS8#d&*ca;E,Y],[e.,z=T;FJ)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '156f9731c87fddc1214105c344e8d1aa' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
