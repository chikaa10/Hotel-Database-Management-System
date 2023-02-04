<?php

	$db = mysqli_connect("localhost","root","","registration");
	if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
		echo "<br>Cancellation page connected";
		if (isset($_POST['cancel']))
		{
			$cusername = mysqli_real_escape_string($db, $_SESSION['cusername']);
			$sql="select ID from personaldetails where CUsername='$cusername'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);
			$id4=$row['ID'];
			
			$sql="select Checkin,Checkout from rooms where ID='$id4'";
			$result=mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($result))
			{
				$ch=$row['Checkin'];
			}
			
			$d=strtotime("+3 Days");
			$check=date("Y-m-d", $d);
			if(strtotime($check)>=strtotime($check))
			{
				$sql="update rooms set Checkin = NULL, Checkout = NULL,ID=NULL where ID='$id4'";
				mysqli_query($db,$sql);
				$sql="delete from roomdetails where ID='$id4'";
				mysqli_query($db,$sql);
				/*$sql="delete from payment where ID='$id4'";
				mysqli_query($db,$sql);
				$sql="delete from facilities where ID='$id4'";
				mysqli_query($db,$sql);				
				$sql="delete from personaldetails where ID='$id4'";
				mysqli_query($db,$sql);*/
				echo "<br>";
				echo "Booking successfully cancelled!";
				header('location: success.php');
			}
			
			else
			{
				echo "<br>";
				echo "Sorry your booking cannot be cancelled";
				header('location: unsuccess.php');
			}
			
			$_SESSION['flag']=$flag;
			
		}

?>