
<?php

$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  
$sql = "select * from application where App_Name='Instagram'";
$sql1 = "select * from appinfo where Description='WhatsApp'";
$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql1);

if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	

while ($row_category = mysqli_fetch_array($result)){
		$appname = $row_category['App_Name'];
		$appversion = $row_category['App_LatestVersion'];
		$version_date = $row_category['LatestVersionRelease_Date'];
		$os = $row_category['OS_Supported'];
		$ram = $row_category['RAM_Required'];
		
	echo "$appname \n";
	echo "$appversion \n";
	echo "$version_date \n";
	echo "$os \n";
	echo "\n";
	echo "$ram \n";
	}

	
	

while ($row_category = mysqli_fetch_array($result1)){
		$appicon = $row_category['App_Icon'];
		$description = $row_category['Description'];
		$size = $row_category['App_Size'];
		$ss = $row_category['App_Screenshots'];
		$price = $row_category['App_Price'];
		
	echo "$appicon \n";
	echo "$description \n";
	echo "$size \n";
	echo "$ss \n";
	echo "$price \n";
	}
	
	

mysqli_close($con);
?>