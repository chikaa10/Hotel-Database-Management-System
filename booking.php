<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Booking</title>
  
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
  
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
  </head>
  <body>
  
  <form>
  <br><br><br><br><br><br>
  <h3> The selected <?php session_start(); echo $_SESSION["cntrooms"]?> number of rooms are available.</h3>
  <h3>Do you want to book now?</h3>
  <br>
  <a href="guest.php"><input type="button" class="button"name="booknow" value="Book Now!"></a>
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