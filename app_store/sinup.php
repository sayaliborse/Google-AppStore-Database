<?php
$errors = "";
// connect to the database
$con = mysqli_connect("localhost","root","","appstore");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 $firstname = $_GET['First_Name'];
  echo $firstname;
  
  $lastname = mysqli_real_escape_string($con, $_GET['Last_Name']);
  $email = mysqli_real_escape_string($con, $_GET['Email']);
  $password = mysqli_real_escape_string($con, $_GET['password']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "FirstName is required"); }
  if (empty($lastname)) { array_push($errors, "LastNameame is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE FirstName ='hjkhjk'";

  $result = mysqli_query($con,$user_check_query);
  //$user = mysqli_fetch_assoc($result);
  
  //if ($user) { // if user exists
  //  if ($user['FirstName'] === $firstname) {
    //  array_push($errors, "FirstName already exists");
    //}

    //if ($user['email'] === $email) {
      //array_push($errors, "email already exists");
    //}
  //}
$query = "INSERT INTO user (FirstName,LastName, Email, Password) VALUES ('ishi','ahkwiw' ,'aaia', 'iwywk')";
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (FirstName,LastName, Email, Password) 
  			  VALUES('$firstname','$lastname' ,'$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['FirstName'] = $firstname;
  	$_SESSION['success'] = "You are now logged in";
  	echo "hi";
	//header('location: new .php');
	
}
mysqli_close($con);

?>
