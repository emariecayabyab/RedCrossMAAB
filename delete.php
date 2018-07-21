<?php
require 'fragments/db.php';

 $query = "DELETE FROM maablist WHERE IDNumber ='$_GET[id]'";
 if(mysqli_query($db, $query)){
 	header("Location: index.php");
 } else {
 	echo 'failed';
 }

?>