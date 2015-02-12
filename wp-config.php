<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'v|pqmgsy.n+|I.+zr$jej-Qr4ldW$:ioUP$9tISjw)x_t3qBg=Q[-a&r>_`j^7_{');
define('SECURE_AUTH_KEY',  'wK|gy|D}P2YKQ-h6Lb-Ui#c^:Q:x;C-TtakZS<@32w^.SK-)MT[C+omck<<GoN.*');
define('LOGGED_IN_KEY',    'sYRpD+us|zr|z;J,x^3+3GY{YvyiUlb62>EvsJ|%g8DBZ?P~-/$R&k?~k-<;?E@+');
define('NONCE_KEY',        ',v|y*_O`Lz+&k27%!~7Ss_CYnjemj-!w[kOZpY.jzh/*WSoky}J,u~]r3+tDZ !Z');
define('AUTH_SALT',        'C?@irq x$n35I4|Ln8[-2C^;pK{|j5|,DA?/Z-a0^]>Hc2,1-@mL!7]q~w(-k^aO');
define('SECURE_AUTH_SALT', ' %1H~:W9XlG=]~E.#[Hbor[])N}mAETdE0Yt8UU1W8p[/&[YM2drPYcT<LBAy=[|');
define('LOGGED_IN_SALT',   'qH6*$ERknAH&:eED%NT+ViA(=Dr;qd#wc.R-dAJa vk5;N9+XB(1kDl~}{U Kw 0');
define('NONCE_SALT',       '=|iZXmrfXbYs1J+HWe|Tigs}B)6ZS)n>[HtdM;DMh|2NU`W9fUvpUP07*LY?7-Ma');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
