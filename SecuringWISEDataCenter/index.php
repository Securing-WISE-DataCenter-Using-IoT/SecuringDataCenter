<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WISE Data Center - Home Page</title>
  <!-- CSS -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- Horizontal Navbar -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <!-- Left Navbar Items -->
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
      <!-- Bottom Navbar -->
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
    <!-- Main Content -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
		
		<div class="row">
			<div class="col-sm-4 flex-column d-flex stretch-card">
				<div class="row flex-grow">
					<div class="col-sm-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="row">
									
								
								<div class="col-lg-8">
										<h3 class="font-weight-bold text-dark">Data Center Room</h3>
										<br>
										<div class="d-lg-flex align-items-baseline mb-3">
											<h2 id="currentTime"></h2>

										</div> 
										

									</div>
									
									
								<div class="col-lg-4">
									<div class="position-relative">
										<img src="images/dashboard/live.jpg" class="w-100" alt="">
										<div class="live-info badge badge-success">Live</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4 flex-column d-flex stretch-card">
  <div class="row flex-grow">
    <div class="col-sm-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-8">
              <h2 class="text-dark font-weight-bold">Water Leak</h2>
              <p class="text-dark" id="rainwaterDateTime"></p>
              <div class="d-lg-flex align-items-baseline mb-3">
                <h1 class="text-dark font-weight-bold" id="rainwaterElement"></h1>
                <h1 class="text-dark font-weight-bold"><sup class="font-weight-light"><small>%</small></sup></h1>
              </div>
			  

            </div>
            <div class="col-lg-4">
              <div class="position-relative">
                <div class="live-info badge badge-success">Live</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-4 flex-column d-flex stretch-card">
  <div class="row flex-grow">
    <div class="col-sm-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-8">
              <h2 class="text-dark font-weight-bold">Vibration</h2>
              <p class="text-dark" id="vibrationDateTime"></p>
              <div class="d-lg-flex align-items-baseline mb-3">
                <h1 class="text-dark font-weight-bold" id="vibrationElement"></h1>
                <h1 class="text-dark font-weight-bold"><sup class="font-weight-light"><small></small></sup></h1>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="position-relative">
                <div class="live-info badge badge-success">Live</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

			
		</div>
		
		
		<div class="row">
			<div class="col-sm-4 flex-column d-flex stretch-card">
				<div class="row flex-grow">
					<div class="col-sm-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-8"> 
										<h2 class="text-dark font-weight-bold">Temperature</h2>
										<p class="text-dark" id="temperatureDateTime"></p>
									<div class="d-lg-flex align-items-baseline mb-3">
										<h1 class="text-dark font-weight-bold" id="temperatureElement"></h1>
										<h1 class="text-dark font-weight-bold"><sup class="font-weight-light"><small>o</small><small class="font-weight-medium">C</small></sup></h1>
									</div>
									</div>
								<div class="col-lg-4">
									<div class="position-relative"> 
										<div class="live-info badge badge-success">Live</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

  <div class="col-sm-4 flex-column d-flex stretch-card">
    <div class="row flex-grow">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-8"> 
                <h2 class="text-dark font-weight-bold">Humidity</h2>
                <p class="text-dark" id="humidityDateTime"></p>
                <div class="d-lg-flex align-items-baseline mb-3">
                  <h1 class="text-dark font-weight-bold" id="humidityElement"></h1>
                  <h2><sup class="font-weight-light"><small>%</small></sup></h2>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="position-relative"> 
                  <div class="live-info badge badge-success">Live</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4 flex-column d-flex stretch-card">
    <div class="row flex-grow">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-8"> 
                <h2 class="text-dark font-weight-bold">Gas Ratio</h2>
                <p class="text-dark" id="gasDateTime"></p>
                <div class="d-lg-flex align-items-baseline mb-3">
                  <h1 class="text-dark font-weight-bold" id="gasRatioElement"></h1>
                  <h2><sup class="font-weight-light"><small>%</small></sup></h2>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="position-relative"> 
                  <div class="live-info badge badge-success">Live</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

		  
		  
          <div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Temperature chart</h4>
        <canvas id="temperatureChart"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Humidity chart</h4>
        <canvas id="humidityChart"></canvas>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Gas chart</h4>
        <canvas id="gasChart"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Water Leak chart</h4>
        <canvas id="waterLeakChart"></canvas>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Vibration chart</h4>
        <canvas id="vibrationChart"></canvas>
      </div>
    </div>
  </div>
</div>

        <!-- Footer -->
        <footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">© WISE Data Center 2023</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <!-- JavaScript -->
<script>
  const element = document.getElementById('currentTime');

  setInterval(function () {
    const currentDate = new Date();
    const currentTime = currentDate.getHours().toString().padStart(2, '0') + ":" +
      currentDate.getMinutes().toString().padStart(2, '0') + ":" +
      currentDate.getSeconds().toString().padStart(2, '0');
    const currentDateFormatted = currentDate.toDateString();
    const dayOfWeek = currentDateFormatted.split(' ')[0];
    const date = currentDateFormatted.split(' ').slice(1).join(' ');

    element.innerHTML = dayOfWeek + ", " + date + "<br>" + currentTime;
  }, 1000);
</script>



  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="js/template.js"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>

  <script src="js/chart.js"></script>
  <script src="js/chart1.js"></script>
</body>
</html>