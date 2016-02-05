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
define('DB_NAME', 'newdevDBqe8mp');

/** MySQL database username */
define('DB_USER', 'newdevDBqe8mp');

/** MySQL database password */
define('DB_PASSWORD', 'NWy66Hhsks');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Yb7,bE{U7!nF>vY0I;mT6*XD#e7^XE<fIubH]wO5~W9|p2+i9_pS5t|sJ}zR4!kB');
define('SECURE_AUTH_KEY',  'Vd|k4wRF^c{nIyB>rJ0zQ3^YqX;xe6*mDyfI^mP{iL2]hK:pW9_ZC+e6_lD]tLgJ');
define('LOGGED_IN_KEY',    '9_W[w9#eL;lS5~WR[sZ0zgJ!ZC-hK!oR[w>fIyb7uXEzQ3^YF>fIE<eL;mT6tWy');
define('NONCE_KEY',        '^,gN,rU}zcIubE+iA.qE$fMyP2*ipW9wZG~hO.aH*iO2pS9|sV8!ZC>gN_ZC[sK');
define('AUTH_SALT',        'Qbe9~a5wG_P]mH_iD~oK|gC@Y4hC~O[kG!yI>jEuU!c7zUvJ2uT;qA+I.jE$X2*b');
define('SECURE_AUTH_SALT', 'Rc0rQ}Z4wF}o8|uE.fA$XnJyU$X3D*a5xS;p6xT.iD*aK|V1sN[k1tO[lK#hnJ,');
define('LOGGED_IN_SALT',   '+5pK[kG!gC@Y-V1sN[kJUnI,fE$N,jFvQ}nX2uP;e9+I.fA+b6x_d9-K|h2pO]a5');
define('NONCE_SALT',       'RiO#tK:-S9_>rYBzgJ^jQ|dJ}kR4sYQ<qX.bI{i0zfI^nQ>uXeH;mP2~W9yb2+iL');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
