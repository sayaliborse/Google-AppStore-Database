<?php
$name = $_GET['name'];
$pass = $_GET['New_Password'];
$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
 if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}

$result = mysqli_query($con,"update login set password = '$pass' where username = '$name'");
echo "Success";
mysqli_close($con);
?>