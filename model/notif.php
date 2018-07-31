<?php
	require 'fragments/db.php';

	$query = 'SELECT orNumber,IDNumber,lastName,firstName,middleName,address,contactNumber, birthday, age, gender, validDate, expiryDate FROM maablist WHERE YEAR(expiryDate) = YEAR(CURRENT_DATE()) AND MONTH(date_sub(expiryDate, INTERVAL 1 month)) = MONTH(CURRENT_DATE()) ORDER BY validDate DESC';
    $result = mysqli_query($db, $query);