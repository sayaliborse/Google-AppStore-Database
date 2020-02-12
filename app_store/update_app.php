<?php
$app_name = $_POST['App_Name'];
$app_version = $_POST['App_Version'];
$os_supported = $_POST['OS_supp'];
$ram_supported = $_POST['RAM_supp'];
$release_date = $_POST['Release_date'];





$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  
$sql = "UPDATE application SET App_LatestVersion='$app_version',LatestVersionRelease_Date='$release_date', O.S. Supported = '$os_supported',RAM Required = '$ram_supported' WHERE App_Name='$app_name'";

$result = mysqli_query($con,$sql);
if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	



if($result == TRUE){
	echo "Success";
}


mysqli_close($con);
?>