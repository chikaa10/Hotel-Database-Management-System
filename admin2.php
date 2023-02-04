<?php include('signin.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Index</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
	
	<style>
	
	body{
	
		background-color:white;
	}
	h3{
		text-align:center;
		color:white;
	}
	strong{
		
		color:white;
	}
	p{
		color:white;
	}
	table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
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
            
			<li class="nav-item">
              <a class="nav-link" href="adminindex.php"><strong>Room Details</strong></a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="cdet.php"><strong>Customer Details</strong></a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="admin2.php"><strong>Customer Queries</strong></a>
            </li>
			
			
			<li class="nav-item">
              <a class="nav-link" href="admin2.php?logout='1'" ><strong>Logout</strong></a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
	<?php endif ?>
	<br>
	
	<?php if (isset($_SESSION["cusername"])): ?>
		<!--<p>Welcome <strong><?php echo $_SESSION["cusername"]; ?></strong></p>-->
		
		<br><strong>
		<table style="width:100%">
					<tr>
						<th>Email</th>
						<th>Name</th> 
						<th>Phone Number</th>
						<th>Booking ID</th>
						<th>Question Topic</th>
						<th>Comments</th>
					</tr>
				<?php
			
				$sql="select * from contactus";
				$result=mysqli_query($db,$sql);
				while($row5=mysqli_fetch_assoc($result))
				{
					$email5=$row5['Email'];
					$name5=$row5['Name'];
					$phno5=$row5['PhoneNumber'];
					$bid5=$row5['BookingID'];
					$qt5=$row5['QuestionTopic'];
					$c5=$row5['Comments'];
					?>
						<tr>
							<th><?php echo $email5;?></th>
							<th><?php echo $name5;?></th>
							<th><?php echo $phno5;?></th>
							<th><?php echo $bid5;?></th>
							<th><?php echo $qt5;?></th>
							<th><?php echo $c5;?></th>
						</tr>
						<?php
				}
			
			?>
			</table>
		</strong>
		
	<?php endif ?>
	
	
	
	
	
	<br><br><br><br><br><br><br>
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