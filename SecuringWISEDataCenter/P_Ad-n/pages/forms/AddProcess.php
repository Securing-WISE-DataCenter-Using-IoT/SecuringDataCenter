<?php
	
$first_Name=$_POST["firstname"];
$last_Name=$_POST["lastname"];
$Username=$_POST["Username"];
$Phone=$_POST["phone"];
$job_Title=$_POST["jobtitle"];	
$Date=$_POST["date"];
$Password=$_POST["Password"];

	
// Connect to the database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "wise_datacenter";

	$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
	if (!$conn) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		//echo "DONE";
		$sql= "INSERT INTO employee (FirstName,LastName,Username,Phone,JobTitle,JoinDate,Password)
		VALUES('$first_Name','$last_Name','$Username','$Phone','$job_Title','$Date','$Password')";
		
		if($conn->multi_query($sql)==true)
		{
			header ("Location:../../pages/tables/UserInfo.php");	
		}
		else
		{
			echo "Insert Error" . $conn->error ;
		}
	}
	
	
?>	