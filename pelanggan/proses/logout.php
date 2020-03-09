<?php
	session_start();
	$user = $_SESSION['namameja'];
	session_destroy($user);
	header("location:/apbw/");
?>