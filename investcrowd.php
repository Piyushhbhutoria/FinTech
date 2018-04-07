<?php
include('config.php');
session_start();
$amount = $_POST['amount'];
$useruid = $_SESSION['log']['uid'];
$borrowuid = $_POST['borrowuid'];
	$file = 'count.txt';
	//get the number from the file
	$uniq = file_get_contents($file);
	//add +1
	$uid = $uniq + 1 ;
	$transuid = $uid + 1;
	// add that new value to text file again for next use
	file_put_contents($file, $transuid);
$row = mysql_query("SELECT * FROM wallet WHERE useruid='$useruid' ")or die(mysql_error());
$row1 = mysql_fetch_array($row);
$balance = $row1['balance'];
if($amount <= $balance)
{
$qry5 = mysql_query("INSERT INTO transaction (useruid, amount, type, transuid, balance) VALUES ('$useruid', '$amt', 'credit', '$transuid', '$balance') ")or die(mysql_error());
$balance-=$amount;
$qry6 = mysql_query("UPDATE wallet SET balance=$balance WHERE useruid='$useruid' ");
$qry = mysql_query("INSERT INTO investcrowd (amount, useruid, borrowuid, investuid) VALUES ('$amount', '$useruid', '$borrowuid', '$uid') ")or die(mysql_error());
$qry1 = mysql_query("UPDATE borrowcrowd SET collect='$amount' WHERE borrowuid='$borrowuid' ")or die(mysql_error());
if($qry)
{
	?>
	<script>
		alert("Investment Successful.");
		window.location.href = "index.php";
	</script>
	<?php
}
else
{
?>
?>
	<script>
		alert("Investment Unsuccessful.");
		window.location.href = "crowdfunding_lending.php";
	</script>
	<?php
}
}
else
{
	?>
	<script>
		alert("Balance Low. Please Add Money!");
		window.location.href = "dashboard.php";
	</script>
	<?php
}
?>