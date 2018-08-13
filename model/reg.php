<?php
    require 'fragments/db.php';

    $query = 'SELECT orNumber,IDNumber,lastName,firstName,middleName,address,organization,contactNumber, birthday, age, gender, validDate, expiryDate FROM maablist WHERE validDate=CURDATE() ORDER BY validDate DESC';
    $result = mysqli_query($db, $query);