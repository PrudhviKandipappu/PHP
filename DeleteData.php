<?php
	include "databaseConnection.php";
	if ($dbConnection) {
		$itemID = $_GET['itemID'];
		$deleteQuery = "DELETE FROM Stock WHERE ItemID = '$itemID'";
		mysqli_query($dbConnection, $deleteQuery);
		echo mysqli_affected_rows($dbConnection);
	}
	$dbConnection->close();
?>