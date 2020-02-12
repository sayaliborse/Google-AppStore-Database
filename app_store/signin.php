<?php
$user_name = $_POST['Name'];
$password = $_POST['password'];
$login_type = $_POST['gridRadios'];
echo $login_type;
$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
$sql = "select password from login where username = '$user_name'";
$result = mysqli_query($con,$sql);

if(mysqli_error($con)){
		printf("error: %s\n", mysqli_error($con));
}

while($row = mysqli_fetch_array($result))
  {
  if ($password ==  $row['password']){
	  echo "Login Successful";
  }
 }

if($login_type == 'option1'){
header('Location: user.php');
}

if($login_type == 'option2'){
header('Location: developer.php');
} 
mysqli_close($con);

?>