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
$row = mysql_query("SELECT * FROM wallet WHERE useruid='$useruid' ");
$row1 = mysql_fetch_array("$row");
$balance = $row1['balance'];
if($amount<=$balance)
{
$qry5 = mysql_query("INSERT INTO transaction (useruid, amount, type, transuid, balance) VALUES ('$useruid', '$amt', 'credit', '$transuid', '$balance') ");
$balance-=$amount;
$qry6 = mysql_query("UPDATE wallet SET balance=$balance WHERE useruid='$useruid' ");
$qry = mysql_query("INSERT INTO invest (amount, useruid, borrowuid, investuid) VALUES ('$amount', '$useruid', '$borrowuid', '$uid') ")or die(mysql_error());
$sql = mysql_query("SELECT * FROM borrow WHERE borrowuid='$borrowuid' ")or die(mysql_error());
$sql1 = mysql_fetch_array($sql);
$sql2 = $sql1['collect'];
$collect = $sql2 + $amount;
$qry1 = mysql_query("UPDATE borrow SET collect='$collect' WHERE borrowuid='$borrowuid' ")or die(mysql_error());
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
	<script>
		alert("Investment Unsuccessful.");
		window.location.href = "P2P_lending_lender.php";
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