<?php
// Connect to the database
$db_host = "localhost";
$db_user = "root";
$db_pass = "12345678";
$db_name = "wise_datacenter";

	$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
		if (!$conn) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
	else
	{
		//echo "DONE";
			


$sql = "SELECT * FROM employee";
$result = $conn -> query($sql) ;
	if ($result -> num_rows > 0 )
		{
			//echo "Data Selected";
			
			$Delete = "";
			$Edit = "";
			
		while ($row = $result -> fetch_assoc())
			{
				$Delete = $Delete . 
				"
				<form action='DeletebUser.php' method='post'>
				
					<tbody>	
						<tr>
							<td>".$row["ID"]."</td>
							<td>".$row["FirstName"]."</td>
							<td>".$row["LastName"]."</td>
							<td>".$row["Username"]."</td>
							<td>".$row["Phone"]."</td>
							<td>".$row["JobTitle"]."</td>
							<td>".$row["JoinDate"]."</td>
							<td>".$row["Password"]."</td>
							<td> 
								<div class='template-demo'>
								<input type='hidden' value='".$row["ID"]."' name='ID'>
								<a href='#?id=?'> 
								<button type='submit' value='submit' class='btn btn-danger btn-rounded btn-fw'> Delete </button>
								</a>
								
								</div>
							</td>
							
						</tr>
					</tbody>
				</form>	
				";
			
			} 
		}
		else 
		{
			echo "ERROR SELECTED " . "<br>" . $conn->errror ;
		}
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WISE Data Center - User Info.</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />

</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              
            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a href="index.php"><img src="https://www.wise.edu.jo/wp-content/uploads/2021/11/image_2021-11-14_110615.png" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"><?php
						session_start();

						if(isset($_SESSION['User']))
						{
							echo $_SESSION['User'];
        
						}
							else
						{
							header("location:../../LogAd.php");
						}
					?></span>
                    <span class="online-status"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
      
                     
                      <a class="dropdown-item" href="../../../logout.php?logout">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="../../index.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="../../pages/forms/AddUser.php" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">Add Employee</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../../pages/tables/UserInfo.php" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Employee Info</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>	
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Pages</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
						<li class="nav-item"><a class="nav-link" href="../../../LoginUser.php">Login As <br> Employee</a></li>
                      </ul>
                  </div>
              </li>
            </ul>
        </div>
      </nav>
    </div>
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-6 grid-margin stretch-card">
              
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
				<div class="card-body">
                  <h4 class="card-title">Employee Information</h4>
                  <div class="table-responsive">
				  
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>FirstName</th>
                          <th>LastName</th>
                          <th>Username</th>
						  <th>Phone</th>
                          <th>JobTitle</th>
						  <th>JoinDate</th>
                          <th>Password</th>
						  <th>Delete</th>	
						  
                        </tr>
                      </thead>
					  
                       
						<?php echo $Delete ;?>
						
					  
					  
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
            
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
               <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> Copyright © WISE Data Center 2023 </span>
			</div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
