<?php
$app = 'WhatsApp';
$title = $_POST['Title'];
$review = $_POST['Review'];
$rating = $_POST['Rating'];
$email = $_POST['Email'];



$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
	die('Could not connect: ' . mysql_error());
  }
$sql1 = "select App_ID from application where App_Name = '$app'";   
$sql2 = "select User_ID from user where Email = '$email'"; 

$result2 = mysqli_query($con,$sql2);
$result1 = mysqli_query($con,$sql1);
$get=mysqli_query($con,"SELECT MAX(Review_ID) FROM review"); 
$got = mysqli_fetch_array($get); 
$next_id = $got['MAX(Review_ID)'] + 1;

while ($row_category = mysqli_fetch_array($result1)){
		$appid = $row_category['App_ID'];
		while ($row_category = mysqli_fetch_array($result2)){
		$userid = $row_category['User_ID'];
		$sql = "INSERT INTO review VALUES ($next_id,$appid,$userid,'$title','$review','$rating')";
        $result = mysqli_query($con,$sql);
		if($result == TRUE){

	echo "Review Added!!!";
}
		}
}


if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	



mysqli_close($con);
?>