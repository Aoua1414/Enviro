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
define('DB_NAME', 'epiz_33027269_w102');

/** Database username */
define('DB_USER', '33027269_2');

/** Database password */
define('DB_PASSWORD', 'puh7)6S]07');

/** Database hostname */
define('DB_HOST', 'sql206.byetcluster.com');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'biilysbnfzyrbjwgomropvp7wywtibuy1gul3a1wnxyynesoq5pyagcohxbnqhhr' );
define( 'SECURE_AUTH_KEY',  'pmvhcj3dd8tl0taluui8nues7gcikhlymciwnrfrtjxuobltgnjmu1fohwg32mt9' );
define( 'LOGGED_IN_KEY',    'ppmbpc5civgs4iyvwtqfm5yqcbpbpgjdqmwevnfkgvv4fefzdz3stooja22kmfqk' );
define( 'NONCE_KEY',        'g7qtjjkpcgulmsuhvmlvomziodkixxempdflaboysubifdcqwgpi9c2nlpltijde' );
define( 'AUTH_SALT',        'jkhqvteo9oobsdaswx8qft4sie5vjwbphkdmuc8ggrmhaf57qdtiwn3fbbn3beqc' );
define( 'SECURE_AUTH_SALT', 'brbw1iugemtafwgwssg2ovk3sbezalibosnvycygevtu7rp3wtd0p3m9uhdiuupw' );
define( 'LOGGED_IN_SALT',   'mgoqg8hvylyvs1zkqnhgn90inhahzguznztc0crl58ajtzb3snov7hpygbjozhjj' );
define( 'NONCE_SALT',       'ptnlgh9bdk3ee2zyyhildhkbtmfyisbv74cbgqlvmip4ywvjzbzir72tqtqxpjnp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpj8_';

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
