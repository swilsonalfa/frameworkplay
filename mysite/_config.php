<?php

global $project;
$project = 'mysite';

global $database;
$database = 'frameworktest';

// Use ClearDB or _ss_environment.php file for configuration 
if(isset($_ENV['CLEARDB_DATABASE_URL'])) {
	global $databaseConfig;
	$parts = parse_url($_ENV['CLEARDB_DATABASE_URL']);
	
	$databaseConfig['type'] = 'MySQLDatabase';
	$databaseConfig['server'] = $parts['host'];
	$databaseConfig['username'] = $parts['user'];
	$databaseConfig['password'] = $parts['pass'];
	$databaseConfig['database'] = trim($parts['path'], '/');
} else {
	require_once('conf/ConfigureFromEnv.php');
}
