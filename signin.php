<?php
session_start();
$username="";
$passwd="";

	$db = mysqli_connect("localhost","root","","registration");
	if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
		echo "<br>Admin login page connected";
		
		if (isset($_POST['adminlogin'])) 
		{
			$username = mysqli_real_escape_string($db, $_POST['username']);
			$passwd = mysqli_real_escape_string($db, $_POST['passwd']);
			$passwd = md5($passwd);
			$query = "SELECT * FROM adminusers WHERE Username='$username' AND Password='$passwd'";
			$results = mysqli_query($db, $query);
	
			if (mysqli_num_rows($results) == 1) 
			{
				$_SESSION["cusername"] = $username;
				$_SESSION["success"] = "You are now logged in";
				header('location: adminindex.php');
			}
			else 
			{
				echo "Wrong username/password combination";
			}
			
		}
		
		if (isset($_GET['logout'])) 
		{
			session_destroy();
			unset($_SESSION["cusername"]);
			header('location: home1.php');
		}

?>