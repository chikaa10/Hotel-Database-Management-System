<?php include('payconfirm.php'); ?>
<?php include('finalbook.php'); ?>
<?php include('cost.php'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <title>BookingConfirmation</title>
   <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
  </head>
       <style>
	 form
	 {
 background-image: url("back1.jpg");
 color: black;
 text-align:left;
 padding: 20px 20px;
 font-family: "Georgia",serif;
	 }
	 .button 
{
    background-color: black; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

  </style>
  <body>
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
              <a class="nav-link" href="home1.php?logout='1'" style="color: red;">Logout</a>
            </li>
			
          </ul>
        </div>
      </div>
    </nav>
	<?php endif ?>

  <form method="post" action="confirmed.php">
  <br><br><br><br><br><br>
  <h3>Booking ID&emsp;: <?php echo $_SESSION['finalid']; ?></h3><br>
  <h3>Guest Name&emsp;: <?php echo $_SESSION["firstname"]; echo " "; echo $_SESSION["lastname"];?></h3><br>
  <h3>Enjoy your stay!</h3><br>
  <br>
  <br><br><br><br><br><br>
  </form>
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

