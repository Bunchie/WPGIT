<?php

$_DB_NAME='WP_RESUME';

$_DB_USER='root';

$_DB_PASSWORD='';

$_DB_HOST='localhost';

// ** MySQL settings - You can get this info from your web host ** //

if ($_SERVER['REMOTE_ADDR']=='127.0.0.1') {
    define('WP_ENV', 'development');
} else {
    define('WP_ENV', 'production');
}

// ** MySQL settings - You can get this info from your web host  ** //

if (WP_ENV == 'development') {
    define('DB_NAME', $_DB_NAME);
    define('DB_USER', $_DB_USER);
    define('DB_PASSWORD', $_DB_PASSWORD);
    define('DB_HOST', $_DB_HOST);
} else {
    define('DB_NAME', $_DB_NAME);
    define('DB_USER', $_DB_USER);
    define('DB_PASSWORD', $_DB_PASSWORD);
    define('DB_HOST', $_DB_HOST);
} 

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/
