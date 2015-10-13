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
define('DB_NAME', 'talintwp');

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
define('AUTH_KEY',         'sFc0cMw4vkPZ{_ej#IsclSas@Re,8-a*H9#]C,7JS_2rITMj.6]-t@J?8k|R{ y&');
define('SECURE_AUTH_KEY',  'r^}ln{f.I#v2m;3NwE2$N-+vGy&b7!tGQn{~x|s8O,}1n/pK_Xks|jG$Es@tu!_|');
define('LOGGED_IN_KEY',    '7%+F39IvF{&]6qq?3j&}8P30gO|:cmdpzDEGDvr%}(<MD|6>E-V,jXW};>}c]P>7');
define('NONCE_KEY',        '?+tiR+/1JVn=z.`3T!:1)qSV+Hc%+7vB8;50Y$a{&8-EHnK>U!ZkL(Kcjt>.bWF[');
define('AUTH_SALT',        'vt]J$/qlYtBOK)}G!y<ALHcf{A U#}ji{ZFP sbIR%-#,4dVF.BzXt7+3*TVc/&A');
define('SECURE_AUTH_SALT', '[|f7hJ9p-Ggr$R?9}Xwwmq.hUY~waM#xuH{vL2-6:9gH20pMrQ>,v;>ZH+MY_>Je');
define('LOGGED_IN_SALT',   'q49IVq^09|7oz-gO6y}.!wV<E5rQC~072yx,P]-Fyq$_A|>E{#WbNTFtR+|8`{A*');
define('NONCE_SALT',       '|H]gn<TgJJl(13:n(/.4/Q5+,%n$xx5A65|,Kis?o`AFpxU>y2A,@4g-+}|c[|w+');

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
