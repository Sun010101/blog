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
define('DB_NAME', 'esbcwp_blog');

/** MySQL database username */
define('DB_USER', 'ESBCadmin');

/** MySQL database password */
define('DB_PASSWORD', 'ESBChappy');

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
define('AUTH_KEY',         'hMiA8kEkSgvd0HQKzJPXvFf1V5WQ6Q9g3okOxZ3AKR3CqfLRGq0SOpjKZfhGlVUK');
define('SECURE_AUTH_KEY',  'WHvjELygL0rSdKBu8dXhQwAIKj9I43N0jOwMZ713kpRdrBLd1ksZFcQsiR1dX7PP');
define('LOGGED_IN_KEY',    'xnGMci7RupvBdbPI9qhdcNQGZc1zWpD0QLuIXBtcJl7gz3uXWwrTVInNLL70MWDM');
define('NONCE_KEY',        'otp6ztREeRLIldMJYAmbzfUDGhcxTE0x4KQoSvDZV2TJMO5xaRlIYURn4KbRhFqn');
define('AUTH_SALT',        'RsRtJZHbWSpMK7rlwLaK9ICFuUXBlyCSPyRxEnK39uurTuTx9bHAwR6MERfT2TjV');
define('SECURE_AUTH_SALT', 'Qml01ASkIAZZo87pvfVP7T8gGKTuRlmAr7NkSiApVsEdBKIncuv5PW5mW2g9JhjZ');
define('LOGGED_IN_SALT',   'nlDoVUYvC8M1cA6xW5yvnU3HNTViNUs1JlB0ykwQFkFXqUf3M14wUM7pD89sEW7S');
define('NONCE_SALT',       'rbJBkwgZ1n4wx27tWAqF3ClaPladKWZRjw9CjyMROIyZ9MCiPQZITqhb8EeX6XuY');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
