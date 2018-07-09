<?php
    require 'fragments/db.php';

    $query = 'SELECT orNumber,IDNumber,lastName,firstName,middleName,address,contactNumber, birthday, age, gender, status, validDate, expiryDate FROM maablist WHERE validDate=CURDATE() ORDER BY validDate DESC';
    $result = mysqli_query($db, $query);

    $members = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $orNum = $row['orNumber'];
        $IDNumber = $row['IDNumber'];
        $lastName = $row['lastName'];
        $firstName = $row['firstName'];
        $middleName = $row['middleName'];
        $address = $row['address'];
        $contactNumber = $row['contactNumber'];
        $birthday = $row['birthday'];
        $age = $row['age'];
        $gender = $row['gender'];
        $status = $row['status'];
        $validDate = $row['validDate'];
        $expiryDate = $row['expiryDate'];

        $member = new Member($orNum, $IDNumber, $lastName, $firstName, $middleName, $address, $contactNumber,$birthday, $age, $gender, $status, $validDate, $expiryDate);
        $members[] = $member;
    }

    mysqli_free_result($result);
