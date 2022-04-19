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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '/an`-7jY*iD{0X.^q@sD{}GZp1Nq)+*Q{[V]bW(SE0yqqf]g>b76@~v%+foU&+`K' );
define( 'SECURE_AUTH_KEY',  'iwNk=L|[v]^o*V-?$z|I<P]4!&U-a2:)OX`p} 4#c+vI%^zaIDf@!Se,~FT^|-Yt' );
define( 'LOGGED_IN_KEY',    'b`C2}MtpjDk`<@mwzBB,&slb 4|XW*p{}-`HEc%^z/zh8+ (PE9!T?|-Z6m>pdJ|' );
define( 'NONCE_KEY',        '~} 1r+rt[)}UX|@>MMf(nV0z,gQ^zpw+y<!~zmF0RT^[-(O=e4%-s^)JI@)f>l{8' );
define( 'AUTH_SALT',        'zropi;eCsS8tS!m_95%=YUvm<?JW{i:Y#iIS[ba3z^0H.dG+yV:cyJp9$rvP,yJd' );
define( 'SECURE_AUTH_SALT', 'OhlmUoP7-j4t2]*R5y}v%9(=$D.](tk6ryk:;Uz4~%u$|}GITH8m]!m7:5t>Es4#' );
define( 'LOGGED_IN_SALT',   'W#oqHECr2uSS?-c 1QH8P~SpXFu>SJpYP%LQIG~}dLZy J[Wp,.Q-b(SUJz3Vcwf' );
define( 'NONCE_SALT',       'd`cn}p-yP,#B]r9k/gEuL5[%[jJKiirO8/=Y4lqmVS,9,#m~PeGsOJcP.=CXy2##' );

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
