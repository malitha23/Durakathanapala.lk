<?php
require_once 'database/database.php';
header('Content-Type: application/json');



$sqlQuery = "SELECT id,month,visitors FROM chartvisitors ORDER BY id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>