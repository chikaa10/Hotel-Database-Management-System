<?php include('signup.php'); ?>
<?php include('check.php'); ?>
<?php include('finalbook.php'); ?>
<?php include('payconfirm.php'); ?>
<!DOCTYPE html>
<html lang="en">

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
	
	</style>
	
	

  </head>

  <body>
  
    <!-- Navigation -->
    <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="logo.png" style="height:60px;width:150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="E:/Users/aashi/Desktop/mini-project/home/home.html">Home
                <!--<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="E:/Users/aashi/Desktop/mini-project/Booking/booking.html">Reservation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="E:/Users/aashi/Desktop/mini-project/registration/registration.html">Accomodation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="E:/Users/aashi/Desktop/mini-project/contact%20us/contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>-->
	
	
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
              <a class="nav-link" href="registeration1.php"><strong>Book a room!</strong></a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link" href="registeration1.php?logout='1'" ><strong>Logout</strong></a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
	<?php endif ?>
	

     <div class="top-content">
          <div class="container">
          
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text">
           
          </div>
        </div>
		<?php
		$today=date('Y-m-d');
		$d=strtotime('+4 Months');
		$m=date('Y-m-d',$d);
		?>
		<div class="hotel_reserve_box">
         <h3 style="color:white"> Hotel Reservation Form </h3><br>
         <form style="color:white" method="post" action="registeration.php">
		 
		 <!--Validation errors-->
		 <?php include('errors.php'); ?>
             <div class="form-group">
                 <label>Room/Suite Type</label>
                 <select name="roomtype" class="form-control" id="room_type" value="<?php echo $roomtype; ?>">
                     <option value="0" selected>Select Room/Suite </option>
                     <option value="singlenonac"> Single Non-AC </option>
                     <option value="singleac"> Single AC </option>
                     <option value="doublenonac"> Double Non-AC </option>
                     <option value="doubleac"> Double AC  </option>
                     <option value="luxurynonac"> Luxury Non-AC </option>
                     <option value="luxuryac"> Luxury AC </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of rooms/suite</label>
				 <input type="number" name="noofrooms" value="<?php echo $noofrooms; ?>">
                
             </div>
             <div class="form-group">
                 <label>Number of adults</label>
				 <input type="number" name="adults" value="<?php echo $adults; ?>">
                              </div>
             <div class="form-group">
                 <label>Number of children</label>
				 <input type="number" name="children" value="<?php echo $children; ?>">
             </div>
			 <br>
			 <div class="form group">
				<label>Check-In Date</label>
				<input type="date" name="check-in" min=<?php echo $today; ?> max=<?php echo $m; ?> value="<?php echo $check-in; ?>"> <pre>     </pre>
		
				<label>Check-Out Date</label>
				<input type="date" name="check-out" min=<?php echo $today; ?> max=<?php echo $m; ?> value="<?php echo $check-out; ?>">
			</div>
			<br>
				
             <div class="form-group">
                 <label>Restaurant facilities?</label>
                 <select name="facilities" class="form-control" id="res_facilities" value="<?php echo $facilities; ?>">
                     <option value="0" selected> Do you want restaurant facilities? </option>
                     <option value="Yes"> Yes </option>
                     <option value="No"> No </option>
                 </select>
             </div><br>
             
			 <button type="submit" name="available">Check Availability!</button>
			 <!--<a href="pay.php"><input type="button" name="booknow" value="booknow"></a>-->
			 
         </form>
     </div>

                
            </div>
        </div> 
		<br>


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
