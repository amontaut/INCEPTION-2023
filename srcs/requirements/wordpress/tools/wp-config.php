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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'amontaut' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** pour theme wp */
define('FS_METHOD', 'direct');

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
define('SECURE_AUTH_KEY',  'Q!WL&&l(e:-}xs{Kf,|i`|+OXmj*gCUq?K&_kn1j&iZAjS1;h-6WEy,+a-TQ5(tG');
define('LOGGED_IN_KEY',    'blH7%-]j*|cSkan>axtaujX<.Ll]q+bUG#SFc?HcHb&=T{n#YO/:Uh5Ot+0Y(q&v');
define('NONCE_KEY',        'C,k/%VE^I~1k:<|M|]Y5w;>|gmw-ThdmP;-i8/eQ^NNL 2`(5+e)d#x}LE5rPj!q');
define('AUTH_SALT',        'kgdX,h5U>UbsVDlHHF0W?)_S^+DK+>vwLca9BHr>Tf,cK<+W:^|+U9s/oT|P^dFM');
define('SECURE_AUTH_SALT', '<4k[^)Qrl^MlaHdJDnSzdn#$1F^3,<xC=-4R#pxidtu; }{L~PKBs}p5TlZJAu}t');
define('LOGGED_IN_SALT',   '8KZ`<79EI`$d.?,0ecSEljpebz-QpU-iSX&@ze;nw_YbyST[aHXT]sk?v&8~w$;R');
define('NONCE_SALT',       ',cCA!^-opz-RLr,p3}W;Z4_-TB5[Fw4=aWv,!=Eu5yo_bqtN=@cZdxp0<pE1xs*L');

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
