
<?php

$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  
$sql = "select * from review r join user u on r.User_ID=u.User_ID where u.FirstName = 'Rishi'";

$result = mysqli_query($con,$sql);

if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	

while ($row_category = mysqli_fetch_array($result)){
		$title = $row_category['Title'];
		$message = $row_category['Message'];
		$rating = $row_category['Rating'];
		
	echo "$title \n";
	echo "$message \n";
	echo "$rating \n";

	}

	
	

	
	

mysqli_close($con);
?>