<?php
			
	$con = mysqli_connect("localhost","root","","appstore");
	if (!$con)
	 {
		die('Could not connect: ' . mysql_error());
	}
	$sql = "SELECT * FROM `appinfo` ai join application a on a.App_ID = ai.App_ID where App_Name='WhatsApp'";
	$sql2 = "SELECT DevName,Rating FROM `developer` d join application a on d.Dev_ID = a.Dev_ID join review r on a.App_ID = r.App_ID where a.App_Name = 'WhatsApp'";
	$result = mysqli_query($con,$sql);
	$result2 = mysqli_query($con,$sql2);			
	if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
	}
	while ($row_category = mysqli_fetch_array($result)){			
	echo "<h3>",$row_category['App_Name'],"</h3>";	
	echo "<form action='#' method='post'>";
	echo 			"<fieldset>";
	echo 			"<a href='#'  style='float:right'>";
	echo				"Download </a>";	
	echo			"</fieldset>";
	echo		"</form>";	
	echo "<h4>","Price : $ ",$row_category['App_Price'],"</h4><br>";
	echo "<p>",$row_category['Description'],"</p>";
}
	while ($row_category = mysqli_fetch_array($result2)){	
				
	echo "Developed by: ",$row_category['DevName'];
	echo "<br><br>";
	echo "Rating : ",$row_category['Rating'];
}
mysqli_close($con);
?>
			