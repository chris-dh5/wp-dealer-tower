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
define('DB_NAME', 'dealerTower');

/** MySQL database username */
define('DB_USER', 'dealerTower');

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
define('AUTH_KEY',         'iA%?)<TXdVFJo< i4.El+%vx4w_KdwI=70({`@tV=p;Zmo zPDv(m&f#ft%aLN >');
define('SECURE_AUTH_KEY',  '_!Y9q&,6k[uRS0D+tEE{^T{CI{~w3<~ghnY*TsMAADcrQL=]&#QPw$sX8S1Y}#Kh');
define('LOGGED_IN_KEY',    '//Q*.Pv<V<@UkTw5itrU,<H@o1n+t!R81[A3[Hcrx#OXkz/jt90YF(xuWI_7_fts');
define('NONCE_KEY',        '$NlFxkjNPt^w+__X-ef?ez`7Tg&7r1^ke1O`Ax0!7k9?wEK#Nhv+v..LtMK*K:2`');
define('AUTH_SALT',        'Uu?lnK5I=[sEg[tsC&SV3gHE3nT6lGjf%TA95:RGC.1V-/[,hNs4++6b8YLu=j 4');
define('SECURE_AUTH_SALT', ',;d.arQgSbCq9OZbsfuCh{3~[+A(XZ^Y<o:#nU=u=yS]se/|<@<SS+p9>_~U%?TH');
define('LOGGED_IN_SALT',   'fVju!SEe [+z-#2~T0{H~?B$[vYKG=b$f(=J?;QucU@<-<VPsgE!E&M$bYF3I<!#');
define('NONCE_SALT',       ',<DwYO(D!G0Ee`0uvR_1m8OoU a@?A<3*S+D]P(:b[W<+=pW~M[r}.$CpM+F@R9x');

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

