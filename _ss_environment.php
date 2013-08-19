<?php

/**
 * Configure SilverStripe from the _ss_environment.php file.
 * Usage: Put "require_once('conf/ConfigureFromEnv.php');" into your _config.php file.
 */

/**
 * The environment type: dev, test or live.
 */
define('SS_ENVIRONMENT_TYPE', 'dev');

/**
 * The username of the default admin - this is a non-database user with administrative privileges.
 */
define('SS_DEFAULT_ADMIN_USERNAME', 'admin');

/**
 * The password of the default admin.
 */
define('SS_DEFAULT_ADMIN_PASSWORD', 'dev');

/**
 * Protect the site with basic auth (good for test sites)
 */
define('SS_USE_BASIC_AUTH', false);

/**
 * The database class to use, MySQLDatabase, MSSQLDatabase, etc. defaults to MySQLDatabase
 */
define('SS_DATABASE_CLASS', 'MySQLDatabase');

/**
 * The database server to use, defaulting to localhost
 */
define('SS_DATABASE_SERVER', 'localhost');

/**
 * The database username (mandatory)
 */
define('SS_DATABASE_USERNAME', '');

/**
 * The database password (mandatory)
 */
define('SS_DATABASE_PASSWORD', '');

/**
 * Set the database name.
 * Assumes the $database global variable in your config is missing or empty.
 */
define('SS_DATABASE_NAME', '');

/**
 * Boolean/Int. If set, then the system will choose a default database name for you if one isn't give in the $database variable.
 * The database name will be "SS_" followed by the name of the folder into which you have installed SilverStripe.
 * If this is enabled, it means that the phpinstaller will work out of the box without the installer needing to alter any files.
 * This helps prevent accidental changes to the environment.
 * If SS_DATABASE_CHOOSE_NAME is an integer greater than one, then an ancestor folder will be used for the database name.
 * This is handy for a site that's hosted from /sites/examplesite/www or /buildbot/allmodules-2.3/build.
 * If it's 2, the parent folder will be chosen; if it's 3 the grandparent, and so on.
 */
define('SS_DATABASE_CHOOSE_NAME', false);

/**
 * Specify database port.
 */
//define('SS_DATABASE_PORT', '');

/**
 * A prefix to add to the database name.
 */
//define('SS_DATABASE_SUFFIX', '');

/**
 * Set the database timezone to something other than the system timezone
 */
//define('SS_DATABASE_TIMEZONE', '');

/**
 * Absolute file path to store temporary files such as cached templates or the class manifest.
 * Needs to be writeable by the webserver user. Defaults to sys_get_temp_dir(), and falls back to silverstripe-cache in the webroot.
 * See getTempFolder() in framework/core/Core.php
 */
//define('TEMP_FOLDER', '');

/**
 * Set the directory to store assets, defaults to assets.
 */
//define('ASSETS_DIR', 'assets');
	
/**
 * This causes errors to be written to the silverstripe.log file in the same directory as this file.
 */
define('SS_ERROR_LOG', 'silverstripe.log');

/**
 * If you set this define, all emails will be redirected to this address.
 */
//define('SS_SEND_ALL_EMAILS_TO', '');

/**
 * If you set this define, all emails will be send from this address.
 */
//define('SS_SEND_ALL_EMAILS_FROM', '');

/**
 * This is used by sake to know which directory points to which URL
 */
global $_FILE_TO_URL_MAPPING; 
$_FILE_TO_URL_MAPPING[__DIR__] = 'http://example.com';
