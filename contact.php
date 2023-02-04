<?php include('contactus.php'); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
	<style>
	body,form
	{
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
          <h2 class="display-4 text-white">Where luxury meets comfort</h2>
        </div>
      </div>
    </header>

    <!--<section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img2.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Pools</h2>
              <p>A lovely pool located in a quiet and private location and available to guests from May to October; with a wide solarium with lounge chairs, offers a relaxing and toning break during your visit to the beautiful countryside.
Staying here means getting away from the city's often chaotic traffic; this lets you spend more time relaxing and perhaps ending your day with a toning bath in the lovely pool.</p>
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
              <h2 class="display-4">Rooms</h2>
              <p>Sun and Sand Hotel & Jacuzzi Suites features 20 spacious guest rooms and bathrooms that combine comfort, style, elegance and the latest technology.

These details transform hotel into an ideal place; both for leisure and business travellers. The soothing palette of warm colours along with the branded furniture, combine the classical with the modern and create a beautiful and cosy atmosphere.</p>
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
              <h2 class="display-4">Restaurant</h2>
              <p>Our 5 star outstanding restaurant and 2 bars await to tempt our guests with international culinary delights. Sumptuous buffets are available in the Restaurant for breakfast and dinner.

The Greek near the beach offers local cuisine for lunch and dinner and the «Sun and Sand Bar» Restaurant promises fine dining with our chefs creating demanding gourmet dishes in an open kitchen environment.</p>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <div class="container">
      <div class="header clearfix">
        <h2>Contact Us Page</h2>
      </div>

      <div class="jumbotron">
        <h3>Email</h3>
        <p>Fillout the form below or email us at <a href="mailto:#">sunandsandsupport@gmail.com</a></p>
        <p><strong>* Required fields</strong></p>
        <hr />
        <form method="post" action="contact.php">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="email"><strong>* Your Email</strong></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your contact email" required>
              </div>
              <div class="form-group">
                <label for="orderNumber">Your Booking ID (Your complaints if used our hotel rooms/facilities?)</label>
                <input type="text" class="form-control" id="orderNumber" name="orderNumber" placeholder="Enter your order number">
              </div>
              <div class="form-group">
                <label for="questionTopic"><strong>* Question Topic</strong></label>
                <select class="form-control" id="questionTopic" name="questionTopic" required>
                  <option value="Order and Website Inquiries" selected >Order and Website Inquiries</option>
                  <option value="Booking Cancellation">Booking Cancellation</option>
                  <option value="Service not adequate">Service not adequate</option>
                  <option value="Booking queries">Booking queries</option>
                  <option value="Other">Other(Please specify in detail in comments)</option>
                </select>
              </div>
            </div><!-- /col-md-6 -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="name"><strong>* Your Name</strong></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <label for="phoneNumber">Your phone number</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your telephone number">
              </div>            
            </div><!-- /col-md-6 -->
          </div><!-- /row -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="comments"><strong>* Your Comments</strong></label>
                <textarea class="form-control" id="comments" name="comments" rows="3" required></textarea>
              </div>              
              
              <button type="submit" id="submit" name="submit" class="btn btn-primary">SUBMIT EMAIL</button>              
            </div><!-- /col-md-12 -->
          </div><!-- /row -->
        </form>
      </div>
      </div>
      <!--<footer class="footer">
        <p>© Company 2017</p>
      </footer>
    </div>--><!-- /containter --> 
    
    <!-- js includes -->
    <script src='https://www.google.com/recaptcha/api.js'></script>  

    <script>
    function validateForm(){
  var form = {}; //JavaScript doesn't have associate arrays, thus use Objects instead;
  
  // select only those form fields that are marked required and are visible to the user
  var reqformFields = $('input,textarea,select').filter('[required]:visible').serializeArray();

  //Check each required filled and alert the user if necessary
  for(i=0; i<reqformFields.length; i++){
    if(reqformFields[i].value === ""){
      alert(reqformFields[i].name + " is empty");
      //set focus on the element;
      $("#" + reqformFields[i].name).focus();
      return false;
    }    
  }
  
  //Check to see if email is of a valid format
  if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,9})+$/.test($('input[name="email"]').val())){
    alert("You have entered an invalid email address!");
    $("#email").focus();
    return false;
  }
  
  // Check Captcha
  var response = grecaptcha.getResponse();
  if(response == '' || response.length <= 0 ){
    alert("Please fill the captcha!");
    return false;
  }
  
  return true;
}

// Handle form submit
$("#submit").click(function(e){
    e.preventDefault();
   
    if(validateForm()){
      //query endpoint to send a form;
      alert("All good!");
    }
});
</script>



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
