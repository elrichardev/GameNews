<?php
	session_start();
	if(!isset($_SESSION["username"])){
		header("Location: index2.html");
		exit(); 
	}
?>
