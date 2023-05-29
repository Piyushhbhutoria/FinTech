<?php
session_start();
session_destroy();
?>
<script>
	alert("Logged out successfully");
	window.location.href = "index.php";
</script>
