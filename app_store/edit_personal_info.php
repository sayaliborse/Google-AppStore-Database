<?php
$first_name = $_GET['First_Name'];
$mi = $_GET['MI'];
$last_name = $_GET['Last_Name'];
$contact = $_GET['Contact'];
$email = $_GET['Email'];
$address = $_GET['Address'];
$city = $_GET['City'];
$state = $_GET['State'];
$zip_code = $_GET['Zip_code'];


$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$sql = "UPDATE user SET MI='$mi',LastName='$last_name', Contact = '$contact',Email = '$email', Address = '$address', City = '$city',Zipcode= '$zip_code',State = '$state' WHERE FirstName='$first_name'";

$result = mysqli_query($con,$sql);
if($result == TRUE){
	echo "User Information Updated!!";
}


mysqli_close($con);
?>