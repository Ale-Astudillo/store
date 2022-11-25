<?php

	$DB_HOST = 'stores.mysql.database.azure.com';
	$DB_USER = 'Alexa';
	$DB_PASS = 'Celio3009';
	$DB_NAME = 'store';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
