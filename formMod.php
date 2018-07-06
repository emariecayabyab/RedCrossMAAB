<?php
	require 'fragments/db.php';

	$orNumber = $_POST["orNum"];
	$IDNumber = $_POST["idNum"];
	$memType = $_POST["type"];
	$lastName = $_POST["lname"];
	$firstName = $_POST["fname"];
	$middleName = $_POST["midname"];
	$address = $_POST["addr"];
	$contactNumber = $_POST["contact"];
	$byear = $_POST["byear"];
	$bmonth = $_POST["bmonth"];
	$bdate = $_POST["bdate"];
	$age = $_POST["age"];
	$gender = $_POST["sex"];
	$status = $_POST["status"];
	$validDate = $_POST["vdate"];
	$expiryDate = $_POST["edate"];

    if(isset($_POST['add'])){
        $query = "INSERT INTO maablist (orNumber,IDNumber, memType, lastName,firstName,middleName,address,contactNumber, birthday, age, gender, status, validDate, expiryDate)
        VALUES ('$orNumber','$IDNumber','$memType', '$lastName', '$firstName', '$middleName', '$address', '$contactNumber','$byear'||'-'||'$bmonth'||'-'||'$bdate','$age', '$gender', '$status', '$gender', '$status', '$validDate', '$expiryDate')";

    $result = mysqli_query($db, $query);
    }
?>