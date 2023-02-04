<?php
	
	/*$roomtype=$_SESSION["typeofroom"];
	$noofrooms=$_SESSION["numberofrooms"];
	$adults=$_SESSION["numberofadults"];
	$children=$_SESSION["numberofchildren"];
	$checkin=$_SESSION["checkin"];
	$checkout=$_SESSION["checkout"];
	//$facilities=$_SESSION["facilities"];
	$guesttype=$_SESSION["guesttype"];
	$firstname=$_SESSION["firstname"];
	$lastname=$_SESSION["lastname"];
	$email=$_SESSION["email"];
	$mobile=$_SESSION["mobile"];
	$address=$_SESSION["address"];
	$city=$_SESSION["city"];
	$pin=$_SESSION["pin"];
	$country=$_SESSION["country"];*/
	
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
		
	//if the pay button is clicked
	if(isset($_POST['pay']))
	{
		$roomtype = mysqli_real_escape_string($db,$_SESSION["typeofroom"]);
		$noofrooms = mysqli_real_escape_string($db,$_SESSION["numberofrooms"]);
		$adults = mysqli_real_escape_string($db,$_SESSION["numberofadults"]);
		$children = mysqli_real_escape_string($db,$_SESSION["numberofchildren"]);
		$checkout = mysqli_real_escape_string($db,$_SESSION["checkout"]);
		$checkin = mysqli_real_escape_string($db,$_SESSION["checkin"]);
		$guesttype = mysqli_real_escape_string($db,$_SESSION["guesttype"]);
		$firstname = mysqli_real_escape_string($db,$_SESSION["firstname"]);
		$lastname = mysqli_real_escape_string($db,$_SESSION["lastname"]);
		$email = mysqli_real_escape_string($db,$_SESSION["email"]);
		$mobile = mysqli_real_escape_string($db,$_SESSION["mobile"]);
		$address = mysqli_real_escape_string($db,$_SESSION["address"]);
		$city = mysqli_real_escape_string($db,$_SESSION["city"]);
		
		$gym = mysqli_real_escape_string($db,$_SESSION["gym"]);
		$pool = mysqli_real_escape_string($db,$_SESSION["pool"]);
		$breakfast = mysqli_real_escape_string($db,$_SESSION["breakfast"]);
		$lunch = mysqli_real_escape_string($db,$_SESSION["lunch"]);
		$dinner = mysqli_real_escape_string($db,$_SESSION["dinner"]);
		$minibar = mysqli_real_escape_string($db,$_SESSION["minibar"]);
		$cusername = mysqli_real_escape_string($db, $_SESSION['cusername']);
		
		/*$sql = "select CID from customers where CUsername='$cusername'";
		$result=mysqli_query($sql,$db);
		$row=mysqli_fetch_assoc($result);
		$cid=$row['CID'];*/
		if($cusername=='anushka' || $cusername=='ananya' || $cusername=='anshika')
			$cusername='admin';
		$sql = "INSERT INTO personaldetails (GuestType,FirstName,LastName,Email,Mobile,Address,City,CUsername) values ('$guesttype','$firstname','$lastname','$email','$mobile','$address','$city','$cusername')";
		mysqli_query($db,$sql);
		$sql="SELECT ID FROM personaldetails where Mobile='$mobile'";
		$result=mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result);
		$idd=$row['ID'];
		$_SESSION['finalid']=$idd;
		//$sql="update roomdetails set RoomType='$roomtype',NumberOfRooms='$noofrooms',CheckIn='$checkin',CheckOut='$checkout',Adults='$adults',Children='$children' where ID=";
		$sql = "INSERT INTO roomdetails (ID,RoomType,NumberOfRooms,CheckIn,CheckOut,Adults,Children) values ('$idd','$roomtype','$noofrooms','$checkin','$checkout','$adults','$children')";
		mysqli_query($db,$sql);
		$sql = "INSERT INTO facilities (ID,Gym,Pool,BreakfastTea,Lunch,Dinner,Minibar) values ('$idd','$gym','$pool','$breakfast','$lunch','$dinner','$minibar')";
		mysqli_query($db,$sql);
		
		if($roomtype=="singlenonac")
		{
			$p=101;
			$rate=10000;
		}
		if($roomtype=="singleac")
		{
			$p=201;
			$rate=15000;
		}
		if($roomtype=="doublenonac")
		{
			$p=301;
			$rate=20000;
		}
		if($roomtype=="doubleac")
		{
			$p=401;
			$rate=25000;
		}
		if($roomtype=="luxurynonac")
		{
			$p=501;
			$rate=30000;
		}
		if($roomtype=="luxuryac")
		{
			$p=601;
			$rate=35000;
		}
		$allotted=0;
		for($i=$p; $i<=($p + 5) && $allotted!=$noofrooms; $i++)
		{
			$cc=0;
			$sql="select COUNT(*) from rooms where RoomNumber=$i";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);
			$counter=$row['COUNT(*)'];
			$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
			$result=mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result))
			{
				$chin=$row['Checkin'];
				$chout=$row['Checkout'];
			
				if(strtotime($checkin)<strtotime($chin) && strtotime($checkout)<strtotime($chin) && strtotime($checkout)>strtotime($checkin))
				{
					$cc++;
					continue;
				}
				if(strtotime($checkin)>strtotime($chout) && strtotime($checkout)>strtotime($chout) && strtotime($checkout)>strtotime($checkin))
				{
					$cc++;
					continue;
				}
				if(strtotime($chout)==NULL && strtotime($chin)==NULL && strtotime($checkout)>strtotime($checkin))
				{
					$cc++;
					continue;
				}
			}
			if($cc==$counter)
			{
				$allotted++;
				$sql="insert into rooms (RoomNumber,RoomType,Checkin,Checkout,Rate,ID) values ('$i','$roomtype','$checkin','$checkout','$rate','$idd')";
				mysqli_query($db,$sql);
			}
			//$p++;
		}
	}
	
	
		
?>