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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deplasta_a74' );

/** MySQL database username */
define( 'DB_USER', 'deplasta_a74' );

/** MySQL database password */
define( 'DB_PASSWORD', '68C3EDB5Aatq17fl2no4j0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Ei/h0L)B2~`uT{mGN3FGG/k)r2_J(JH`B>8+p4r?MQzQjq(}Pr7JxA&Di7B0cmvt' );
define( 'SECURE_AUTH_KEY',   'Zz-@>3|,6e=NQ0&7D&Wa3kI>51n#yQ-oI}/xaF+.zTb!5&k]m$~H2EJXsgRNLk7W' );
define( 'LOGGED_IN_KEY',     'XQHr 9[1-ZoUzMQbt%f?Ul JMlp+==Lpy/9OYiVxx/iFm4CT$p]1)PJy(ep$QXGx' );
define( 'NONCE_KEY',         'xa`_$mvl*c=6jyy+oB!-2LK7xvJ/fNTCb385{[Xd#3RT^ydr.G~6Fe&FhO!&KDNo' );
define( 'AUTH_SALT',         'Rd=Rw^;5tRvi-1n{n0C_S]S%FFUodZ-LpI=|9+P2vz^LG2A0s;NK~%vq},|A/^Y]' );
define( 'SECURE_AUTH_SALT',  'b3uhhkWE)sng1/<hT%;pFAy|<gXM_)-geXzkTzBG|Lshky&i NUjZ>k!=Y*x]h#5' );
define( 'LOGGED_IN_SALT',    'dgM2dEU ptgs@m#f}Qy*sG zMcp.CLI<&cWZ{TFF;]->j0v*?iY%:Jfg69 :g&U#' );
define( 'NONCE_SALT',        'T0Ljh}wuJnMnwP_E@V+:aeJvtqoOYT!m413O#J& JW_5fSc~bueS_tK1<3.(|PsB' );
define( 'WP_CACHE_KEY_SALT', 'Brdb(VtE-`|+@:_4^UIp}Hy7>^6tN%;_6s]K*8>wjWH#3|d!|HU#!M8tF^kroLfU' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'a74_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
