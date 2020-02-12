<?php
$app_name = $_POST['App_Name'];
$app_version = $_POST['App_Version'];



$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  
$sql = "DELETE from application where App_Name = '$app_name' and App_LatestVersion = '$app_version'";

$result = mysqli_query($con,$sql);

if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	
	

if($result == TRUE){

	echo "Application Deleted!!!";
}

mysqli_close($con);
?>