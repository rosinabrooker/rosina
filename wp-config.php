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
define( 'DB_NAME', 'tyxandev_wp545' );

/** MySQL database username */
define( 'DB_USER', 'tyxandev_wp545' );

/** MySQL database password */
define( 'DB_PASSWORD', '0c8pKS]8!8' );

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
define( 'AUTH_KEY',         'xuvizdnkhfutpqugaxnrrhymbghvvihekcgkhxcbkeh6l7k0ghmjv9zpyhiznl6c' );
define( 'SECURE_AUTH_KEY',  'co5tmof9fsdoaov3sthoup1bz9iupcqrqv7bbxmsklyoxrjnap8mbj1lnbzphhna' );
define( 'LOGGED_IN_KEY',    'cozjc8tfxnlgsuhb3e9xgmqvjbstzhpekjrhi5xbq56dhqo2i0jfeqq0kev1xfu1' );
define( 'NONCE_KEY',        'efmsajzvrvm0eitonrffczqoat7fsdfbxcg8h5xvsvrf37jhsq1ewpcf1hiydcra' );
define( 'AUTH_SALT',        'mtcjes6lakwcxffwiw2bpncgdcwnmk6kai9ht00orbk0abhe4pmfozm8b37iwhtv' );
define( 'SECURE_AUTH_SALT', 'jrwaqu33evrninjskxnslyrcqzndxvakxi0trte3dpkz7ygwg7lr3pes8culaynq' );
define( 'LOGGED_IN_SALT',   '5oksoecy9vvp73xa2wr0xrrcizyuraoc0utdh2ekssmowc03zmd5g9henf8z6dgt' );
define( 'NONCE_SALT',       'ukpiswhtoyz1zahlswembviyx02e3zvxiemdy3vmsvp2tgbv638s7bx1bja1untu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuy_';

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

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

