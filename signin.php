<?php
session_start();
include('config.php');
$email = $_POST['mail'];
$passwrd = $_POST['pass'];
$qry = mysqli_query($con, "SELECT * FROM user WHERE email='$email' and password='$passwrd' ");
$qry1 = mysqli_num_rows($qry);
if ($qry1) {
	$row = mysqli_fetch_array($qry);
	$_SESSION['user_data'] = $row;
	$keys = "user";
	$_SESSION['user_type'] = $keys;
	header("location:index.php");
} else {
	?>
	<script>
		alert("Wrong email ID or password");
		window.location.href = "login.php";
	</script>
	<?php
}
