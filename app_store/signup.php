<?php
$first_name = $_POST['FName'];
$mi = $_POST['mi'];
$last_name = $_POST['LName'];
$contact = $_POST['Contact'];
$email = $_POST['Email'];
$address = $_POST['Address'];
$city = $_POST['City'];
$zip_code = $_POST['Zip_code'];
$state = $_POST['State'];
$username = $_POST['Username'];
$password = $_POST['password'];
$login_type = $_POST['gridRadios'];


$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
	die('Could not connect: ' . mysql_error());
  }

$get=mysqli_query($con,"SELECT MAX(User_ID) FROM user"); 
$got = mysqli_fetch_array($get); 
$next_id = $got['MAX(User_ID)'] + 1;
$sql = "INSERT INTO user VALUES ('$next_id','$first_name','$mi','$last_name','$contact','$email','$address','$city','$zip_code','$state')";

$sql_login = "INSERT INTO login VALUES ('$username','$password','$login_type')";
$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql_login);


if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	

if($result == TRUE){

	echo "User Details Added!!!";
	echo "<br>";
	echo "<br>";
}

if($result1 == TRUE){
	
	echo "User Login Details Added!!!";
}

if($login_type == 'U'){
	header('location: user.php');
	
}


if($login_type == 'D'){
	header('location: developer.php');
	
}


mysqli_close($con);
?>