<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wise_datacenter";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)
{
	die("Please Check Your Connection" . mysqli_connect_error());
}

?>