<?php

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'btcoin_db');

	$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	session_start(); 

?>