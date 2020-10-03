<?php

	$server = "<your server name>";
	$user = "<your username>";
	$password = "<your passwror>";
	$database = "<your db name>";


	function getConnection(){
		global $server, $user, $password, $database;
	
		$conn = mysqli_connect($server, $user, $password, $database);
		return $conn;
	}

?>
