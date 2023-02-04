<?php
//session_start();
	$firstname="";
	$lastname="";
	$email="xyz@example.com";
	$mobile="";
	$address="";
	$city="";
	$pin="";
	$country="";
	$gym="no";
	$pool="no";
	$breakfast="no";
	$lunch="no";
	$dinner="no";
	$minibar="no";
	$db = mysqli_connect("localhost","root","","registration");
		
	if(mysqli_connect_errno())
    {
		echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
	echo "<br>it is connected";
	//$checkin=;
	//$checkout=$_SESSION["checkout"];
	
	if(isset($_POST['calculate']))
	{
		$i=0;
		$guesttype = mysqli_real_escape_string($db,$_POST['gtype']);
		$firstname = mysqli_real_escape_string($db,$_POST['fname']);
		$lastname = mysqli_real_escape_string($db,$_POST['lname']);
		$email = mysqli_real_escape_string($db,$_POST['mail']);
		$mobile = mysqli_real_escape_string($db,$_POST['mobno']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$city = mysqli_real_escape_string($db,$_POST['city']);
		
		//$sql = "INSERT INTO personaldetails (GuestType,FirstName,LastName,Email,Mobile,Address,City,PIN,Country) values ('$guesttype','$firstname','$lastname','$email','$mobile','$address','$city','$pin','$country')";
		//mysqli_query($db,$sql);
		$price=0;
		$date1=date_create($_SESSION["checkin"]);
		$date2=date_create($_SESSION["checkout"]);
		$diff=date_diff($date1,$date2);
		//echo "<br>The number of days are ";
		//echo $diff->format("%a");
		$d=$diff->format("%a");
		//echo "<br>";
		//echo $d;
		if(!empty($_POST['check_list'])) {
		foreach($_POST['check_list'] as $value) {
			//$_SESSION["$i"]=$check;
			//echo $_SESSION["$i"];
			if($value=="gym")
			{
				$price = $price + 500;
				$gym="yes";
			}
			if($value=="pool")
			{
				$price = $price + 500;
				$pool="yes";
			}
			if($value=="breakfast")
			{
				$price = $price + 700;
				$breakfast="yes";
			}
			if($value=="lunch")
			{
				$price = $price + 1000;
				$lunch="yes";
			}
			if($value=="dinner")
			{
				$price = $price + 1300;
				$dinner="yes";
			}
			if($value=="minibar")
			{
				$price = $price + 3500;
				$minibar="yes";
			}
		}}
		
		switch($_SESSION["typeofroom"])
		{
			case "singlenonac":
			$rate=10000;
			$price=($price)+($rate);
			$price=($price)*($d)*($_SESSION["numberofrooms"]);
			$gst=12;
			$p=(0.12)*($price);
			$price=($price)+($p);
			break;
			
			case "singleac":
			$rate=15000;
			$price=($price)+($rate);
			$price=($price)*($d)*($_SESSION["numberofrooms"]);
			$gst=18;
			$p=(0.18)*($price);
			$price=($price)+($p);
			break;
			
			case "doublenonac":
			$rate=20000;
			$price=($price)+($rate);
			$price=($price)*($d)*($_SESSION["numberofrooms"]);
			$gst=12;
			$p=(0.12)*($price);
			$price=($price)+($p);
			break;
			
			case "doubleac":
			$rate=25000;
			$price=($price)+($rate);
			$price=($price)*($d)*($_SESSION["numberofrooms"]);
			$gst=18;
			$p=(0.18)*($price);
			$price=($price)+($p);
			break;
			
			case "luxurynonac":
			$rate=30000;
			$price=($price)+($rate);
			$price=($price)*($d)*($_SESSION["numberofrooms"]);
			$gst=12;
			$p=(0.12)*($price);
			$price=($price)+($p);
			break;
			
			case "luxuryac":
			$rate=35000;
			$price=($price)+($rate);
			$price=($price)*($d)*($_SESSION["numberofrooms"]);
			$gst=18;
			$p=(0.18)*($price);
			$price=($price)+($p);
			break;
			
		}
		$_SESSION['price']=$price;
		$_SESSION["gym"]=$gym;
		$_SESSION["pool"]=$pool;
		$_SESSION["breakfast"]=$breakfast;
		$_SESSION["lunch"]=$lunch;
		$_SESSION["dinner"]=$dinner;
		$_SESSION["minibar"]=$minibar;
		
		$_SESSION["guesttype"]=$guesttype;
		$_SESSION["firstname"]=$firstname;
		$_SESSION["lastname"]=$lastname;
		$_SESSION["email"]=$email;
		$_SESSION['mobile']=$mobile;
		$_SESSION["address"]=$address;
		$_SESSION["city"]=$city;
		
	}

?>