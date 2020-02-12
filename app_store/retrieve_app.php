<?php
						
						$con = mysqli_connect("localhost","root","","appstore");
						if (!$con)
						{
							die('Could not connect: ' . mysql_error());
						}
				  
				  
						$sql = "select * from application where App_Name='WhatsApp'";
						$sql1 = "select * from appinfo where Description='WhatsApp'";
						$result = mysqli_query($con,$sql);
						$result1 = mysqli_query($con,$sql1);
						
						if(mysqli_error($con)){
								printf("error: %s\n", mysqli_error($con));
						}
			
						while ($row_category = mysqli_fetch_array($result)){	
				
							echo "Version: ", $row_category['App_LatestVersion'],"<br><br>";
							echo "Updated On: ", $row_category['LatestVersionRelease_Date'],"<br><br>";
							echo "O.S. Supported: ", $row_category['OS_Supported'],"<br><br>";
							echo "RAM Required: ", $row_category['RAM_Required'],"<br><br>";
						
						}
					mysqli_close($con);
?>