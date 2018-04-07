<?php
session_start();
include('config.php');
$email = $_POST['mail'];
$passwrd = $_POST['pass'];
$qry = mysql_query("SELECT * FROM user WHERE email='$email' and password='$passwrd' ");
$qry1 = mysql_num_rows($qry);
if($qry1)
{
  $row = mysql_fetch_array($qry);
  $_SESSION['log']=$row;
  $keys="user";
  $_SESSION['log1']=$keys;
  header("location:index.php");
}
else
{
  ?>
  <script>
    alert ("Wrong email ID or password");
    window.location.href = "login.php";
  </script>
  <?php 
}
?>