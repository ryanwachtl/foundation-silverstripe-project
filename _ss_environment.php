<?php

/**
 * Configure SilverStripe using apache environment variables
 * Usage: Put "require_once('conf/ConfigureFromEnv.php');" into your _config.php file.
 * Example Apache vhost:
 * <VirtualHost *:80>
 *    ...
 *    SetEnv SS_ENVIRONMENT_TYPE dev
 *    SetEnv SS_DEFAULT_ADMIN_USERNAME admin
 *    SetEnv SS_DEFAULT_ADMIN_PASSWORD dev
 *    SetEnv SS_DATABASE_USERNAME root
 *    SetEnv SS_DATABASE_PASSWORD *****
 *    SetEnv SS_DATABASE_NAME silverstripe
 *    SetEnv SS_ERROR_LOG silverstripe.log
 *    SetEnv SS_FILE_TO_URL_MAPPING_URL http://silverstripe.dev
 * </VirtualHost>
 */

# Constants for framework/conf/ConfigureFromEnv.php

## Database

/**
 * SS_DATABASE_CLASS
 * The database class to use, MySQLDatabase, MSSQLDatabase, etc. defaults to MySQLDatabase
 */
if (getenv('SS_DATABASE_CLASS')) {
	define('SS_DATABASE_CLASS', getenv('SS_DATABASE_CLASS'));
}

/**
 * SS_DATABASE_SERVER
 * The database server to use, defaulting to localhost
 */
if (getenv('SS_DATABASE_SERVER')) {
	define('SS_DATABASE_SERVER', getenv('SS_DATABASE_SERVER'));
}

/**
 * SS_DATABASE_USERNAME
 * The database username (mandatory)
 */
if (getenv('SS_DATABASE_USERNAME')) {
	define('SS_DATABASE_USERNAME', getenv('SS_DATABASE_USERNAME'));
}

/**
 * SS_DATABASE_PASSWORD
 * The database password (mandatory)
 */
if (getenv('SS_DATABASE_PASSWORD')) {
	define('SS_DATABASE_PASSWORD', getenv('SS_DATABASE_PASSWORD'));
}

/**
 * SS_DATABASE_PORT
 * The database port
 */
if (getenv('SS_DATABASE_PORT')) {
	define('SS_DATABASE_PORT', getenv('SS_DATABASE_PORT'));
}

/**
 * SS_DATABASE_NAME
 * Set the database name.
 * Assumes the $database global variable in your config is missing or empty.
 */
if (getenv('SS_DATABASE_NAME')) {
	define('SS_DATABASE_NAME', getenv('SS_DATABASE_NAME'));
}

/**
 * SS_DATABASE_PREFIX
 * A prefix to add to the database name.
 */
if (getenv('SS_DATABASE_PREFIX')) {
	define('SS_DATABASE_PREFIX', getenv('SS_DATABASE_PREFIX'));
}

/**
 * SS_DATABASE_SUFFIX
 * A suffix to add to the database name.
 */
if (getenv('SS_DATABASE_SUFFIX')) {
	define('SS_DATABASE_SUFFIX', getenv('SS_DATABASE_SUFFIX'));
}

/**
 * SS_DATABASE_TIMEZONE
 * Set the database timezone to something other than the system timezone
 */
if (getenv('SS_DATABASE_TIMEZONE')) {
	define('SS_DATABASE_TIMEZONE', getenv('SS_DATABASE_TIMEZONE'));
}

/**
 * SS_DATABASE_SCHEMA
 * For schema enabled drivers
 */
if (getenv('SS_DATABASE_SCHEMA')) {
	define('SS_DATABASE_SCHEMA', getenv('SS_DATABASE_SCHEMA'));
}

/**
 * SS_DATABASE_MEMORY
 * For SQlite3 memory databases (mainly for testing purposes)
 */
if (getenv('SS_DATABASE_MEMORY')) {
	define('SS_DATABASE_MEMORY', getenv('SS_DATABASE_MEMORY'));
}

/**
 * SS_DATABASE_CHOOSE_NAME
 * Boolean/Int. If set, then the system will choose a default database name for you if one isn't give in the $database variable.
 * The database name will be "SS_" followed by the name of the folder into which you have installed SilverStripe.
 * If this is enabled, it means that the phpinstaller will work out of the box without the installer needing to alter any files.
 * This helps prevent accidental changes to the environment.
 * If SS_DATABASE_CHOOSE_NAME is an integer greater than one, then an ancestor folder will be used for the database name.
 * This is handy for a site that's hosted from /sites/examplesite/www or /buildbot/allmodules-2.3/build.
 * If it's 2, the parent folder will be chosen; if it's 3 the grandparent, and so on.
 */
if (getenv('SS_DATABASE_CHOOSE_NAME')) {
	define('SS_DATABASE_CHOOSE_NAME', getenv('SS_DATABASE_CHOOSE_NAME'));
}

## Environment Type

/**
 * SS_ENVIRONMENT_TYPE
 * The environment type: dev, test or live.
 */
if (getenv('SS_ENVIRONMENT_TYPE')) {
	define('SS_ENVIRONMENT_TYPE', getenv('SS_ENVIRONMENT_TYPE'));
}

## Access

/**
 * SS_DEFAULT_ADMIN_USERNAME
 * The username of the default admin - this is a non-database user with administrative privileges.
 */
if (getenv('SS_DEFAULT_ADMIN_USERNAME')) {
	define('SS_DEFAULT_ADMIN_USERNAME', getenv('SS_DEFAULT_ADMIN_USERNAME'));
}

/**
 * SS_DEFAULT_ADMIN_PASSWORD
 * The password of the default admin.
 */
if (getenv('SS_DEFAULT_ADMIN_PASSWORD')) {
	define('SS_DEFAULT_ADMIN_PASSWORD', getenv('SS_DEFAULT_ADMIN_PASSWORD'));
}

/**
 * SS_USE_BASIC_AUTH
 * Protect the site with basic auth (good for test sites)
 */
if (getenv('SS_USE_BASIC_AUTH')) {
	define('SS_USE_BASIC_AUTH', getenv('SS_USE_BASIC_AUTH'));
}

## Email

/**
 * SS_SEND_ALL_EMAILS_TO
 * If you set this define, all emails will be redirected to this address.
 */
if (getenv('SS_SEND_ALL_EMAILS_TO')) {
	define('SS_SEND_ALL_EMAILS_TO', getenv('SS_SEND_ALL_EMAILS_TO'));
}

/**
 * SS_SEND_ALL_EMAILS_FROM
 * If you set this define, all emails will be send from this address.
 */
if (getenv('SS_SEND_ALL_EMAILS_FROM')) {
	define('SS_SEND_ALL_EMAILS_FROM', getenv('SS_SEND_ALL_EMAILS_FROM'));
}

## Error Logging

/**
 * SS_ERROR_LOG
 * This causes errors to be written to the silverstripe.log file in the same directory as this file.
 */
if (getenv('SS_ERROR_LOG')) {
	define('SS_ERROR_LOG', getenv('SS_ERROR_LOG'));
}

/**
 * SS_FILE_TO_URL_MAPPING_URL
 * optional SS_FILE_TO_URL_MAPPING_DIR, defaults to __DIR__ of this file
 * This is used by sake to know which directory points to which URL
 */
if (getenv('SS_FILE_TO_URL_MAPPING_URL')) {
	global $_FILE_TO_URL_MAPPING;
	if (getenv('SS_FILE_TO_URL_MAPPING_DIR')) {
		$_FILE_TO_URL_MAPPING[getenv('SS_FILE_TO_URL_MAPPING_DIR')] = getenv('SS_FILE_TO_URL_MAPPING_URL');
	} else {
		$_FILE_TO_URL_MAPPING[__DIR__] = getenv('SS_FILE_TO_URL_MAPPING_URL');
	}
}

# Advanced Constants for framework/core/Constants.php

/**
 * ASSETS_DIR
 * Set the directory to store assets, defaults to assets.
 */
if (getenv('ASSETS_DIR')) {
	define('ASSETS_DIR', getenv('ASSETS_DIR'));
}

/**
 * ASSETS_PATH
 * Use if assets dir is outside of base
 */
if (getenv('ASSETS_PATH')) {
	define('ASSETS_PATH', getenv('ASSETS_PATH'));
}

/**
 * TEMP_FOLDER
 * Absolute file path to store temporary files such as cached templates or the class manifest.
 * Needs to be writeable by the webserver user. Defaults to sys_get_temp_dir(), and falls back to silverstripe-cache in the webroot.
 * See getTempFolder() in framework/core/Core.php
 */
if (getenv('TEMP_FOLDER')) {
	define('TEMP_FOLDER', getenv('TEMP_FOLDER'));
}