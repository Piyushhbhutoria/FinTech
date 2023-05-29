<?php
if (empty($_SESSION['user_data']) == true) {
	header("location:index.php");
}
