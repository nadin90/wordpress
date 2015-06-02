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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '1b]k1rC3I%ZtefaDP}^3Qtk$T3#+VDdz7^%Kf&#,_CZ~Q^u-WA,-^g9J*Dh|i#XP');
define('SECURE_AUTH_KEY',  'fu3UJAKMS6@[>Nyu{oY0D5O&H-[Rc)[O-qdjXPp4$QG?2!1~qpCxx=sBT0 7|G4=');
define('LOGGED_IN_KEY',    'N+2QZ=[#{0>i ([7Q f#~D^6TxZE*h12{|.lYw<gm+ t0w6_=8TP3|.1RD*|vDY4');
define('NONCE_KEY',        '`>%PZRyKmcPerwrBM(CzHA C-BnU=2os#:P%ry=WkvwrqqOjv :-Hn8+We}^[4na');
define('AUTH_SALT',        'A.6=T9o/QWh9a#14{(o$-Y{S]AqFMGORi>f/+3a{?;)qEc@gZVY#:.7KRsx<1Q1N');
define('SECURE_AUTH_SALT', '^+S90S~{qA3g%(IxIfm@U04j<8B5Cg3IXcaWv7oHPAQXs1bChO(~)Y-B<J]#7d]A');
define('LOGGED_IN_SALT',   'Qx|dJ,l s?ASx12$pLsY27*w;JAG3|M]9wB.V7YEwN|-q(9KjH{L}1TV6=m).OgY');
define('NONCE_SALT',       'ZAT*MPM->_I;j-tg`6FJe.{;Jw?:>:JL%c;-z~-x+ITB-mby-3q~453jW)D63)HV');

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
