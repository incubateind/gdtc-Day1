<?php
	session_start();
	if(!(isset($_SESSION["userName"])) && $_POST["userName"]!=""){
		$_SESSION["userName"] = $_POST["userName"];
		header("location: index.php");
		exit;
	}
	session_destroy();
	header("location: index.php");
	exit;
?>