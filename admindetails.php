<?php

	$db = mysqli_connect("localhost","root","","registration");
		
	if(mysqli_connect_errno())
    {
		echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
	echo "<br>it is connected";
	
	if (isset($_SESSION["cusername"]))
	{
		$sql="select * from personaldetails where ID>=74";
		$result=mysqli_query($db,$sql);
		while($row5=mysqli_fetch_assoc($result))
		{
			$id5=$row5['ID'];
			$fn5=$row5['FirstName'];
			$ln5=$row5['LastName'];
			$user5=$row5['CUsername'];
			
			echo "<br>"; echo $id5; echo "<br>";
			echo $fn5; echo " "; echo $ln5; echo "<br>";
			echo $user5; echo "<br>";
			
			$query="select * from rooms where ID='$id5'";
			$res=mysqli_query($db,$query);
			while($row6=mysqli_fetch_assoc($res))
			{
				$checkin=$row6['Checkin'];
				$checkout=$row6['Checkout'];
				$roomnumber=$row6['RoomNumber'];
				$roomtype=$row6['RoomType'];
				
				echo $checkin; echo "<br>";
				echo $checkout; echo "<br>";
				echo $roomnumber; echo "<br>";
				echo $roomtype; echo "<br>";
			}
		}
	}

?>