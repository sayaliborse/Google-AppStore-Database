<?php
$first_name = $_POST['Name'];
$email = $_POST['Email'];
$address = $_POST['Website'];
$username = $_POST['Username'];
$password = $_POST['password'];
$login_type = 'D';


$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
	die('Could not connect: ' . mysql_error());
  }

$get=mysqli_query($con,"SELECT MAX(User_ID) FROM user"); 
$got = mysqli_fetch_array($get); 
$next_id = $got['MAX(User_ID)'] + 1;

$sql = "INSERT INTO developer VALUES (7,'$first_name','$email','$address')";

$sql_login = "INSERT INTO login VALUES ('$username','$password','$login_type')";
$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql_login);


if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	

if($result == TRUE){

	echo "Developer Details Added!!!";
	echo "<br>";
	echo "<br>";
}

if($result1 == TRUE){
	
	echo "Developer Login Details Added!!!";
}

mysqli_close($con);
?>