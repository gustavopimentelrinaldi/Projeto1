<?php
	session_start();
	$_SESSION['logged_in'] = false;

	session_destroy();
	header('Location: ../view/index.php?logout=1');
?>