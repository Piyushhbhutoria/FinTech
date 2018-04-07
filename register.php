<?php
include('config.php');
$name = htmlspecialchars(ucfirst($_POST['name']), ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$passwrd = base64_encode($_POST['pass']);
$repasswrd = base64_encode($_POST['repass']);
$contact = htmlspecialchars($_POST['contact'], ENT_QUOTES, 'UTF-8');
$qry = mysql_query("SELECT * FROM user WHERE email='$email' ");
$qry1 = mysql_num_rows($qry);
	$file = 'count.txt';
	//get the number from the file
	$uniq = file_get_contents($file);
	//add +1
	$uid = $uniq + 1 ;
	// add that new value to text file again for next use
	file_put_contents($file, $uid);
if($qry1==0 and $passwrd==$repasswrd)
{
	$sql = mysql_query("INSERT INTO user (name, email, password, contact, uid) VALUES ('$name', '$email', '$passwrd', '$contact' ,'$uid') ")or die(mysql_error());
	$sql1 = mysql_query("INSERT INTO wallet (useruid, balance) VALUES ('$uid','0') ")or die(mysql_error());
	$qry = mysql_query("SELECT * FROM user WHERE email='$email' and password='$passwrd' ")or die(mysql_error());
	session_start();
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
		alert("Email Already Registered.")
		window.location.href = "SignUp.php";
	</script>
	<?php
}
?>