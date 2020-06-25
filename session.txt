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


   <div class="cs1">
    <?php  if (isset($_SESSION['c_name'])) : ?>
      <a href="index.php?logout='1'" style="color: red;">logout</a>
      <a href="#">Welcome  <strong><?php echo $_SESSION['c_name']; ?></strong></a>
    <?php endif ?>
  </div>