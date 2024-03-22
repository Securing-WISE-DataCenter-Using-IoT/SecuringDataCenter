<?php
session_start();

    if(isset($_SESSION['User']))
    {
        echo ' Wellcome ' . $_SESSION['User'].'<br/>';
        
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>WISE Data Center</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Ubuntu-Bold.css">
    <link rel="stylesheet" href="assets/css/Ubuntu-Regular.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/util.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image:url('assets/img/bg-01.jpg.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    <span>WISE Data Center Room <br> Admin Page <br> </span>
                </span>
                <?php if(isset($_GET['Empty'])): ?>
                    <div class="alert-light text-danger text-center py-3">
                        <?php echo $_GET['Empty']; ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($_GET['Invalid'])): ?>
                    <div class="alert-light text-danger text-center py-3">
                        <?php echo $_GET['Invalid']; ?>
                    </div>
                <?php endif; ?>
                <form action="processAdmin.php" method="POST" class="login100-form validate-form p-b-33 p-t-5">
                    <br><br>
                    <div class="image-container">
                        <img class="my-image" src="assets/img/WISElogo.jpg" alt="Image description">
                    </div> <br><br>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="AName" placeholder="Username" pattern="[A-Za-z]+" title="Username must contain only letters" required>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                       <input class="input100" type="password" name="APass" placeholder="Password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}" title="Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one symbol (!@#$%^&*)" required oninvalid="setCustomValidity('Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one symbol')" onchange="try{setCustomValidity('')}catch(e){}">

                    </div>
                    <div class="container-login100-form-btn m-t-32">
                        <button>
                            <input class="login100-form-btn" type="submit" name="Login" value="login" >
							<br>
                            <input class="login100-form-btn" type="reset" value="Reset" style="background-color: red;">

 </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
</body>

</html>
