<?php
session_start();
	$db = mysqli_connect("localhost","root","","registration");
	if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
		echo "<br>payment page connected";
		
	if(isset($_POST['confirmpay']))
	{
		//echo "hfiosdhfoisdhf";
		$paymode = mysqli_real_escape_string($db,$_POST['paymode']);	
		$cardname = mysqli_real_escape_string($db,$_POST['cardname']);
		$price = $_SESSION['price'];
		$mobile = $_SESSION['mobile'];
		
		$sql="SELECT ID FROM personaldetails where Mobile='$mobile'";
		$result=mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result);
		$idd=$row['ID'];
		
		$sql="INSERT INTO payment (ID,PayMode,Name,Price) values ('$idd','$paymode','$cardname','$price')";
		mysqli_query($db,$sql);
		
		//session_destroy();
		
	}

?>