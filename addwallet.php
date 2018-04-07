<?php
session_start();
include('config.php');
$useruid = $_SESSION['log']['uid'];
$file = 'count.txt';
	//get the number from the file
	$uniq = file_get_contents($file);
	//add +1
	$uid = $uniq + 1 ;
	// add that new value to text file again for next use
	file_put_contents($file, $uid);
$amt = $_POST['amount'];
$qry = mysql_query("SELECT * FROM wallet WHERE useruid='$useruid' ")or die(mysql_error());
$row = mysql_fetch_array($qry);
$balance = $row['balance']+$amt;
$sql = mysql_query("UPDATE wallet SET balance='$balance' WHERE useruid='$useruid' ")or die(mysql_error());
$sql1 = mysql_query("INSERT INTO transaction (useruid, amount, type, transuid, balance) VALUES ('$useruid', '$amt', 'credit', '$uid', '$balance') ")or die(mysql_error());
if($sql)
{
	?>
	<script>
		alert("Money Added Successfully!");
		window.location.href = "dashboard.php";
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("Money unable to add!");
		window.location.href = "dashboard.php";
	</script>
	<?php
}
?>