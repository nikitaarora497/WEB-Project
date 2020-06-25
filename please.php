<?php
  
  $a = $_GET['a'];
  $b = $_GET['b'];
  $c = $_GET['c'];
  $d = $_GET['d'];

   $a1= '300';
   $b1= '500';
   $c1= '300';
   $d1= '1000';

   $sum = ($a*$a1) + ($b*$b1) + ($c*$c1) + ($d*$d1);

   echo "<p style='font-size:30px;'>"."Total Bill: Rs  ",$sum+$sum*'18'/'100'; 
   echo "    ";
   echo("(inclusive of 18% Gst)");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  		<link rel="stylesheet" type="text/css" href="cart.css">
  
    <title></title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<!--

	-->
<style>
#sum
  {
  color:red;
  font-size:30px;
  }	
	</style>
  </head>
  
  <body>
  <div class="row">
  <div class="col-75">
   <div class="container-login100" style="background-image: url('login.jpg');background-repeat:no-repeat;">
   
      <form action="createnew.php" method="post" class="login100-form validate-form p-b-33 p-t-5" style="height:800px;width:800px;">

        <div class="row">
          <div class="col-50">
            <h1>Billing Address</h1>
           <span class="login100-form-title p-b-41"><label for="fname"><i class="fa fa-user"></i> Full Name</label> 
            <input type="text" id="fname" name="fname" placeholder="your name" width="200px"  class="input100" ></span>
           <BR> <BR>
           <span class="login100-form-title p-b-41"> <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" class="input100" placeholder="your email"></span>
            <BR><BR>
            <span class="login100-form-title p-b-41">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address </label>
            <input type="text" id="adr" name="address"  class="input100" placeholder="your address"></span>
            <BR><BR>
            <span class="login100-form-title p-b-41">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" class="input100" placeholder="your city"></span>
<BR><BR>
            <div class="row">
             <div class="col-50">
               <span class="login100-form-title p-b-41"> <label for="state">State</label>
                <input type="text" id="state" name="state" class="input100" placeholder="your state"></span>
                <BR><BR>
              </div>
              <div class="col-50">
              <span class="login100-form-title p-b-41">  <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" class="input100" placeholder="your pin"></span>
                <BR><BR>
                <span class="login100-form-title p-b-41">
                <input type="submit" name = "make" value="MAKE PAYMENT" style="height:30px;width:600px;background-color:purple;color:white;"></span>
              </div>
            </div>
          </div>
          </div>
          </div>
          </form>
 </body>
</html>
