<?php
	include "databaseConnection.php";
	if ($dbConnection) {
		$itemID = $_GET['itemID'];
		$description = $_GET['description'];
		$stockQty = $_GET['stockQty'];
		$unitPrice = $_GET['unitPrice'];
		$insertQuery = "INSERT INTO Stock VALUES ('$itemID', '$description', '$stockQty', '$unitPrice') ON DUPLICATE KEY UPDATE ItemID = '$itemID', Description = '$description', StockQty = '$stockQty', UnitPrice = '$unitPrice'";
		mysqli_query($dbConnection, $insertQuery);
		echo mysqli_affected_rows($dbConnection);
	}
	$dbConnection->close();
?>