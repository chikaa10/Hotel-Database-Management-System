<?php

	$db = mysqli_connect("localhost","root","","registration");
	if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
		echo "<br>Customer login page connected";
		if (isset($_SESSION['cusername']))
		{
			$cusername = mysqli_real_escape_string($db, $_SESSION['cusername']);
			$query="SELECT * FROM personaldetails where CUsername='$cusername'";
			$result=mysqli_query($db,$query);
			$row = mysqli_fetch_array($result);
			$_SESSION['id1']=$row['ID'];
			$_SESSION['gtype1']=$row['GuestType'];
			$_SESSION['fname1']=$row['FirstName'];
			$_SESSION['lname1']=$row['LastName'];
			$_SESSION['email1']=$row['Email'];
			$_SESSION['mobile1']=$row['Mobile'];
			$_SESSION['address1']=$row['Address'];
			$_SESSION['city1']=$row['City'];

			
		}

?>