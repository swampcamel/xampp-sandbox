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
define( 'DB_NAME', 'wp_sandbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '1>IIyYLjXR7~SBe|w]lAq;ePap5=>VVAtk(k>g]aYx}8SfpPS@5b9Fe7M`c(?,y2' );
define( 'SECURE_AUTH_KEY',  '}GzGzk_m /&q*V(!W9k0ESTuy/2y(py7,J@*OS;|b1F[mC,_7 Iq/*jKyK__w3=D' );
define( 'LOGGED_IN_KEY',    'oK/+oHuX!3?x7PE=Ym?3!|Vf?=v(<.23s7#lYKA}RJQAfe{p [MlqZ5wy,:K%^ul' );
define( 'NONCE_KEY',        'zlBzxYQ]<_?0M0.?)i^WhNRZSAXu.NBrb8l4Ni%;5Mku cLptF!`(4mm|VhbpC?C' );
define( 'AUTH_SALT',        '~_*DX+V5Ak@fOja]C/Fq&xxJ>)nMH>~ekeqSMTXz@Go`I7Lh!`GJA~aIW6 ,5[Cu' );
define( 'SECURE_AUTH_SALT', '8UUX}jDXm?r*%f$p#>wS6:sgALUsSOAo|=`Q@_87-Z:H,G8pi/xJZiCQGw1H~ `F' );
define( 'LOGGED_IN_SALT',   '7h-87eQC]r?E26K^_CTi>-EwkdV9rF=-ZM{X[[5e}0Y5.($[]`+*p&-7T@K9v@jJ' );
define( 'NONCE_SALT',       '!L(XX}`skW>H}^-+xl< JL2aavq0-K_NBw,W~f%7Mi7;1s&4Q-D,vk[/]2x|Kx]&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsbx_';

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
