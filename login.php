<?php 
    if(isset($_SESSION['c_name']))
    header("location: services.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validated Login Form</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<section class="m_image">
	<div class="container">
		<h1 class="label">User Login</h1>
		<form class="login_form" action="createnew.php" method="post" name="form" onsubmit="return validated()">
			<div class="font">Email</div>
			<input type="text" name="c_email">
			<div class="font font2">Password</div>
			<input type="password" name="c_password"><br>
			<button type="submit" name = "login">Login</button>
		</form>
	</section>
	</div>	
	<script src="valid.js"></script>
</body>
</html>