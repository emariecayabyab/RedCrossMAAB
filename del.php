<?php
    require 'fragments/classes.php';
?>

<head><script src="jquery.js"></script>
<script>
function deleteStudent(IDNumber) {
    $.post("delete.php" , {sid:IDNumber} , function(data){
        $("#" + IDNumber).fadeOut('slow' , function(){$(this).remove();if(data)alert(data);});
    }); 
        
    }
    </script>
</head>
<?php
require 'fragments/db.php';
    echo '<table>';
    echo '<tr><th>OR NUMBER</th>
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
                        <th>EXPIRATION DATE</th></tr>';
    $result = $db->query("SELECT orNumber,IDNumber,lastName,firstName,middleName,address,contactNumber, birthday, age, gender, status, validDate, expiryDate FROM maablist WHERE validDate = CURDATE() ORDER BY validDate DESC");
    while($row = $result->fetch_assoc())
        echo '<tr id="' . $row['IDNumber'] . '">
             <td>' . $row["orNumber"] . '</td>
             <td> '. $row['IDNumber'] . '</td>' . 
             '<td>' . $row["lastName"] . '</td>' . '<td>' . $row["firstName"] . '</td>' .'<td>' . $row["middleName"] . '</td>' . '<td>' . $row["address"] . '</td>' . '<td>' . $row["contactNumber"] . '</td>' . '<td>' . $row["birthday"] . '</td>' . '<td>' . $row["age"] . '</td>' . '<td>' . $row["gender"] . '</td>' . '<td>' . $row["status"] . '</td>' .'<td>' . $row["validDate"] . '</td>' . '<td>' . $row["expiryDate"] . '</td>' .
             '<td ><a class="deleteLink" onclick="deleteStudent('.$row['IDNumber'].')"><button type="button" class="close">&times;</button></a></td>' .
             '</tr>';
 
    echo '</table>';
 ?>