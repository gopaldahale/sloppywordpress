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
define( 'DB_NAME', 'cdg' );

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
define( 'AUTH_KEY',         '}WeL>Hv9bE!dG?<lTTl*#U_6oI)/J=_~{o8]U+EyKxMA@L(Pq8u%o=QId}LE=}x9' );
define( 'SECURE_AUTH_KEY',  'R{-_KOFoMWa:$o=?om3]cj:7j*rwg{fod<@eN9fVDQozJ]peoMDjR<LGpZr}&Y:h' );
define( 'LOGGED_IN_KEY',    'n;,<tq0RLPs)(iA5izxzgkGX ]4{?:ml!u;FOUQr?MvtvZl(=%wv(CjdIhc5^:Ti' );
define( 'NONCE_KEY',        '$Z%~1`nB#}({}o|%)Xmqh#U2z}.]~^-nu+xw@,|;3`Drg7bAq)ZU8M6S>3`#YxWH' );
define( 'AUTH_SALT',        '5V$P>-_nPcc`?Xamnm@,!@ZHDn{Usyl6fo0uYu3]t+Gj]Rm_Y%B]y$A0R=Cjj#]9' );
define( 'SECURE_AUTH_SALT', '9=u #Ye!&}coU<&8Ei}|v*7R*>2Y&+5)jlwZ#~3UZamn^zR1uh1hAZbYJr1n]dAq' );
define( 'LOGGED_IN_SALT',   '@j4N_:>4^#7}OYwH!Z6jB*O3$?6DiE1[P;%4^h^E3YKh:0Yg,QR77S-C9eTMtIhb' );
define( 'NONCE_SALT',       'FGp9cY]?m*E`<$l*eJ>L8T@l/+4?v3(BjqC);&jzof9`$jS6@C 9s^-|?-^V ,)b' );

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
