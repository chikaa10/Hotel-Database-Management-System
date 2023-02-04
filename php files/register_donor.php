<?php
	$type = 'donor';
	$username=$pswd=$name=$bl_grp="";
	$d_id=$aadhar_no=0;

	function test_input($data)
	{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include_once 'connection.php';

    if (isset($_POST['submit1']))
	{

		$city = test_input($_POST['city']);
		$name = test_input($_POST['name']);
		$aadhar_no = test_input($_POST['aadhar_no']);
		$gender = test_input($_POST['gender']);
		$email = test_input($_POST['email']);
		$dob = date_create(test_input($_POST['dob']));

		$mobile = test_input($_POST['mobile']);
		$area = test_input($_POST['area']);
		$zip = test_input($_POST['zip']);

		$bl_grp = test_input($_POST['bl_grp']);

		$username = test_input($_POST['username']);
		$pswd = test_input($_POST['pswd']);
		$dob = date_format($dob,"Y-m-d");

		$stmt = $conn->prepare("INSERT INTO donor_details VALUES (?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isssisssi",$aadhar_no,$name,$dob,$gender,$mobile,$email,$city,$area,$zip);

		$stmt1 = $conn->prepare("INSERT INTO donor (blood_group,aadhar_no) VALUES (?,?)");
			$stmt1->bind_param("si",$bl_grp,$aadhar_no);

		if($stmt->execute() && $stmt1->execute())
		{
			$sql = "SELECT d_id FROM donor where aadhar_no ='$aadhar_no'";
			$res = $conn->query($sql);
			$d_id = $res->fetch_assoc();

			$stmt2 = $conn->prepare("INSERT INTO user VALUES (?,?,?,?)");
			$stmt2->bind_param("sssi",$username,$pswd,$type,$d_id);

			if($stmt2->execute())
			{
				echo "<center><h1>Registration Successful</h1></center>";
				echo '<a href="login.html";><input type="button" value="Go to login page"></a>';
			}
		}
		else
		{
			echo "<script>alert('Registration Failed')</script>";
		}
	}
?>
