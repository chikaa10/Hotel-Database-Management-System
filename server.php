<?php
	//session_start();
	$roomtype="";
	$noofrooms=0;
	$adults=0;
	$children=0;

	$facilities="";
	$errors=array();
	
	//connect to the database
	$db = mysqli_connect("localhost","root","","registration");
	
	/*if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
	}
		else
		{
		echo "hello";
		}*/
		
		if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
		echo "<br>connected";
	$cnt=0;
		
	//if the booknow button is clicked
	if(isset($_POST['booknow']))
	{
		$roomtype = mysqli_real_escape_string($db,$_POST['roomtype']);
		$noofrooms = mysqli_real_escape_string($db,$_POST['noofrooms']);
		$adults = mysqli_real_escape_string($db,$_POST['adults']);
		$children = mysqli_real_escape_string($db,$_POST['children']);
		$checkout = mysqli_real_escape_string($db,$_POST['check-out']);
		$checkin = mysqli_real_escape_string($db,$_POST['check-in']);
		$facilities = mysqli_real_escape_string($db,$_POST['facilities']);
	
	//validation
	if(empty($roomtype)){
		array_push($errors,"Please select the type of room");
	}
	if(empty($noofrooms)){
		array_push($errors,"Please select the number of rooms");
	}
	if(empty($adults)){
		array_push($errors,"Please select the number of adults");
	}
	if(empty($children)){
		array_push($errors,"Please select the number of children");
	}
	if(empty($checkin)){
		array_push($errors,"Please select the checkin date");
	}
	if(empty($checkout)){
		array_push($errors,"Please select the checkout date");
	}
	if(empty($facilities)){
		array_push($errors,"Please select if you want any facility or not");
	}
	
	//if there are no errors insert data into database
	if(count($errors)==0)
	{
		$sql = "INSERT INTO BOOK (RoomType,NoOfRooms,Adults,Children,Checkin,Checkout,Facilities) VALUES('$roomtype','$noofrooms','$adults','$children','$checkin','$checkout','$facilities')";
		mysqli_query($db,$sql);
	}
	}
	
		
?>