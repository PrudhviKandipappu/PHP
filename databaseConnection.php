<?php
	header("Access-Control-Allow-Origin: *");
	$host = "138.68.140.83";
	$user = "Prudhvi";
	$password = "Prudhvi@2004";
	$database = "dbPrudhvi";
	$dbConnection = new mysqli($host, $user, $password, $database);
?>