<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "12345678";
$db_name = "wise_datacenter";

$ID =$_POST['ID'];


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
	if($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}

	else
	{
		$sql = "DELETE FROM employee WHERE ID='$ID' ";

		if($conn -> multi_query($sql)==TRUE)
			{
				header("location:UserInfo.php");
			}
		else
		{
			echo"Error :".$sql."<br>".$conn ->error;
		}		
	}	
?>