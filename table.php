<?php
    require 'fragments/classes.php';
?>
<!DOCTYPE html>
<html>
<head>
    
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="viewsControl/DataTables/css/dataTables.bootstrap.min.css">
</head>
<body>



    <table class="table table-hover" style="width:75%">
        <thead>
            <tr>
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
                <th>ACTION</th>
                                        
            </tr>
        </thead>
        <tbody>
                <?php
                    require 'model/memberList.php';
                    foreach ($members as $member) {

                    $orNum = $member->getOrNum();
                    $IDNumber = $member->getIdNum();
                    $lastName = $member->getlName();
                    $firstName = $member->getfName();
                    $middleName = $member->getmName();
                    $address = $member->getaddress();
                    $contactNumber = $member->getconNum();
                    $birthday = $member->getBday();
                    $age = $member->getAge();
                    $gender = $member->getGender();
                    $status = $member->getStatus();
                    $validDate = $member->getvalDate();
                    $expiryDate = $member->geteDate();
                    echo <<<FRAG
                    <tr>
                    <td>$orNum</td>
                    <td>$IDNumber</td>
                    <td>$lastName</td>
                    <td>$firstName</td>
                    <td>$middleName</td>
                    <td>$address</td>
                    <td>$contactNumber</td>
                    <td>$birthday</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$status</td>
                    <td>$validDate</td>
                    <td>$expiryDate</td>
                    <td><button type="button" class="close">&times;</button></td>
                    </tr>
FRAG;
        }
    ?>
                                </tbody>
                            </table>

  	
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script type="text/javascript" src="viewsControl/DataTables/js/jquery.dataTables.min.js"></script>
  	<script type="text/javascript" src="viewsControl/DataTables/js/dataTables.bootstrap.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function(){
  			$(".table").DataTable({
  				"ordering": true,
  				"searching": true,
  				"paging": true,
  			});
  		});
  	</script>
</body>
</html>