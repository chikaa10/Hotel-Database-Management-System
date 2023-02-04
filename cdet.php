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
              <a class="nav-link" href="cdet.php?logout='1'" ><strong>Logout</strong></a>
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
						<th>Booking ID</th>
						<th>Booking Name</th> 
						<th>Username</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Address</th>
						<th>City</th>
					</tr>
				<?php
			
				$sql="select * from personaldetails where ID>=74";
				$result=mysqli_query($db,$sql);
				while($row5=mysqli_fetch_assoc($result))
				{
					$id5=$row5['ID'];
					$fn5=$row5['FirstName'];
					$ln5=$row5['LastName'];
					$user5=$row5['CUsername'];
					$email5=$row5['Email'];
					$mobile5=$row5['Mobile'];
					$address5=$row5['Address'];
					$city5=$row5['City'];
					?>
						<tr>
							<th><?php echo $id5;?></th>
							<th><?php echo $fn5; echo " "; echo $ln5;?></th>
							<th><?php echo $user5;?></th>
							<th><?php echo $email5;?></th>
							<th><?php echo $mobile5;?></th>
							<th><?php echo $address5;?></th>
							<th><?php echo $city5;?></th>
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