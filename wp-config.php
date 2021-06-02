<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'db_campus' );

/** MySQL database username */
define( 'DB_USER', 'cdm12345' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cdm*12345#' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rqMM9~6eo[C~5eGg@qTlpuC^_vSAFZxYG+WlfcWQsGCHgnQqYc}#qvRZo$/`-L4=' );
define( 'SECURE_AUTH_KEY',  'n:e|IMXX-.>zwqjh9cw-h.n0rYS$^nM9yTF>.^vOkjI5j$A S.|`oG</s;r4QXni' );
define( 'LOGGED_IN_KEY',    'm$](OvEK){]j3|4{}h2aAYiZZ{MsDsShm|e>rN}Igy;:KLf[Muo1Ec:6atY!_-2l' );
define( 'NONCE_KEY',        'o f:$/C#^CG-kQ2cXzhK:xhf|BBz2al hE`G[AV){qC!CeaF]2n%N98am$lKt21|' );
define( 'AUTH_SALT',        '= c)p*N!QwidcZ?w={oKAO2kren4#M]nZ>0q;W:DGv+=H>dZZuwavnU&}qX8T ax' );
define( 'SECURE_AUTH_SALT', 'i@w7HX5;7)9t%?P{UL}>818m))V+>&20u/wiR4q,{`]RJ$v~_nSX^CAQUX9BGC<T' );
define( 'LOGGED_IN_SALT',   'tKRo1*rPh-_;LEwd-%5,sqWw`$7,@fznxL4g5y3)]lT%v)WE`:7,!58*0T00srXm' );
define( 'NONCE_SALT',       '<whVB.)wNVo6Q<HAvI@v8TRC h$DvRv2rgN^?N>ix1Z;{~Nf@q zTVPntGmJ.`oo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
