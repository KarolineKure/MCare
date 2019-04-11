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
define( 'DB_NAME', 'karolinekure' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K.$WmZ2f)deTS5UkB`]rD>Q/LWM4dU(lg6jQNRUZC[n%^K^o,~!NLKq9mKY#9FDe' );
define( 'SECURE_AUTH_KEY',  'GisBg.o]4pPF;1FJ1Z=J.k6(~1$]Q3 wi90!VV?+1:wO-.P+H<-(r{dbb63o1vQG' );
define( 'LOGGED_IN_KEY',    'a`FBKe%^J#s${NgwO6)~s{s0[+9;$JST;c$F:.z.$jac--GHk[)/@Y|#24O@sQLk' );
define( 'NONCE_KEY',        '`Qbr#uj|#fSf&!M?VYa[syr)Ld0IWL&N=mG@K)8cdrEtoq9$[g>lbzhTMB]jBW=1' );
define( 'AUTH_SALT',        '*P4eA~V`fJI=,WuEWyw^R~]t2z;Wx3?o=B^,qMO&,pCw~a-m5d^zrOcPR/Cfv<(4' );
define( 'SECURE_AUTH_SALT', '|8lV3=>FdG25:U,be`><Tn/72A?/`oo3uaq:zazfP9$oth>1!+Ec@/Hg.$7p;!HE' );
define( 'LOGGED_IN_SALT',   ')SVQLb.`2.~O RCQ55n9]cC7O-r{-$ym~R-}IsrY+&+b+@Y8/`}7< =buMB=#b>&' );
define( 'NONCE_SALT',       'Dndw XP s9H)`F,PX?V rhn(V^M;ZH2m=3_m/1RWKFrhf~S/A%SplsGO)o^4_HT-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_MCare';

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
