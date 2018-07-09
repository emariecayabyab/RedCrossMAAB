<?php
require 'fragments/db.php';


$id = $_GET['id'];
 

$query = "DELETE FROM maablist WHERE id=$id";
 $result = mysqli_query($db, $query);
if($result){
	echo 'success' . '$id';
} else {
	echo '$id';
}
header("Location: registration.php");
?>