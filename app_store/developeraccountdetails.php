<?php
$bank_name = $_POST['App_Name'];
$acc_no = $_POST['Account_Number'];
$route_no = $_POST['Routing_Number'];
$zip_code = $_POST['Zip_code'];


$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  
$sql = "INSERT INTO developeraccountdetails VALUES ('$acc_no','$route_no','$bank_name','$zip_code')";

$result = mysqli_query($con,$sql);

if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	



if($result == TRUE){

	echo "Payment Details Added!!!";
}

mysqli_close($con);
?>