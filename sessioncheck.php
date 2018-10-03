<?php
if(isset($_SESSION['log']) && !empty($_SESSION['log'])) {
	header("location:index.php");
}
?>