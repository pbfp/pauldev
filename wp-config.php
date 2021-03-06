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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pauldev' );

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
define( 'AUTH_KEY',         '}uVJGp)3pRh6>  *N[054;06T0)$98i@gqH^IZ@lORpB~+OJ?e0;]<9,kp!,}@>p' );
define( 'SECURE_AUTH_KEY',  '^7jve,~ZCSl0MB;x~ mlLE5AxzJB`2%Y>an/r2b&!CkNYZC1}SXH~(edoaX:@ ?G' );
define( 'LOGGED_IN_KEY',    'A_Y^S%[KHjrv36PW{fht+(C]JC~AWcX,=Hj@j8$B?C3T0@/dTHdQy$}8y[$6ZG&;' );
define( 'NONCE_KEY',        '@+B&>rWf eqT$|}ky*%bCYpccY,4Jcoim,nb=+k r8@NCdhNBZMp90>X]^FohC;1' );
define( 'AUTH_SALT',        'iq>!{m3$nx*aF-).nVm$[llu(Zl(z|>@QVIv@kGSnejeqvFF!gbD0c,(bJ`NN9^f' );
define( 'SECURE_AUTH_SALT', 'V5m9R^AVZC3Hr#t1(_TU6Mj~tHXHqfsl9]K*FQ/92YH1]|sLKn,$Q1e5mj,X|Ls~' );
define( 'LOGGED_IN_SALT',   'l bQoq[Fie`9R78(^F~(B%_,%QL6GXQVeyb1]W0^C&D5ik),vnJ8 j6?PG`m)Q}9' );
define( 'NONCE_SALT',       '&gQh=>s>Ypgl?fO3%I:wO*H3M)Nv*,angS=68{=a~h6,Xl57rRfS,u8-{8KRdVR$' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
