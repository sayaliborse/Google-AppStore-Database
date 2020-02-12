
<?php
$code = $_POST['code'];

$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$sql = "select c.Coupon_Code from coupon_code c join user u on c.User_ID = u.User_ID where u.FirstName = 'Rishi'";

if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
  {
	  if($code == $row['Coupon_Code'])
	{
		echo "success";
  
	}
	else {
		echo "Failure";
	}
 }


mysqli_close($con);
?>
