<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WISE Data Center - Manage User</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add Employee</h4>
				  
                  <form class="forms-sample" action="AddProcess.php" method="POST">
                    <div class="form-group">
                      <label for="firstname"> First Name </label>
                      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                    </div>
					<div class="form-group">
                      <label for="lastname"> Last Name </label>
                      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <label for="Username"> Username </label>
                      <input type="text" class="form-control" name="Username" id="Username" placeholder="Username">
                    </div>
					<div class="form-group">
                      <label for="phone"> Phone </label>
                      <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone">
                    </div>
					
					<div class="form-group">
                      <label for="jobtitle"> Job Title </label>
                      <input type="text" class="form-control" name="jobtitle" id="jobtitle" placeholder="Job Title">
                    </div>
					<div class="form-group">
                      <label for="date"> Join Date </label>
                      <input type="date" class="form-control" name="date" id="date">
					</div>
					<div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="Password" id="password" placeholder="Password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}" title="Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one symbol (!@#$%^&*)" required oninvalid="setCustomValidity('Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one symbol')" onchange="try{setCustomValidity('')}catch(e){}">

                    </div>
                    <button type="submit" class="btn btn-primary me-2" name="submit">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>