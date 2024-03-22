<?php 
    session_start();
    if(isset($_GET['Alogout']))
    {
        session_destroy();
        header("location:LogAd.php");
    }

?>