<?php include ('signup.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up for Customer!</title>
	
	<style>
		
		button[type=submit]  
		{
			background-color:black;
			color:white;
			width: 150px;
			padding: 12px 20px;   
		}
		fieldset {

margin-right: 400px;

margin-left: 400px;
padding-top: 30px;
border-color:black;


}
body{
	background-image:url(back1.jpg);
}
		
	</style>
</head>
<body>
<h1 style= "text-align:center;">Register</h1>

<form method="post" action="signup.php" style="text-align:center;">
<fieldset>
<label><strong>Username:</strong></label><br>
<input type="text" name="cusername"><br><br>

<label><strong>Email:</strong></label><br>
<input type="email" name="cemail"><br><br>

<label><strong>Password:</strong></label><br>
<input type="password" name="cpasswd1"><br><br>

<label><strong>Confirm Password:</strong></label><br>
<input type="password" name="cpasswd2"><br><br>

<button type="submit" name="cregister"><strong>Register!</strong></button><br>
<p><strong>Already a member? <a href="customerlogin.php">Sign in</a></strong></p><br>
</fieldset>
</form>

</body>
</html>