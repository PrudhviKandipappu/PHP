<?php
	header("Access-Control-Allow-Origin: *");
	// echo "Server Time: " . date('h:i:s');
	date_default_timezone_set('Asia/Kolkata');
	$timeStamp = time();
	$dateTime = date("d-m-y (D) h:i:s", $timeStamp);
	echo "Current date and time on server: " . $dateTime;
?>