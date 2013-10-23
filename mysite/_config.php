<?php

/**
 * SilverStripe Project
 */
global $project;
$project = 'mysite';

/**
 * _ss_environment.php
 */
require_once("conf/ConfigureFromEnv.php");

/**
 * Email errors
 */
if(!Director::isDev()) {
	SS_Log::add_writer(
		new SS_LogEmailWriter(Email::getAdminEmail()), 
		SS_Log::NOTICE, 
		'<='
	);
}

/**
 * Keep the cache clean
 */
if(isset($_REQUEST['flush'])) {
	SS_Cache::set_cache_lifetime('any', -1, 100);
}

/**
 * Locale
 */
i18n::set_locale('en_US');