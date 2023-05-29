<?php
include('config.php');
session_start();
$title = $_POST['title'];
$cat = $_POST['category'];
$descrip = $_POST['descrip'];
$amount = $_POST['amt'];
$useruid = $_SESSION['user_data']['uid'];
$file = 'count.txt';
//get the number from the file
$uniq = file_get_contents($file);
//add +1
$uid = $uniq + 1;
// add that new value to text file again for next use
file_put_contents($file, $uid);
$qry = mysqli_query($con, "INSERT INTO borrowcrowd (title, descrip, category, amount, useruid, borrowuid, logo, collect) VALUES ('$title', '$descrip', '$cat', '$amount', '$useruid', '$uid', 'investlogo/Jason_Bradburyglass2.jpg', '0' ) ") or die(mysqli_error($con));
?>
<script>
    alert("Your request is under process..");
    window.location.href = "index.php";
</script>
