<?php

// This is the database connection configuration.
return array(
	// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=127.0.0.1:3306;dbname=yii_blog',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'password',
	'charset' => 'utf8',
	
);