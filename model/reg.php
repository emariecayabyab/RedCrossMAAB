<?php
    require 'fragments/db.php';

    $query = 'SELECT orNumber,IDNumber,lastName,firstName,middleName,address,contactNumber, birthday, age, gender, status, validDate, expiryDate FROM maablist WHERE validDate=CURDATE() ORDER BY validDate DESC';
    $result = mysqli_query($db, $query);