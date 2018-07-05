<?php
	require 'fragments/db.php';

	$query = 'SELECT orNumber,IDNumber,lastName,firstName,middleName,address,contactNumber, expiryDate FROM maablist WHERE MONTH(expiryDate) = MONTH(CURRENT_DATE()) AND YEAR(expiryDate) = YEAR(CURRENT_DATE()) GROUP BY memType ORDER BY validDate DESC';
    $result = mysqli_query($db, $query);

    $members = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $orNum = $row['orNumber'];
        $idNumber = $row['IDNumber'];
        $lastName = $row['lastName'];
        $firstName = $row['firstName'];
        $middleName = $row['middleName'];
        $address = $row['address'];
        $contactNumber = $row['contactNumber'];
        $expiryDate = $row['expiryDate'];

        $member = new Member($orNum, $idNumber, $lastName, $firstName, $middleName, $address, $contactNumber, $expiryDate);
        $members[] = $member;
    }

    mysqli_free_result($result);