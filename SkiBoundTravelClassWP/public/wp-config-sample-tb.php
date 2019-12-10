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
define('DB_NAME', 'NAME');

/** MySQL database username */
define('DB_USER', 'USER');

/** MySQL database password */
define('DB_PASSWORD', 'PASS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'y8u!85W=SY@?jB@+|K>{8T_qq)8}*t!!GUxJZ+F@!`f;%%}tF$B O`uM>op#e,?|');
define('SECURE_AUTH_KEY',  ':1(/{ $R`7U:>YW95}QnnvD0ONokj0Sw[3Qy<qn.Pi}iLGm4w{H&@*XKesOHJI04');
define('LOGGED_IN_KEY',    'k/>icGh0+g;FO}tFyyYsBr2ZID3q//wpabaQrGF@DmK8G}Ub@&tL:3$^L0(C7};1');
define('NONCE_KEY',        '1Wcq?l,X%/taK~$V3%W&sLBkm^-HB0F`{J+#.iB4.H]~hc; J,1ga1iUt5JVy#c#');
define('AUTH_SALT',        'nuvW}|Ex5wav>;*-,kgM+bs%i5=!x2jdd*VU*IZUjKYJsf4xx>-7n2F=~<a5 c,6');
define('SECURE_AUTH_SALT', ']z_iMx3*lL&A$OiwOUtRqvBNbY?<a/~yMPK!ixf*4X2m<!M_MiR+pOxDbaXL!$$}');
define('LOGGED_IN_SALT',   'V5V&+lj5N[V&H&iu6!5lk}S-R)qhsKN[=ei,do`gfu+i`Zc8#0ngsDi{VB7`=D/Q');
define('NONCE_SALT',       '1mr6:t$[/!dN0UOYK3sNDDUX@Q]k58}2poQ8S6W_=wwG;P=L4}:JOn{OX5Sv.o%I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tb_';

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

define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '');
define('PATH_CURRENT_SITE', '');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
