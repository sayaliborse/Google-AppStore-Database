<?php
$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$result = mysqli_query($con,"SELECT * FROM category");
while($row = mysqli_fetch_array($result))
  {
  echo  $row['Cat_ID'] ;
  echo $row['Cat_Name'];
 }
mysqli_close($con);
?>
