<?php include('signup.php'); ?>
<?php include('check.php'); ?>
<?php include('cost.php'); ?>
<?php include('finalbook.php'); ?>


<!DOCTYPE html>
<html lang="en">

  <head>
  
  <script>
function validateForm()
{
	gfname=document.getElementById("fname").value;
	glname=document.getElementById("lname").value;
    gmob=document.getElementById("mno").value;
    gcity=document.getElementById("city").value;
if(!gfname.match(/^[A-Za-z]+$/) || !glname.match(/^[A-Za-z]+$/))
{
alert("Name should contain only characters");
return false;
}
	if(gfname=="" || glname=="" || gmob=="" || gcity=="" || gpin=="" || gcountry=="")
	{
alert("Fields should not be empty");
return false;
	}

if(!gmob.match(/^\d{10}$/))	
	{
		alert("Enter a valid Mobile number");
		return false;
	}
	if(!gcity.match(/^[A-Za-z]+$/))
 {
alert("Enter a valid city name");
return false;
}
/*else if(!gpin.match(/^\d{6}$/))
		{
			alert("Enter a valid Pincode!");
			return false;
			
		}

 else if(!gcountry.match(/^[A-Za-z]+$/))
 {
alert("Enter a valid country name");
return false;
}*/

		alert("Valid");
		return false;
}
</script>

  <style> 
  fieldset
  {

    border-color: white;
    border-style: solid;
  }
   form
 {
 background-image: url("hello.jpg");
 color: white;
 text-align: center;
 border-color: white;
 border-style: solid;
 padding: 20px 20px;
 }
  </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GUEST DETAILS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">

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
                <span class="sr-only">(current)</span>
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
              <a class="nav-link" href="guest.php?logout='1'" style="color: red;">Logout</a>
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

       	


<form method="post" action="summary.php" name="myForm" onsubmit="return validateForm()">
<fieldset>
<h1>GUEST DETAILS</h1>
<strong>Guest Type</strong><br>
<select id="type" name="gtype" value="<?php echo $guesttype; ?>">
<option value="0">Select</option>
<option value="business">Business</option>
<option value="family">Family</option>
</select>
<br>

<br>
<strong>First Name</strong><br>
<input type="text" name="fname" id="fname" value="<?php echo $firstname; ?>">
<br>
<br>
<strong>Last Name</strong><br>
<input type="text" name="lname" id="lname" value="<?php echo $lastname; ?>">
<br>
<br>
<strong>E-mail ID</strong><br>
<input type="email" name="mail" value="<?php echo $email; ?>">
<br>
<br>
<strong>Mobile Number</strong><br>
<input type="text" name="mobno" id="mno" value="<?php echo $mobile; ?>">
<br>
<br>
<strong>Address</strong><br>
<input type="text" name="address" value="<?php echo $address; ?>">
<br>
<br>
<strong>City</strong><br>
<input type="text" name="city" id="city" value="<?php echo $city; ?>">
<br>
<br>
                 <strong>Room/Suite Type: <?php echo $_SESSION["typeofroom"]; ?></strong>
                 <!--<select name="roomtype" class="form-control" id="room_type" value="<?php //echo $_SESSION["typeofroom"]; ?>">
                     <option value="0" selected>Select Room/Suite </option>
                     <option value="singlenonac"> Single Non-AC </option>
                     <option value="singleac"> Single AC </option>
                     <option value="doublenonac"> Double Non-AC </option>
                     <option value="doubleac"> Double AC  </option>
                     <option value="luxurynonac"> Luxury Non-AC </option>
                     <option value="luxuryac"> Luxury AC </option>
                 </select>-->
             <br>    
			 <br>
             
                 <strong>Number of rooms/suite: <?php echo $_SESSION["numberofrooms"]; ?></strong>
				 <!--<input type="number" name="noofrooms" >-->
				 <br>    
			 <br>
                 
                 <strong>Number of adults</strong>
				 <input type="number" name="adults" value="<?php echo $_SESSION["numberofadults"]; ?>">
             <br>
<br>			 
                 <strong>Number of children</strong>
				 <input type="number" name="children" value="<?php echo $_SESSION["numberofchildren"]; ?>" >
             <br>    
			 <br>
				<strong>Check-In Date : <?php echo $_SESSION["checkin"]; ?></strong>
				<!--<input type="date" name="check-in" value="<?php //echo $_SESSION["checkin"]; ?>">--> <pre>     </pre>
		
				<strong>Check-Out Date : <?php echo $_SESSION["checkout"]; ?></strong>
				<!--<input type="date" name="check-out" value="<?php //echo $_SESSION["checkout"]; ?>">-->
			<br>
			<br>
				
                 <strong>Restaurant facilities (Please check!)</strong><br>
				 <input type="checkbox" name="check_list[]" value="gym"><strong> Gym (Rs. 500 per day)</strong><br>
				 <input type="checkbox" name="check_list[]" value="pool"><strong> Pool (Rs. 500 per day)</strong><br>
				 <input type="checkbox" name="check_list[]" value="breakfast"><strong> Tea & Breakfast (Rs. 700 per day)</strong><br>
				 <input type="checkbox" name="check_list[]" value="lunch"><strong> Lunch (Rs. 1000 per day)</strong><br>
				 <input type="checkbox" name="check_list[]" value="dinner"><strong> Dinner (Rs. 1300 per day)</strong><br>
				 <input type="checkbox" name="check_list[]" value="minibar"><strong> Mini Bar in Room/Suite (Rs. 3500 per night)</strong><br>
			 <br>
			 <br>
<br>
<button type="submit" name="calculate">Total Cost</button>
<!--<br><br><strong>Rs. <?php echo $_SESSION["price"]; ?></strong>-->
<br><br>
<!--<a href="pay.php"><input type="button" name="pay" value="Pay Now!"></a>-->
<br>
<br>
<br>
<strong>*The hotel will keep your booking till 11:00am on the day of arrival.</strong>
</fieldset>
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
