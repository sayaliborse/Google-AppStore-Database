<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$website = $_POST['Website'];

$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$sql = "UPDATE developer SET DevEmail='$email',DevWebsite='$website' WHERE DevName='$name'";

$result = mysqli_query($con,$sql);

if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}

if($result == TRUE){
	echo "Developer Information Updated!!!";
}


mysqli_close($con);
?>