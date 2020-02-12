<?php
$app_name = $_POST['App_Name'];
$desc = $_POST['App_Desc'];
$app_icon = $_POST['App_Icon'];
$app_size = $_POST['App_SS_1'];
$screenshot = $_POST['App_SS_2'];
$app_price = $_POST['App_Price'];
$app_version = $_POST['App_Version'];
$os_supported = $_POST['OS_supp'];
$ram_supported = $_POST['RAM_supp'];
$release_date = $_POST['Release_date'];
$category = $_POST['Category'];


$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
	die('Could not connect: ' . mysql_error());
  }

$get=mysqli_query($con,"SELECT MAX(App_ID) FROM application"); 
$got = mysqli_fetch_array($get); 
$next_id = $got['MAX(App_ID)'] + 1;

$cat = "select Cat_ID from category where Cat_Name = '$category'";
$result2 = mysqli_query($con,$cat);

if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}	

while ($row_category = mysqli_fetch_array($result2)){
		$cat_id = $row_category['Cat_ID'];
		$app_info = "INSERT INTO appinfo VALUES ('$next_id','$app_icon','$desc','$app_size','$screenshot','$app_price',$cat_id)";
		$app = "INSERT INTO application VALUES ('$next_id','$app_name','$app_version','$release_date','$os_supported','$ram_supported',3)";
		
		$result = mysqli_query($con,$app_info);
		
		$result1 = mysqli_query($con,$app);
		
		if($result1 == TRUE){
			
			echo "New Application Added!!!";
			echo "<br><br>";
		}
		
		if($result == TRUE){
			
			echo "Application Details Added!!!";
		}
	}

mysqli_close($con);
?>