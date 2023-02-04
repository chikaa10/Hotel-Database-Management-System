<!DOCTYPE html>
<html lang="en">

  <head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
	
	<style>
		body{
			background-color:white;
	
		}
		
	</style>

  </head>
  
  <body>
  
  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="logo.png" style="height:60px;width:150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		<!--<h2 style="color:white;">Welcome! <?php echo $_SESSION['cusername']; ?></h2>-->
		
		
		
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home1.php">Home</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="customersignup.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customerlogin.php">Login</a>
            </li>
			<!--<li class="nav-item">
              <a class="nav-link" href="login.php">Administrator</a>
            </li>-->
			<li class="nav-item">
              <a class="nav-link" href="rates.php">Rates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
  <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white">Hotel Sun and Sand</h1>
          <h2 class="display-4 text-white">Accomodation</h2>
           <div class="features-container section-container">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 features section-description wow fadeIn">
                      <div class="divider-1 wow fadeInUp">. . . . . . . . . .</div>
                      <p style="color:white;">We have a variety of rooms for your comfort:</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-4 features-box wow fadeInUp" >
                    <div class="features-box-icon"><img src="single.jpg"/></div>
                      <h5 class="display-4 text-white">Single Rooms</h5>
                      <p style="color:white;font-size: 25px">INR 15,000(AC)</p>
                      <p style="color:white;font-size: 25px">INR 10,000(Non-AC)</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInDown">
                    <div class="features-box-icon"><img src="double.jpg"/></div>
                      <h5 class="display-4 text-white">Double Rooms</h5>
                      <p style="color:white;font-size: 25px">INR 25,000(AC)</p>
                      <p style="color:white;font-size: 25px">INR 20,000(Non-AC)</p><br>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInUp">
                    <div class="features-box-icon"><img src="luxury.jpg"/></div>
                      <h5 class="display-4 text-white">Luxury Rooms</h5>
                      <p style="color:white;font-size: 25px">INR 35,000(AC)</p>
                      <p style="color:white;font-size: 25px">INR 30,000(Non-AC)</p><br>
                    </div>
              </div>
              
              </div>
          </div>
        </div>
        </div>
      </div>
    </header>
	
	 <!-- Footer -->
    <footer class="py-5 bg-dark" style="min-width:100%">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2017 Sun and Sand Hotel.All rights reserved. </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
