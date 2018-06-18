<?php
	function db_connect(){
		$PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
		return $PDO;
	}

	$server     = "127.0.0.1:3306";
	$username   = "root";
	$password   = "";
	$db         = "store";
	
	// create a connection
	$conn = mysqli_connect( $server, $username, $password, $db );
?>