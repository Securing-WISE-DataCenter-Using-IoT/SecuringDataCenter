<?php 
require_once('../connection.php');
session_start();

$AName=$_POST['AName'];
$APass=$_POST['APass'];

    if(isset($_POST['Login']))
    {
       if(empty($AName) || empty($APass))
       {
            header("location:LogAd.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $sql="select * from admin where Username='$AName' and Password='$APass'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_fetch_assoc($result)) 
			{
				$_SESSION['User'] = $AName;
				header("location:index.php");
			}
			else 
			{
				header("location:LogAd.php?Invalid=Please enter correct username and password");
			}
		}
	}
	else 
	{
		echo 'Error!';
	}
?>