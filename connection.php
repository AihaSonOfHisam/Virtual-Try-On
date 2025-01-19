<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "virtualtryon";

$connection = mysqli_connect($servername, $username, $password, $databasename) or die('Cannot connect to virtualtryon database');

if ($connection ->connect_errno) { 
	echo "Failed to connect to MySQL: " . $connection -> connect_error;
	exit();
}

?>