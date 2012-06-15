<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'iamlinus_net');

/** MySQL database username */
define('DB_USER', 'iamlinus_net');

/** MySQL database password */
define('DB_PASSWORD', 'fkMu5YJU');

/** MySQL hostname */
define('DB_HOST', 'iamlinus.net.mysql');

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
define('AUTH_KEY',         'iY@Wlc^S*:<g=EV{IdTFLUrQ&K^)9e,}UCw(F+97G.xS|m7M %!)@<XE+@tCizFv');
define('SECURE_AUTH_KEY',  'bL~fL7hT$n)&xr0|CGHW|Vb82T-rQ4tXDi18.z}.5*q$Q`h][|/*5pZA>xAXmBwi');
define('LOGGED_IN_KEY',    '.HUTps299< [bH|9U-lx?G(7H?zGx=Nh%)}+/y.CB]#B7a(;e(+KjT6T;I2[t);5');
define('NONCE_KEY',        '.U:FSBn84WX04t%rK4q,;bfa G!:Hp]>ViOH+Dw}j(uBBnQ*8_7`k>^1/x%%=,6I');
define('AUTH_SALT',        'O6>.O5=2:9LcnkK,r{z)58j-6u{< Aw2&Bnl[AXxwYjYjT$dh{cuB6dH+rCBk*Dk');
define('SECURE_AUTH_SALT', '<0w-+>2M3!zyjE@^E?PqG`3`_^@Ve;[1w^RKe W>Sm.= !R=_b|!u7ACb{;FLipR');
define('LOGGED_IN_SALT',   'vd46b r>)vICnU-~^66cr0d L=qN+%JVuNX=JTks`q*UQjIy3`u:F~O [GA;HM0=');
define('NONCE_SALT',       'KS^&~C]vt<B#{XP$3QaI{DH-|,712 38ANDR_Ra3xFwNVfZuI05$_(XHN,xu&*om');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
