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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'param' );

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
define( 'AUTH_KEY',         '*mU+xGY-hs.4L|pp>x4YRj1blb3BDk&@Rd5:>A70%8<d-M&V(;5;Zz@ #7s3Aoc_' );
define( 'SECURE_AUTH_KEY',  'X0dLGp$sOiA0+}i4V4a&3G6O%id$$FdH:`IqfehN<BVft)MG|35$4+8Oj@><laP:' );
define( 'LOGGED_IN_KEY',    'PIKH%BcqHu?+Y%Pwv$SJ[Ln&d4+;6}Vw5DQY,x>/eQti]~&;5NE>6<nOEKH/84~9' );
define( 'NONCE_KEY',        '^jW6H)m^Hn_y|g<@@lC2?;Sxb]yg[!:?hjx+tV_G3R+bwF>A=KYJ:Q_Y_?<RVj7Q' );
define( 'AUTH_SALT',        'l!/E E&EaFXqXVn~]YBPi#w N8vG6IXc>^.f[;[`Owb40W1XSU1eGSxO:twlv%An' );
define( 'SECURE_AUTH_SALT', 'nc&}Bclrm?P8BvUY_A:5uEn&Xf]@]QW9;]7|1PUNkoJsnQi,JiRZT3a^aICadgik' );
define( 'LOGGED_IN_SALT',   'Ln@)1xkiwRE4B.aSm-w W)YjgnL0>2;hb3yoD:5D[}r=+@zcB!B:~ny3ok3r=b+`' );
define( 'NONCE_SALT',       'ScR5gx`Dt,t`rNR31]RC?2Kv^OZ7fU>_~_aeQZQwHdTV;xlpFOobn4ytM4c.RZB%' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'FS_METHOD', 'direct' );
