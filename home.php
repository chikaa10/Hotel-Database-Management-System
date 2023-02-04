<?php include ('signup.php'); ?>
<?php include('update.php'); ?>
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
		
		<?php if (isset($_SESSION["success"])): ?>
	<h3>
		<?php
			echo $_SESSION["success"];
			unset ($_SESSION["success"]);
		?>
	</h3>
	<?php endif ?>
	
	<?php if (isset($_SESSION["cusername"])): ?>
		<h3><p>Welcome <strong><?php echo $_SESSION["cusername"]; ?></strong></p></h3>
	
		
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="registeration.php">Registeration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="account.php">Account</a>
            </li>
           
            
			<li class="nav-item">
              <a class="nav-link" href="home.php?logout='1'" style="color: red;">Logout</a>
            </li>
			
          </ul>
        </div>
      </div>
    </nav>
	<?php endif ?>

    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white">Hotel Sun and Sand</h1>
          <h2 class="display-4 text-white">Where luxury meets comfort</h2>
        </div>
      </div>
    </header>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img2.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4"><strong>Pools</strong></h2>
              <p><strong>A lovely pool located in a quiet and private location and available to guests from May to October; with a wide solarium with lounge chairs, offers a relaxing and toning break during your visit to the beautiful countryside.
Staying here means getting away from the city's often chaotic traffic; this lets you spend more time relaxing and perhaps ending your day with a toning bath in the lovely pool.</strong></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img5.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-5">
              <h2 class="display-4"><strong>Rooms</strong></h2>
              <p><strong>Sun and Sand Hotel & Jacuzzi Suites features 20 spacious guest rooms and bathrooms that combine comfort, style, elegance and the latest technology.

These details transform hotel into an ideal place; both for leisure and business travellers. The soothing palette of warm colours along with the branded furniture, combine the classical with the modern and create a beautiful and cosy atmosphere.</strong></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img4.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4"><strong>Restaurant</strong></h2>
              <p><strong>Our 5 star outstanding restaurant and 2 bars await to tempt our guests with international culinary delights. Sumptuous buffets are available in the Restaurant for breakfast and dinner.

The Greek near the beach offers local cuisine for lunch and dinner and the «Sun and Sand Bar» Restaurant promises fine dining with our chefs creating demanding gourmet dishes in an open kitchen environment.</strong></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
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
