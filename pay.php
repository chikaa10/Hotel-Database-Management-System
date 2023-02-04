
<?php include('signup.php'); ?>
<?php include('check.php'); ?>
<?php include('finalbook.php'); ?>

<?php include('cost.php'); ?>


<!DOCTYPE html>
<html lang="en">

  <head>

  <script>
function validate()
{
	cname=document.getElementById("cname").value;
	cnumber=document.getElementById("cardnumber").value;
    cvvno=document.getElementById("cvv").value;

	if(cname=="" || cardnumber=="" || cvvno=="")
	{
alert("Fields should not be empty");
return false;
	}
if(!cname.match(/^[A-Za-z]+$/))
{
alert("Name should contain only characters");
return false;
}
if(!cnumber.match(/^\d{16}$/))	
	{
		alert("Enter a valid card number");
		return false;
	}
	if(!cvvno.match(/^\d{3}$/))
		{
			alert("Enter a valid CVV Number");
			return false;
			
		}
		alert("Valid");
		return false;
}
</script>
  
  <style> 
  .field_set
  {

    border-color: #5D6D7E;
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

    <title>Payment</title>

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
              <a class="nav-link" href="home.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="accomodation.html">Reservation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registration.html">Accomodation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
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
              <a class="nav-link" href="pay.php?logout='1'" style="color: red;">Logout</a>
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

    

<form method="post" action="confirmed.php" name="myForm" onsubmit="return validate()">
<fieldset>
<h1>PAYMENT DETAILS</h1>
<strong>Mode of Payment</strong><br>
<select id="mode" name="paymode" value="<?php echo $paymode; ?>">
<option value="0" selected>Select</option>
<option value="VISA">VISA</option>
<option value="Master Card">Master Card</option>
<option value="American Express">American Express</option>
<option value="Rupay">Rupay</option>
</select>
<br>

<br>

<h2>Card Details:</h2><br>
<b></b>
<h5>NAME ON CARD</h5>
	<input type="text" name="cardname" >
<h5>CARD NUMBER</h5>													
	<input type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
<br>
<h5>EXPIRATION</h5>
	
			<input type="number" class="text_box" type="text" value="6" min="1" />	
		<br>
		
			<input type="number" class="text_box" type="text" value="2020" min="1" />	
																
	
<h5>CVV NUMBER</h5>													
	<input type="text" value="xxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxx';}" required="">
<!--<br><br><b> Your Booking: </b>
<br>
<strong>Expected time of arrival (optional)</strong><br>
<input type="time" name="in-time">
<br>
<strong>Special Request (optional)</strong><br>
<input type="text" name="request">-->

<br>
<br>
<strong>*The hotel will keep your booking till 11:00am on the day of arrival.*</strong><br><br>
<button type="submit" name="confirmpay">Confirm and Pay</button>

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
