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
<title>ThankYou</title>
<style>
.cs1
{
 float:right;
 margin-top: -60px;
}

.cs1 a {
    font-size:30px;
    float: right;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

	</style>
</head>
<body>
<img src="thanks.JPG" style="align:center;margin-left:250px;margin-top:100px;">
<h1 style="align:center;margin-left:250px;margin-top:100px;"><span>YOUR ORDER IS RECORDED SUCCUSSFULLY</span></h1>
<center><a href = "feedback.php" style = "text-decoration: none;color:red;"><h2>Give Feedback..</h2></center>
<div class="cs1">
<?php  if (isset($_SESSION['c_name'])) : ?>
<a href="index.php?logout='1'" style="color: red;">logout</a>
<a href="#"><strong><?php echo $_SESSION['c_name']; ?></strong></a>
<?php endif ?>
</div>
</body>
</html>