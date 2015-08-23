<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fluke19_wp1');

/** MySQL database username */
define('DB_USER', 'fluke19_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'V#X1&phDNK11.(9');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ' klW-h0vS..m7|l#$J9)kyn}MLm:M92Xlm1k)Z?-*Or[a?,//2xgP{PF;Z>_GFj!');
define('SECURE_AUTH_KEY',  '`d7B+D+iNFO3y}.k.bQKZMz?hP}@!U[9%C_U]VDfsfJ/3OxOxh`bFFU;*j$M.Qsr');
define('LOGGED_IN_KEY',    '15b^wVOn{LxVX^|$33*3!`<k$q-0#<),38`&g^vRh =xL(/_[zem]H)Zq>?)h0eY');
define('NONCE_KEY',        'c6{yY5V yMC{xY|mXOud|p>!P:CJlY-g?f|I,F5hF(!&ho~]|3<eU-A#VIeM82zv');
define('AUTH_SALT',        ':m`o<j8frSZQVGaadk!yy^jse*(!(`DH~q}.4.Vo%0;(5R^*[{^;hH}cW:+>%S4D');
define('SECURE_AUTH_SALT', 'Y/u?E$[7cj6huNs[PtRZ&Ypz4E4{qp,e1I9D37snO+#gYS}$!wy!.(I2Ma]2=SRF');
define('LOGGED_IN_SALT',   'QsLocSF,rr$LF{B%y9o8QK>5Fw~%L?pd^UE1l8@P,KaO3grtz%}TL1s98IHz=v$8');
define('NONCE_SALT',       'AU.Ua-k!pL(sY,?cwy|6cxBmvz)0k[Aew?&;5{@:,d*3UA]__1R)HcY|FDmi$}=5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
