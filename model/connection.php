<?php

	$server = "localhost:3306";
	$user = "arifonoy";
	$password = "AnonoymouS05";
	$database = "arifonoy_mydata";


	function getConnection(){
		global $server, $user, $password, $database;
	
		$conn = mysqli_connect($server, $user, $password, $database);
		return $conn;
	}

?>