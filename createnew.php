<?php
if (session_status() != PHP_SESSION_NONE) {
  session_destroy();
  }
session_start();


$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', 'nikita', 'salon');


if (isset($_POST['signMeup'])) {
 
  $username = mysqli_real_escape_string($db, $_POST['cname']);
  $email = mysqli_real_escape_string($db, $_POST['cemail']);
  $password_1 = mysqli_real_escape_string($db, $_POST['cpass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['confirmpass']);


  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }


  $user_check_query = "SELECT * FROM reg_table WHERE c_name='$username' OR c_email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  

    if ($user['c_email'] === $email) {
      array_push($errors, "email already exists");
      header('location: error.html');
    }

  if (count($errors) == 0) 
  {
  	$password = $password_1;

  	$query = "INSERT INTO reg_table (c_email,c_name, c_pass) 
  			  VALUES('$email', '$username', '$password')";
  	if(mysqli_query($db, $query))
    {
  	$_SESSION['c_name'] = $username;
    $_SESSION['c_email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: afterlogin.php');
    }
  }
}

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['c_email']);
  $password = mysqli_real_escape_string($db, $_POST['c_password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM reg_table WHERE c_email='$username' AND c_pass='$password'";
  	$results = mysqli_query($db, $query);
   	if (mysqli_num_rows($results) == 1) {
      while($row = $results->fetch_assoc()) 
      {
  	  $_SESSION['uname'] = $row['c_name'];
      }
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: afterlogin.php');
      #echo "Login Successfull";
  	}else {
  		array_push($errors, "Wrong username/password combination");
      header('location: login.php');
  	}
  }
}

if (isset($_POST['make'])) {
 
  $name = mysqli_real_escape_string($db, $_POST['fname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $zip = mysqli_real_escape_string($db, $_POST['zip']);

  $query = "INSERT INTO address (name,email,address,city,state,zip) 
          VALUES('$name', '$email', '$address','$city','$state','$zip')";
    if(mysqli_query($db, $query))
    {
    header('location: payment.php');
    }
  }

  if (isset($_POST['check'])) {
 
  $first = mysqli_real_escape_string($db, $_POST['first']);
  $femail = mysqli_real_escape_string($db, $_POST['email']);
  $fnumber = mysqli_real_escape_string($db, $_POST['number']);
  $message = mysqli_real_escape_string($db, $_POST['message']);

  $query = "INSERT INTO c_ontact (first,femail,fnumber,message) 
          VALUES('$first', '$femail', '$fnumber','$message')";
    if(mysqli_query($db, $query))
    {
    header('location: thanku.php');
    }
  }

if (isset($_POST['feed'])) {
 
  $name = mysqli_real_escape_string($db, $_POST['fname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $message = mysqli_real_escape_string($db, $_POST['message']);


  $query = "INSERT INTO feedback (fname,email,mobile,message) 
          VALUES('$name', '$email','$mobile','$message')";
    if(mysqli_query($db, $query))
    {
    header('location: afterlogin.php');
    }
  }
?>

