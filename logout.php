<?php
session_destroy();
unset($_SESSION["c_name"]);
header("Location:login.php");
?>