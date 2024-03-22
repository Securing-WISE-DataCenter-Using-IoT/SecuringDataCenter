<?php
require_once('connection.php');

$sql = "SELECT * FROM vibrationsensor";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WISE Data Center - Vibration Data</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  
  <script>
    // Auto-refresh the page every 5 seconds
    setTimeout(function() {
      location.reload();
    }, 5000);
  </script>
</head>

<body>
  <div class="container-scroller">
    <div class="horizontal-menu">
      <!-- Rest of the code -->
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
                    <span class="nav-profile-name">
                      <?php
                      session_start();

                      if(isset($_SESSION['User'])) {
                        echo $_SESSION['User'];
                      } else {
                        header("location:LoginUser.php");
                      }
                      ?>
                    </span>
                    <span class="online-status"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item" href="logout.php?logout">
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
	  <!-- Navbar -->
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="temperature-data.php" class="nav-link">
                  <i class="mdi mdi-chart-areaspline menu-icon"></i>
                  <span class="menu-title">Temperature Read</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="humidity-data.php" class="nav-link">
                  <i class="mdi mdi-chart-areaspline menu-icon"></i>
                  <span class="menu-title">Humidity Read</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="mq2-data.php" class="nav-link">
                  <i class="mdi mdi-chart-areaspline menu-icon"></i>
                  <span class="menu-title">Gas Read</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="rainwater-data.php" class="nav-link">
                  <i class="mdi mdi-chart-areaspline menu-icon"></i>
                  <span class="menu-title">Water Leak Read</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="sw420-data.php" class="nav-link">
                  <i class="mdi mdi-chart-areaspline menu-icon"></i>
                  <span class="menu-title">Vibration Read</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
            </ul>
        </div>
      </nav>
    </div>
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <!-- Rest of the code -->
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Information</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Sensor</th>
                          <th>Value</th>
                          <th>Datetime</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['ID'] . '</td>';
                            echo '<td>' . $row['sensor'] . '</td>';
                            echo '<td>' . $row['value'] . '</td>';
                            echo '<td>' . $row['datetime'] . '</td>';
                            echo '</tr>';
                          }
                        } else {
                          echo '<tr><td colspan="4">No vibration data found</td></tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Rest of the code -->
		 <!-- Footer -->
        <footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">© WISE Data Center 2023</span>
            </div>
          </div>
        </footer>
      </div>
      <!-- Rest of the code -->
    </div>
  </div>

  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>
