<?php
session_start();
include('config.php');
$email = $_POST['mail'];
$passwrd = $_POST['pass'];
$qry = mysqli_query($con, "SELECT * FROM user WHERE email='$email' and password='$passwrd' ");
$qry1 = mysqli_num_rows($qry);
if ($qry1) {
    $row = mysqli_fetch_array($qry);
    $_SESSION['log'] = $row;
    $keys = "user";
    $_SESSION['log1'] = $keys;
    header("location:index.php");
} else {
?>
    <script>
        alert("Wrong email ID or password");
        window.location.href = "login.php";
    </script>
<?php
}
?>
