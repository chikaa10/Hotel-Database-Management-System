<?php include('signin.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login for Admin!</title>
	
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
<h1 style= "text-align:center;">Sign in</h1>

<form method="post" action="login.php" style= "text-align:center;">
<fieldset>
<label><strong>Username:</strong></label><br>
<input type="text" name="username" required><br><br>

<label><strong>Password:</strong></label><br>
<input type="password" name="passwd" required><br><br>

<button type="submit" name="adminlogin"><strong>Login!</strong></button><br>
<p><strong>Not yet a member? Contact the hotel authorities. </strong></p>
</fieldset>
</form>

</body>
</html>