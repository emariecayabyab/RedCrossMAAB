<?php
	require 'fragments/db.php';
	$idDel = $_GET['idNum'];

     $query="DELETE FROM maablist WHERE IDNumber=$idDel";

	$result = mysqli_query($db, $query);

if($result){
	echo "success" . "$idDel";
} else {
	echo "failed" . "$idDel";
}

?>

