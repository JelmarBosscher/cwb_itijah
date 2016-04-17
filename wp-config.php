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
define('DB_NAME', 'itijah_wordpress');

/** MySQL database username */
define('DB_USER', 'itijah_db');

/** MySQL database password */
define('DB_PASSWORD', '123@Redhat');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '64MB');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|9xS|*t~YGQGM1]|;sgr}*_SpU+! {ye$az[pWZYcb}x$E?|To*^@.aPA%J7inR4');
define('SECURE_AUTH_KEY',  'm%.6102B`e7t$Gt=CXS_sNE^x_XEaC? P<^PpUa&+Urb@-#b9AYmTH@wo|]1-!<:');
define('LOGGED_IN_KEY',    ';g{ivV0||-/@+)#1j(tEzt~+wEjvV$wF2Y2U_l~spj(r[e6-fhvD@X;D0[9?vS!/');
define('NONCE_KEY',        'a0R(@QC5Ksr-Rs0(v^TKp~@ :jyyv3F.]nC-um~j3qr6w,9K*hk;`uJi!Bd>>fRS');
define('AUTH_SALT',        ')0?cE@<S>[briy{iJfv BVjpK[,K;LDLOTB48K$o_eTJ[yzSD;~h&3?:*+MOjnTO');
define('SECURE_AUTH_SALT', ')-/TVW4.CO7)bYMd`[p=O$ieM 5:Dh=(GMM_?QmpPV%eh)1IW4A0[}+;:5ttRB0#');
define('LOGGED_IN_SALT',   '!_8D<ff@>e+wCD`0Z:Sp!%wP%118?h5n=Bu<.jPXUROKtb0njNB`o{CS,^70(H c');
define('NONCE_SALT',       'nVU3B0U#ZzgT&v#t]F!reALJHYF!Hg@B!Ip!-8y#P33>Q5y8R]]aD8w0kXjMe>p3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
