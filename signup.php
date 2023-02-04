<?php
session_start();
$cusername="";
$cpasswd1="";
$cpasswd2="";
$cemail="";

	$db = mysqli_connect("localhost","root","","registration");
	if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
		//echo "<br>Customer login page connected";
		
	if (isset($_POST['cregister'])) 
	{
		$cusername = mysqli_real_escape_string($db, $_POST['cusername']);
		$cemail = mysqli_real_escape_string($db, $_POST['cemail']);
		$cpasswd1 = mysqli_real_escape_string($db, $_POST['cpasswd1']);
		$cpasswd2 = mysqli_real_escape_string($db, $_POST['cpasswd2']);
		
		if($cpasswd1!=$cpasswd2)
		{
			header('location: customersignup.php');
			echo "The passwords do not match";
		}
		else
		{
		
		$password=md5($cpasswd1);
		$query = "INSERT INTO customers (CUsername, CEmail, CPassword) VALUES('$cusername', '$cemail', '$password')";
		mysqli_query($db, $query);

		$_SESSION['cusername'] = $cusername;
		$_SESSION['success'] = "You are now logged in";
		header('location: home.php');
		}
		
	}
	
	if (isset($_POST['logincustomer'])) 
	{
		$cusername = mysqli_real_escape_string($db, $_POST['username']);
		$cpasswd1 = mysqli_real_escape_string($db, $_POST['passwd']);
		$password = md5($cpasswd1);
		$query = "SELECT * FROM customers WHERE CUsername='$cusername' AND CPassword='$password'";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
			$_SESSION['cusername'] = $cusername;
			$_SESSION['success'] = "You are now logged in";
			if($cusername=='admin')
				header('location: adminindex.php');
			else
				header('location: home.php');
		}
		else 
		{
			echo "Wrong username/password combination";
		}
			
	}
	
	if(isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['cusername']);
		header('location: home1.php');
	}
?>		