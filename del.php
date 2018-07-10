<?php
    require 'fragments/classes.php';
?>

<head><script src="jquery.js"></script>
</head>
<?php
require 'model/reg.php';
    echo '<table >';
    echo '<tr>
              <th>OR NUMBER</th>
              <th>ID NUMBER</th>
              <th>LAST NAME</th>
              <th>FIRST NAME</th>
              <th>MIDDLE NAME</th>
              <th>ADDRESS</th>
              <th>CONTACT NUMBER</th>
              <th>BIRTHDAY</th>
              <th>AGE</th>
              <th>GENDER</th>
              <th>CIVIL STATUS</th>
              <th>REGISTRATION DATE</th>
              <th>EXPIRATION DATE</th>
          </tr>';
    while($row = $result->fetch_assoc())
        echo '<tr id="' . $row['IDNumber'] . '">' . 
                '<td>' . $row["orNumber"] . '</td>' . 
                '<td> '. $row['IDNumber'] . '</td>' . 
                '<td>' . $row["lastName"] . '</td>' .
                '<td>' . $row["firstName"] . '</td>'.
                '<td>' . $row["middleName"] . '</td>' .
                '<td>' . $row["address"] . '</td>' .
                '<td>' . $row["contactNumber"] .'</td>' .
                '<td>' . $row["birthday"] . '</td>' .
                '<td>' . $row["age"] . '</td>' .
                '<td>' . $row["gender"] . '</td>' .
                '<td>' . $row["status"] . '</td>' .
                '<td>' . $row["validDate"] . '</td>' .
                '<td>' . $row["expiryDate"] . '</td>' .
                '<td ><a href="delete.php?id="<?php echo $row["IDNumber"];" ?>">&times;</a></td>' .
             '</tr>';
 
    echo '</table>';
 ?>