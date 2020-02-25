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
define( 'DB_NAME', 'blogs' );

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
define( 'AUTH_KEY',         '^*PRq5s1*G0m7,DnfrVub{wAm~Gr!m.xP7oUbhw}+Jbjv5UD@,~h8&p=7@k=vt*>' );
define( 'SECURE_AUTH_KEY',  'tUC`S&*c?bsX2|`S#4X]Q::FY+Dh.G!s/k)ckZY`J:0ut _R%i[~~84D3TeEj*L:' );
define( 'LOGGED_IN_KEY',    '`oHLoX<%.xVG(!:GHTRnX5s.i?7kWSNk4W|V<0eZ$4#B/yeOH0MvZl-5.(j>oW]x' );
define( 'NONCE_KEY',        'mW:: G]bMN)]bR>/,zfu{^Z(y3ck0`=RUU_Y}><yVo1$e3li.JvLh9#bYL#ur]3[' );
define( 'AUTH_SALT',        '4s_h$ htdd~>:>c:0&s#oZap:eC(,g8dg-dr)~g8I3Qp::/kakAg(RUSA(y):v<P' );
define( 'SECURE_AUTH_SALT', 'o|c}cIFpKovpoMA].k?`6rO{!%@X0 ~_8uc-@+vwi$m<;U(; qd3?Ze5K=7(-)3.' );
define( 'LOGGED_IN_SALT',   'rbP.}xbG.ZVVJwKsq6<Rre$4,7bu!,zB,lFXjZCg3C%q_e.kpfVi=)Y^#P->$yI*' );
define( 'NONCE_SALT',       ')FGg47EYYNM6M5!ik;KF`W_B*m#PiiK=ab8>j?&Y%ABfKS)T2; 0R##=>&{hj UR' );

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
