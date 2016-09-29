<?php

$con = mysqli_connect("localhost","root","root","test_form");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['submit']))
{

$user_name = mysqli_real_escape_string($con,$_POST['uname']);
$user_email = mysqli_real_escape_string($con,$_POST['uemail']);
$user_mobile = mysqli_real_escape_string($con,$_POST['umobile']);



	if($user_name != "" && $user_email != "" && $user_mobile != ""){

		$sql="INSERT INTO lp_user VALUES ('','$user_name', '$user_email', '$user_mobile')";

		if (!mysqli_query($con,$sql)) {
  			die('Error: ' . mysqli_error($con));
		}
		echo "1 record added";

		mysqli_close($con);

		//redirect to thank you page
		exit;
	}
	else{

		echo "No Data Recevied";
		//redirect to index page
		exit;
	}
}
?>