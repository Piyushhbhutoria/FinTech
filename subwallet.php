<?php
session_start();
include('config.php');
$useruid = $_SESSION['user_data']['uid'];
$amt = $_POST['amount'];
$file = 'count.txt';
//get the number from the file
$uniq = file_get_contents($file);
//add +1
$uid = $uniq + 1;
// add that new value to text file again for next use
file_put_contents($file, $uid);
$qry = mysqli_query($con, "SELECT * FROM wallet WHERE useruid='$useruid' ") or die(mysqli_error($con));
$row = mysqli_fetch_array($qry);
if ($row['balance'] >= $amt) {
	$balance = $row['balance'] - $amt;
	$sql = mysqli_query($con, "UPDATE wallet SET balance='$balance' WHERE useruid='$useruid' ") or die(mysqli_error($con));
	$sql1 = mysqli_query($con, "INSERT INTO transaction (useruid, amount, type, transuid, balance) VALUES ('$useruid', '$amt', 'debit', '$uid','$balance' ) ") or die(mysqli_error($con));
	if ($sql) {
		?>
		<script>
			alert("Money Transfered Successfully!");
			window.location.href = "dashboard.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert("Money unable to Transfer!");
			window.location.href = "dashboard.php";
		</script>
		<?php
	}
} else {
	?>
	<script>
		alert("Add Money to wallet first");
		window.location.href = "dashboard.php";
	</script>
	<?php
}
?>

