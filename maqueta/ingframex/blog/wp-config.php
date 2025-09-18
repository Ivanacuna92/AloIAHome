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
define( 'DB_NAME', 'ingframex' );

/** MySQL database username */
define( 'DB_USER', 'ingframex' );

/** MySQL database password */
define( 'DB_PASSWORD', '@dgo.comIngframex' );

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
define( 'AUTH_KEY',         '(fcIqFOP*9oAq1:p%kN{K#!OUYIP/TM`1@Nt5k_miy`#dPy;m@PJSz}q^$D=Pf x' );
define( 'SECURE_AUTH_KEY',  'Dx;H>`sB<-t.#S>K_7Bgc&#VMl-y,[~%j{/bJh0g3)QN_lMd6~pzikWn @@&b>H6' );
define( 'LOGGED_IN_KEY',    'EsJomZ+n>{UsB,HW2xpc>=q;Rz!vMYu!}Yz2p(J%r+u`gNmfE1p_7; o4%O:=lAB' );
define( 'NONCE_KEY',        'VF aAfb ubDd~]z3`5y:BN~mm,yGmwa-$nh}p=Oe& Y7!M6<*-v8&z3fI[sW}5o:' );
define( 'AUTH_SALT',        'o;Gizdw5M[ #|Bm_4On#a9[80i}+U#i5HCy`LpXzlz<LvSB$dm01a-[ n2R)|U{8' );
define( 'SECURE_AUTH_SALT', '~>J?C;Dp1vy2jNzW{:?8bZ?eqr*()PrzNZ,<&lmT5F@$iX%qcd{->G-[&X]i0=]n' );
define( 'LOGGED_IN_SALT',   '+ Wn,YAAgJU$i9I-Ys##Bct0X-8UW[>H0xw6N3lV?Jl;f<#KneP8b/eC!r}7aH{Z' );
define( 'NONCE_SALT',       '|]%vf^hG3IAMJ0r>|UA&v0aNb uZDbO$Rb_$Pw`&^?q~3dx~Q6H/CS_`%4d{Ls?i' );

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

