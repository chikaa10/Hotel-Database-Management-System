<?php
		//session_start();
	$db = mysqli_connect("localhost","root","","registration");
	if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
		echo "<br>connected";
		$cnt=0;
		//$price="--";
		//$_SESSION["price"]=$price;
	if(isset($_POST['available']))
	{
		$cnt=0;
		$roomtype = mysqli_real_escape_string($db,$_POST['roomtype']);
		$noofrooms = mysqli_real_escape_string($db,$_POST['noofrooms']);
		$adults = mysqli_real_escape_string($db,$_POST['adults']);
		$children = mysqli_real_escape_string($db,$_POST['children']);
		$checkout = mysqli_real_escape_string($db,$_POST['check-out']);
		$checkin = mysqli_real_escape_string($db,$_POST['check-in']);
		$facilities = mysqli_real_escape_string($db,$_POST['facilities']);
		if(strtotime($checkout)>strtotime($checkin))
		{
		switch($roomtype)
		{
			case "singlenonac":
			for($i=101; $i<=105; $i++)
			{
				$cc=0;			
				$sql="select COUNT(*) from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				$row=mysqli_fetch_assoc($result);
				$counter=$row['COUNT(*)'];
				$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while ($row = mysqli_fetch_assoc($result))
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
					$cnt++;
			}
			echo "<br>";
			echo $cnt;
			echo " Single Non AC rooms are available";
			break;
		
		
		case "singleac":
		
			$cnt=0;
			for($i=201; $i<=205; $i++)
			{
				$cc=0;
				$sql="select COUNT(*) from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				$row=mysqli_fetch_assoc($result);
				$counter=$row['COUNT(*)'];
				$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while ($row = mysqli_fetch_assoc($result))
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
					$cnt++;
			}
			echo "<br>";
			echo $cnt;
			echo " Single AC rooms are available";
			break;
		
		case "doublenonac":
		
			$cnt=0;
			for($i=301; $i<=305; $i++)
			{
				$cc=0;
				$sql="select COUNT(*) from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				$row=mysqli_fetch_assoc($result);
				$counter=$row['COUNT(*)'];
				$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while ($row = mysqli_fetch_assoc($result))
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
					$cnt++;
			}
			echo "<br>";
			echo $cnt;
			echo " Double Non AC rooms are available";
			break;
		
		case "doubleac":
		
			$cnt=0;
			for($i=401; $i<=405; $i++)
			{
				$cc=0;
				$sql="select COUNT(*) from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				$row=mysqli_fetch_assoc($result);
				$counter=$row['COUNT(*)'];
				$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while ($row = mysqli_fetch_assoc($result))
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
					$cnt++;
			}
			echo "<br>";
			echo $cnt;
			echo " Double AC rooms are available";
			break;
		
		case "luxurynonac":
		
			$cnt=0;
			for($i=501; $i<=505; $i++)
			{
				$cc=0;
				$sql="select COUNT(*) from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				$row=mysqli_fetch_assoc($result);
				$counter=$row['COUNT(*)'];
				$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while ($row = mysqli_fetch_assoc($result))
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
					$cnt++;
			}
			echo "<br>";
			echo $cnt;
			echo " Luxury Non AC rooms are available";
			break;
		
		case "luxuryac":
		
			$cnt=0;
			for($i=601; $i<=605; $i++)
			{
				$cc=0;
				$sql="select COUNT(*) from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				$row=mysqli_fetch_assoc($result);
				$counter=$row['COUNT(*)'];
				$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while ($row = mysqli_fetch_assoc($result))
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
					$cnt++;
			}
			echo "<br>";
			echo $cnt;
			echo " Luxury AC rooms are available";
			break;
		}
		if($cnt>=$noofrooms)
			header("Location:booking.php");
		else
			header("Location:nobook.php");
		$_SESSION["cntrooms"] = $cnt;
		$_SESSION["typeofroom"] = $roomtype;
		$_SESSION["numberofrooms"] = $noofrooms;
		$_SESSION["numberofadults"] = $adults;
		$_SESSION["numberofchildren"] = $children;
		$_SESSION["checkin"] = $checkin;
		$_SESSION["checkout"] = $checkout;
		$_SESSION["facilities"] = $facilities;
		}
		else
		{
			header ("Location:incorrect.php");
		}
	}
	
	
?>