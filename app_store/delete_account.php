<?php
$user_name = $_POST['Name'];
$password = $_POST['password'];
$login_type = $_POST['gridRadios'];

$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
$sql = "delete from login where username = '$user_name' and login_type = '$login_type'";
$result = mysqli_query($con,$sql);

if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}

if($result == TRUE){

echo "Account Deleted!!!";

}

mysqli_close($con);

?>