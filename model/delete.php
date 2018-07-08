<?php
	require 'fragments/db.php';

$IDNo = $_GET['idNum'];
$query = "DELETE FROM maablist WHERE IDNumber='$IDNo'";

$result = mysqli_query($db, $query);

?>
