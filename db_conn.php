<?php

$username = "project_"; 
$password = "root";
$host = "localhost";
$db = "project";

	$conn = mysqli_connect($host,$username,$password,$db);
	if (!$conn)
		die("Connection Failed".mysqli_connect_error());
	
?>