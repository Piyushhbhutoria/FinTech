<?php
include('config.php');
session_start();
$amount = $_POST['amount'];
$useruid = $_SESSION['user_data']['uid'];
$borrowuid = $_POST['borrowuid'];
$file = 'count.txt';
//get the number from the file
$uniq = file_get_contents($file);
//add +1
$uid = $uniq + 1;
$transuid = $uid + 1;
// add that new value to text file again for next use
file_put_contents($file, $transuid);
$row = mysqli_query($con, "SELECT * FROM wallet WHERE useruid='$useruid' ");
$row1 = mysqli_fetch_array("$row");
$balance = $row1['balance'];
if ($amount <= $balance) {
	$qry5 = mysqli_query($con, "INSERT INTO transaction (useruid, amount, type, transuid, balance) VALUES ('$useruid', '$amt', 'credit', '$transuid', '$balance') ");
	$balance -= $amount;
	$qry6 = mysqli_query($con, "UPDATE wallet SET balance=$balance WHERE useruid='$useruid' ");
	$qry = mysqli_query($con, "INSERT INTO invest (amount, useruid, borrowuid, investuid) VALUES ('$amount', '$useruid', '$borrowuid', '$uid') ") or die(mysqli_error($con));
	$sql = mysqli_query($con, "SELECT * FROM borrow WHERE borrowuid='$borrowuid' ") or die(mysqli_error($con));
	$sql1 = mysqli_fetch_array($sql);
	$sql2 = $sql1['collect'];
	$collect = $sql2 + $amount;
	$qry1 = mysqli_query($con, "UPDATE borrow SET collect='$collect' WHERE borrowuid='$borrowuid' ") or die(mysqli_error($con));
	if ($qry) {
		?>
		<script>
			alert("Investment Successful.");
			window.location.href = "index.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert("Investment Unsuccessful.");
			window.location.href = "P2P_lending_lender.php";
		</script>
		<?php
	}
} else {
	?>
	<script>
		alert("Balance Low. Please Add Money!");
		window.location.href = "dashboard.php";
	</script>
	<?php
}
?>

