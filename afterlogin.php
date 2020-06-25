<?php 
  session_start(); 
   if (!isset($_SESSION['c_name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['c_name']);
    header("location: index.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<style>
		.cs1
{
 float:right;
 margin-top: -40px;
}

.cs1 a {
    float: right;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

	</style>
</head>
<body>
<div id="bg" style="background-color:pink;">
			<div id="outer">
				<div id="header" style="background-color:#3D0F42;">
<div id="logo">
						<h1>
							<a href="#">BE U BEAUTY SERVICES</a>
						</h1>
					</div>
					
	
					<div id="nav" style="background-color:purple;">
						<ul>
                         <li><a class="active" href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						</ul>
				<div class="cs1">
<?php  if (isset($_SESSION['c_name'])) : ?>
<a href="index.php?logout='1'" style="color: red;">logout</a>
<a href="#">Welcome  <strong><?php echo $_SESSION['c_name']; ?></strong></a>
<?php endif ?>
</div>
					</div>
				</div>
				<div id="banner">
					<img src="home.jpg" width="800" height="172" alt="" />
				</div>
				
				
  <div id="app">
  

<div class="after">
   
 

    <div style="margin-top:50px;background-color:#3D0F42;height:150px;width:979px;margin-right:-40px;">
 
     <img src="hair.jpg" height=150px; margin-top=10px;>
     <p style="font-size:50px;margin-left:350px;margin-top:-80px;color:white;">HAIR STYLIST </p>
     
<form action="hair.php">
<input type="submit" value="check" style="margin-left:800px;margin-top:-100px;width:100px;">
</form>
</div>
<div style="margin-top:50px;background-color:#3D0F42;height:150px;width:979px;margin-right:-40px;">
 
     <img src="face.jpg" height=150px; margin-top=10px;>
     <p style="font-size:50px;margin-left:350px;margin-top:-80px;color:white;">SKIN CARE</p>
     
<form action="face.php">
<input type="submit" value="check" style="margin-left:800px;margin-top:-100px;width:100px;">
</form>
</div>
<div style="margin-top:50px;background-color:#3D0F42;height:150px;width:979px;margin-right:-40px;">
 
     <img src="nail.jpg" height=150px; margin-top=10px;>
     <p style="font-size:50px;margin-left:350px;margin-top:-80px;color:white;">NAIL ESSENTIALS </p>
     
<form action="nail.php">
<input type="submit" value="check" style="margin-left:800px;margin-top:-100px;width:100px;">
</form>
</div>

</div>
 

				
</body>
</html>