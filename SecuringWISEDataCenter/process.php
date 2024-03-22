<?php
require_once('connection.php');
session_start();

$UName = $_POST['UName'];
$Password = $_POST['Password'];

if(isset($_POST['login'])) 
{
    if(empty($UName) || empty($Password)) 
	{
        header("location:LoginUser.php?Empty=Please fill in the blanks");
    } 
	else 
	{
        $sql = "SELECT * FROM employee WHERE Username='".$UName."' AND Password='".$Password."'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_fetch_assoc($result)) 
		{
            $_SESSION['User'] = $UName;
            header("location:index.php");
        }
		else 
		{
            header("location:LoginUser.php?Invalid=Please enter correct username and password");
        }
    }
}
else 
{
    echo 'Error!';
}
?>
