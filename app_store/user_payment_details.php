<?php
$bank_name = $_POST['App_Name'];
$acc_no = $_POST['Account_Number'];
$route_no = $_POST['Routing_Number'];
$credit_card_no = $_POST['Credit_card_number'];
$cvv = $_POST['CVV'];
$exp_date = $_POST['expire_date'];
$name_card = $_POST['name_on_card'];
$zip_code = $_POST['Zip_code'];


$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  
$sql = "INSERT INTO useraccountdetails VALUES ('$bank_name','$acc_no','$route_no','$credit_card_no','$cvv','$exp_date','$name_card','$zip_code')" ;

$result = mysqli_query($con,$sql);

if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	



if($result == TRUE){

	echo "User Payment Details Added!!!";
}

mysqli_close($con);
?>