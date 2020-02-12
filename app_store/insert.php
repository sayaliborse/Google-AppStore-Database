<html>

<body>

 

 

<?php

$con = mysqli_connect("localhost","root","","appstore");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 


$sql="INSERT INTO nametable (firstname, lastname)

VALUES

('$_POST[fname]','$_POST[lname]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>