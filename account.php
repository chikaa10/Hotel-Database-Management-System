<?php include('signup.php'); ?>
<?php include('update.php'); ?>
<?php include('cancel.php'); ?>
<?php include('accdetails.php'); ?>
<?php include('check.php'); ?>
<?php include('finalbook.php'); ?>
<?php include('payconfirm.php'); ?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
	
	<style>
	
	body{
		backgrounf-image:hotel.jpg;
		background-color:white;
	}
	
	</style>

</head>
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
              <a class="nav-link" href="account.php?logout='1'" style="color: red;">Logout</a>
            </li>
			
          </ul>
        </div>
      </div>
    </nav>
	<?php endif ?>

	<h1>ACCOUNT DETAILS!</h1>
	<h3>My Bookings</h3>
	<form method="post" action="account.php" style="background-color:white;">
 <?php if (isset($_SESSION['cusername'])): ?>
	<h4><strong>Previous Bookings</strong><h4>
	<strong> 
		<?php  
			$cusername = mysqli_real_escape_string($db, $_SESSION['cusername']);
			$sql="select * from previousbooking where User='$cusername'";
			$result=mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($result))
			{
				echo "Booking ID: "; echo $row['BookingID']; echo "<br>";
				echo "Name: "; echo $row['FirstName']; echo" "; echo $row['LastName']; echo "<br>";
				echo "Email: "; echo $row['Email']; echo "<br>";
				echo "Mobile: "; echo $row['Mobile']; echo "<br>";
				echo "Address: "; echo $row['Address']; echo "<br>";
				echo "City: "; echo $row['City']; echo "<br>";
				echo "PIN: "; echo $row['PIN']; echo "<br>";
				echo "Country: "; echo $row['Country']; echo "<br><br>";
			}
		?>
	</strong>
	<br>
	<h4><strong>Current Booking Status</strong><h4>
	<strong>Booking ID : <?php echo $_SESSION["id1"]; ?></strong><br>
	<strong>Type : <?php echo $_SESSION["gtype1"]; ?></strong><br>
	<strong>Guest Name: <?php echo $_SESSION["fname1"]; echo" "; echo $_SESSION["lname1"];  ?></strong><br>
	<strong>Mobile: <?php echo $_SESSION["mobile1"]; ?></strong><br>
	<?php endif ?>
	
	
  <br><br><button type="submit" name="cancel">Cancel Booking</button>
  </form><br><br>
	
	
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
