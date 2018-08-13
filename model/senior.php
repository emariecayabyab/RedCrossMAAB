<?php
    require 'fragments/db.php';

    $query = 'SELECT orNumber,IDNumber,lastName,firstName,middleName,address, organization, contactNumber, birthday, age, gender, validDate, expiryDate FROM maablist WHERE memType = "Senior" AND expiryDate>=CURDATE() ORDER BY validDate DESC';
    $result = mysqli_query($db, $query);

    $members = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $orNum = $row['orNumber'];
        $IDNumber = $row['IDNumber'];
        $lastName = $row['lastName'];
        $firstName = $row['firstName'];
        $middleName = $row['middleName'];
        $address = $row['address'];
        $organization = $row['organization'];
        $contactNumber = $row['contactNumber'];
        $birthday = $row['birthday'];
        $age = $row['age'];
        $gender = $row['gender'];
        $validDate = $row['validDate'];
        $expiryDate = $row['expiryDate'];

        $member = new Member($orNum, $IDNumber, $lastName, $firstName, $middleName, $address, $organization, $contactNumber,$birthday, $age, $gender, $validDate, $expiryDate);
        $members[] = $member;
    }

    mysqli_free_result($result);
