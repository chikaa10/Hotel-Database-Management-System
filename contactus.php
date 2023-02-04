<?php
session_start();
$db = mysqli_connect("localhost","root","","registration");
		
	if(mysqli_connect_errno())
    {
		echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
	echo "<br>it is connected";
	
	if (isset($_POST["submit"]))
	{
		
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$bid = mysqli_real_escape_string($db, $_POST['orderNumber']);
		$qt = mysqli_real_escape_string($db, $_POST['questionTopic']);
		$phno = mysqli_real_escape_string($db, $_POST['phoneNumber']);
		$comments = mysqli_real_escape_string($db, $_POST['comments']);
		
		$sql="insert into contactus (Email,Name,BookingID,PhoneNumber,QuestionTopic,Comments) values ('$email','$name','$bid','$phno','$qt','$comments')";
		mysqli_query($db,$sql);
		
	}

?>