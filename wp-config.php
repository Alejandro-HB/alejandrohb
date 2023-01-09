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
define( 'DB_NAME', 'alejandrohbDB' );

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
define( 'AUTH_KEY',         '[3V|0G;Y6Oug+<+Jd;E,pXWwDTI8hm&~_WY@h|HtAazvT<BPbaY]71V>QJ:.aET{' );
define( 'SECURE_AUTH_KEY',  'V9GoD7O/_NjDmnFhiAR69R%U}jYq`3-UW}4i4r6I4K{]p*5ZHuTOLBw3[d6>`F%P' );
define( 'LOGGED_IN_KEY',    'yg|-`+_*sHy&!{L|X#=J(L|r_<sO=p4aHWg1 9 Ipp_c3OXk2Bni@gO~A(o>1B_n' );
define( 'NONCE_KEY',        '~mfo[Y.5gOWQr726a$sF|kSdaYaERrD):O^P6A7JSH3HZc@BIdUr??nYLz)L1M@7' );
define( 'AUTH_SALT',        '5R:HO(JE?l#/L;:=D=Bj+ZgI*Vd?vQ0gb]Q0&|E?7N{n{tAI G;lGs!%J7*&gjF,' );
define( 'SECURE_AUTH_SALT', 'v;hhzF7O*G]T-+0|.zZ!/b/ZW1Q1+{z5Sz`:4 -^RKZ{$)3Puf#`lNF/{gs~v(c(' );
define( 'LOGGED_IN_SALT',   'G$QlT#(pp39(O7S2lU86w]]TPRC%@*CKCb]vCMc@HO@ly@jc0o@KQ7I(gxr_ hv4' );
define( 'NONCE_SALT',       '*{jq^}?:t3B{jaMYCtc[5Qf4DL{3F9:b5oqf=YHTqOkO7~n19nFG>>eFlE,@xuD$' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
