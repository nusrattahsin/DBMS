<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "iubadmission";

//this line sets up the connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn){
	echo "sorry db not connected";
}
else{
	echo "db connected";
}

?>