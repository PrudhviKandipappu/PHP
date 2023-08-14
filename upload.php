<?php
	header("Access-Control-Allow-Origin: *");
	$file = $_FILES['image'];
	if (isset($file)) {
		// print_r($file);
		$directory = "/var/www/html/Prudhvi/" . $file['name'];
		if (move_uploaded_file($file['tmp_name'], $directory)) {
			shell_exec("python3 convertImageToGrayScale.py " . $file['name']);
			$imageSource = "http://138.68.140.83/Prudhvi/" . "GrayScale" . $file['name'];
			echo "<img src='$imageSource' width='400' height='400'>";
		}
	}
?>