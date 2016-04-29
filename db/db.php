<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "elm";

	//Create Connection
	$conn = mysql_connect($servername, $username, $password, $dbname);

	//Check Connection if die
	if (!$conn) {
		die("Failed to connect with database.");
	}
 ?>