<?php
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bigfoot');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Al0||MV8#e@{huuDFJ,m<qR0Z}WzOV)0,FdEND}J.Di3!gym2lz|7k/-p&>aJeO}');
define('SECURE_AUTH_KEY',  '4@vI-TQS&`59FL-O{+&+d|(/YHo cx8e=!O=_-`%haGOvm+gt_3]-x~QzSX^1Z$>');
define('LOGGED_IN_KEY',    'WX+Nwcn.rNyciyqZnd%@vo#8=(eX@)byatOB_h[lnO%ku~ -Yf$m,<1{URc0VG(`');
define('NONCE_KEY',        '6s+ U6|*}FtqgH0<4g3hF+b/HNx!P[TcFnQQ5WtRai,Pi!?]&oFc|;N-Q>O~Nex:');
define('AUTH_SALT',        '-%})py?P&&qL-M-E6z:|3@B}E;_Eiz&|NL2wyR+M](M#{OrP>&f&2&fSJH:_P%sq');
define('SECURE_AUTH_SALT', 'XF>TP`gkl0+t>kRhMZP|Z-)fzn)OoLP7]bN+dH 78xq_}%}#oB W?!*d.qfZSu?Z');
define('LOGGED_IN_SALT',   '*(.9[bn;(>5u{RT|tOQc;q{X;:6$[XYv?8OCPfjWM9q2e?!]&e;f/0+ED1Y,ul]z');
define('NONCE_SALT',       'X~Pk,+jz1de3z}ft-u3<xg2MX~Kz5R-r|MJmOrJNK3`N%`]mj{+08DHY|&C~NrbQ');

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
