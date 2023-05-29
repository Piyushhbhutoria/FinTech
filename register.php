<?php
include('config.php');
$name = htmlspecialchars(ucfirst($_POST['name']), ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$passwrd = base64_encode($_POST['pass']);
$repasswrd = base64_encode($_POST['repass']);
$contact = htmlspecialchars($_POST['contact'], ENT_QUOTES, 'UTF-8');
$qry = mysqli_query($con, "SELECT * FROM user WHERE email='$email' ");
$qry1 = mysqli_num_rows($qry);
$file = 'count.txt';
//get the number from the file
$uniq = file_get_contents($file);
//add +1
$uid = $uniq + 1;
// add that new value to text file again for next use
file_put_contents($file, $uid);
if ($qry1 == 0 and $passwrd == $repasswrd) {
	$sql = mysqli_query($con, "INSERT INTO user (name, email, password, contact, uid) VALUES ('$name', '$email', '$passwrd', '$contact' ,'$uid') ") or die(mysqli_error($con));
	$sql1 = mysqli_query($con, "INSERT INTO wallet (useruid, balance) VALUES ('$uid','0') ") or die(mysqli_error($con));
	$qry = mysqli_query($con, "SELECT * FROM user WHERE email='$email' and password='$passwrd' ") or die(mysqli_error($con));
	session_start();
	$row = mysqli_fetch_array($qry);
	$_SESSION['user_data'] = $row;
	$keys = "user";
	$_SESSION['user_type'] = $keys;
	header("location:index.php");
} else {
	?>
	<script>
		alert("Email Already Registered.")
		window.location.href = "SignUp.php";
	</script>
	<?php
}
?>

