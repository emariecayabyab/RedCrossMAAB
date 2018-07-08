<?php
require 'fragments/db.php';

$del = $_POST['sid'];
if(isset($_REQUEST["sid"]))
{
	$db->query("delete FROM maablist where IDNumber='$del'");
	echo '$del';

}

else echo 'Not Deleted Error Occured';

?>