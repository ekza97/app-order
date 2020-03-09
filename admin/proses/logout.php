<?php
	session_start();
	$user = $_SESSION['username'];
	session_destroy($user);
	header("location:/apbw/");
?>