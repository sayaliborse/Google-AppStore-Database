<?php
$bank_name = $_POST['Bank_Name'];
$acc_no = $_POST['Account_Number'];
$route_no = $_POST['Routing_Number'];
$card_no = $_POST['Credit_card_number'];
$cvv = $_POST['CVV'];
$zipcode = $_POST['Zip_code'];
$expire_date = $_POST['expire_date'];
$name_on_card = $_POST['name_on_card'];





$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  
$sql = "DELETE from useraccountdetails WHERE Acc_No='$acc_no'";

$result = mysqli_query($con,$sql);
if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	



if($result == TRUE){
	echo "Account Details Deleted Successfully!!!";
}


mysqli_close($con);
?>