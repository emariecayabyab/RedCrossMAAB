<?php
	require 'fragments/db.php';

$IDNumber = $_GET["IDNumber"];
$query = "DELETE FROM maablist WHERE IDNumber='$IDNumber'";

$result = mysqli_query($db, $query);

?>

