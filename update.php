<?php

	$db = mysqli_connect("localhost","root","","registration");
		
	if(mysqli_connect_errno())
    {
		echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
	echo "<br>it is connected";
	
	for($i=101; $i<=105; $i++)
	{
		
		$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					$chin=$row['Checkin'];
					$chout=$row['Checkout'];
					$today=date("Y-m-d");
					if(strtotime($today)>=strtotime($chout) && strtotime($chout)!=NULL)
					{
						$sql="select ID from rooms where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						$res=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($res);
						$id2=$row2['ID'];
						$sql="SELECT * FROM personaldetails where ID='$id2'";
						$r=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($r);
						$gt=$row2['GuestType'];
						$fn=$row2['FirstName'];
						$ln=$row2['LastName'];
						$em=$row2['Email'];
						$mob=$row2['Mobile'];
						$add=$row2['Address'];
						$cit=$row2['City'];
						
						$user=$row2['CUsername'];
						$sql="update rooms set Checkin = NULL, Checkout = NULL,ID=NULL where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						mysqli_query($db,$sql);
					
						$sql="insert into previousbooking (BookingID,FirstName,LastName,Email,Mobile,Address,City,User) values ('$id2','$fn','$ln','$em','$mob','$add','$cit','$user')";
						mysqli_query($db,$sql);
						
						$sql="delete from roomdetails where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from payment where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from facilities where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from personaldetails where ID='$id2'";
						mysqli_query($db,$sql);
					
					}
				}
		
	}
	
	for($i=201; $i<=205; $i++)
	{
		
		$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					$chin=$row['Checkin'];
					$chout=$row['Checkout'];
					$today=date("Y-m-d");
					if(strtotime($today)>=strtotime($chout) && strtotime($chout)!=NULL)
					{
						$sql="select ID from rooms where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						$res=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($res);
						$id2=$row2['ID'];
						$sql="SELECT * FROM personaldetails where ID='$id2'";
						$r=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($r);
						$gt=$row2['GuestType'];
						$fn=$row2['FirstName'];
						$ln=$row2['LastName'];
						$em=$row2['Email'];
						$mob=$row2['Mobile'];
						$add=$row2['Address'];
						$cit=$row2['City'];
						
						$user=$row2['CUsername'];
						$sql="update rooms set Checkin = NULL, Checkout = NULL,ID=NULL where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						mysqli_query($db,$sql);
					
						$sql="insert into previousbooking (BookingID,FirstName,LastName,Email,Mobile,Address,City,User) values ('$id2','$fn','$ln','$em','$mob','$add','$cit','$user')";
						mysqli_query($db,$sql);
						
						$sql="delete from roomdetails where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from payment where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from facilities where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from personaldetails where ID='$id2'";
						mysqli_query($db,$sql);
					
					}
				}
		
	}
	
	for($i=301; $i<=305; $i++)
	{
		
		$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					$chin=$row['Checkin'];
					$chout=$row['Checkout'];
					$today=date("Y-m-d");
					if(strtotime($today)>=strtotime($chout) && strtotime($chout)!=NULL)
					{
						$sql="select ID from rooms where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						$res=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($res);
						$id2=$row2['ID'];
						$sql="SELECT * FROM personaldetails where ID='$id2'";
						$r=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($r);
						$gt=$row2['GuestType'];
						$fn=$row2['FirstName'];
						$ln=$row2['LastName'];
						$em=$row2['Email'];
						$mob=$row2['Mobile'];
						$add=$row2['Address'];
						$cit=$row2['City'];
						
						$user=$row2['CUsername'];
						$sql="update rooms set Checkin = NULL, Checkout = NULL,ID=NULL where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						mysqli_query($db,$sql);
					
						$sql="insert into previousbooking (BookingID,FirstName,LastName,Email,Mobile,Address,City,User) values ('$id2','$fn','$ln','$em','$mob','$add','$cit','$user')";
						mysqli_query($db,$sql);
						
						$sql="delete from roomdetails where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from payment where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from facilities where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from personaldetails where ID='$id2'";
						mysqli_query($db,$sql);
					
					}
				}
		
	}
	
	for($i=401; $i<=405; $i++)
	{
		
		$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					$chin=$row['Checkin'];
					$chout=$row['Checkout'];
					$today=date("Y-m-d");
					if(strtotime($today)>=strtotime($chout) && strtotime($chout)!=NULL)
					{
						$sql="select ID from rooms where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						$res=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($res);
						$id2=$row2['ID'];
						$sql="SELECT * FROM personaldetails where ID='$id2'";
						$r=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($r);
						$gt=$row2['GuestType'];
						$fn=$row2['FirstName'];
						$ln=$row2['LastName'];
						$em=$row2['Email'];
						$mob=$row2['Mobile'];
						$add=$row2['Address'];
						$cit=$row2['City'];
						
						$user=$row2['CUsername'];
						$sql="update rooms set Checkin = NULL, Checkout = NULL,ID=NULL where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						mysqli_query($db,$sql);
					
						$sql="insert into previousbooking (BookingID,FirstName,LastName,Email,Mobile,Address,City,User) values ('$id2','$fn','$ln','$em','$mob','$add','$cit','$user')";
						mysqli_query($db,$sql);
						
						$sql="delete from roomdetails where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from payment where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from facilities where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from personaldetails where ID='$id2'";
						mysqli_query($db,$sql);
					
					}
				}
		
	}
	
	for($i=501; $i<=505; $i++)
	{
		
		$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					$chin=$row['Checkin'];
					$chout=$row['Checkout'];
					$today=date("Y-m-d");
					if(strtotime($today)>=strtotime($chout) && strtotime($chout)!=NULL)
					{
						$sql="select ID from rooms where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						$res=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($res);
						$id2=$row2['ID'];
						$sql="SELECT * FROM personaldetails where ID='$id2'";
						$r=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($r);
						$gt=$row2['GuestType'];
						$fn=$row2['FirstName'];
						$ln=$row2['LastName'];
						$em=$row2['Email'];
						$mob=$row2['Mobile'];
						$add=$row2['Address'];
						$cit=$row2['City'];
						
						$user=$row2['CUsername'];
						$sql="update rooms set Checkin = NULL, Checkout = NULL,ID=NULL where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						mysqli_query($db,$sql);
					
						$sql="insert into previousbooking (BookingID,FirstName,LastName,Email,Mobile,Address,City,User) values ('$id2','$fn','$ln','$em','$mob','$add','$cit','$user')";
						mysqli_query($db,$sql);
						
						$sql="delete from roomdetails where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from payment where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from facilities where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from personaldetails where ID='$id2'";
						mysqli_query($db,$sql);
					
					}
				}
		
	}
	
	for($i=601; $i<=605; $i++)
	{
		
		$sql="select Checkin,Checkout from rooms where RoomNumber=$i";
				$result=mysqli_query($db,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					$chin=$row['Checkin'];
					$chout=$row['Checkout'];
					$today=date("Y-m-d");
					if(strtotime($today)>=strtotime($chout) && strtotime($chout)!=NULL)
					{
						$sql="select ID from rooms where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						$res=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($res);
						$id2=$row2['ID'];
						$sql="SELECT * FROM personaldetails where ID='$id2'";
						$r=mysqli_query($db,$sql);
						$row2=mysqli_fetch_assoc($r);
						$gt=$row2['GuestType'];
						$fn=$row2['FirstName'];
						$ln=$row2['LastName'];
						$em=$row2['Email'];
						$mob=$row2['Mobile'];
						$add=$row2['Address'];
						$cit=$row2['City'];
						
						$user=$row2['CUsername'];
						$sql="update rooms set Checkin = NULL, Checkout = NULL,ID=NULL where RoomNumber=$i and Checkin = '$chin' and Checkout='$chout' and Checkin is not null and Checkout is not null";
						mysqli_query($db,$sql);
					
						$sql="insert into previousbooking (BookingID,FirstName,LastName,Email,Mobile,Address,City,User) values ('$id2','$fn','$ln','$em','$mob','$add','$cit','$user')";
						mysqli_query($db,$sql);
						
						$sql="delete from roomdetails where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from payment where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from facilities where ID='$id2'";
						mysqli_query($db,$sql);
						$sql="delete from personaldetails where ID='$id2'";
						mysqli_query($db,$sql);
					
					}
				}
		
	}
	
?>