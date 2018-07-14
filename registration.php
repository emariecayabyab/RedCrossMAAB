<?php
    require 'fragments/classes.php';
?>
<!DOCTYPE html>
<html lang="en">

                            <style>

body {font-family: Arial, Helvetica, sans-serif;}
                                * {box-sizing: border-box}
                                /* Full-width input fields */
                                input[type=text] {
                                    width: 700px;
                                    padding: 15px;
                                    margin: 5px 0 22px 0;
                                    display: inline-block;
                                    border: none;
                                    background: #f1f1f1;
                                }

                                
                                /* Add padding to container elements */
                                .container {
                                    padding: 16px;
                                }

                                .modal {
                                display: none; /* Hidden by default */
                                position: fixed; /* Stay in place */
                                z-index: 1; /* Sit on top */
                                left: 0;
                                top: 0;
                                width: 100%; /* Full width */
                                height: 100%; /* Full height */
                                overflow-y: auto; /* Enable scroll if needed */
                                background-color: rgb(0,0,0); /* Fallback color */
                                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                            }

                                .modal-dialog{
                                    width: 800px;
                                    overflow-y: initial !important
                                }

                                .modal-body{
                                    height: 500px;
                                    overflow-y: auto;
                                }

                                /* Modal Content/Box */
                                .modal-content {
                                    background-color: #fefefe;
                                    margin: 15% auto; /* 15% from the top and centered */
                                    padding: 20px;
                                    border: 1px solid #888;
                                    width: 80%; /* Could be more or less, depending on screen size */
                                }

                                /* The Close Button */
                                .close {
                                    color: #aaa;
                                    float: right;
                                    font-size: 28px;
                                    font-weight: bold;
                                }

                                .close:hover,
                                .close:focus {
                                    color: black;
                                    text-decoration: none;
                                    cursor: pointer;
                                }
                                th{
                                    font-size: 13px;
                                    text-align: center;
                                }
                                td{
                                    font-size: 10px;
                                }
								
								div.shape{
									background-image: linear-gradient(-180deg, #393939 0%, #cc0000 100%);
									width:100%;
									border:1px solid #000;
									height:10px;"
								}
                                </style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>PRC Membership</title>
    <!-- Bootstrap Core CSS -->
    <link href="viewsControl/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="viewsControl/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="viewsControl/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="viewsControl/css/colors/default.css" id="theme" rel="stylesheet">
   <script src="../viewsControl/jQuery/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

  <!-- pagination-->

    <link rel="stylesheet" href="viewsControl/DataTables/css/dataTables.bootstrap.min.css">
</head>

<body class="fix-header">
    <?php include('header.php'); ?>
</body>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <?php include('sidebar.php'); ?>
                </ul>
            </div>
        </div>
 
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Philippine Red Cross New Membership List</h4>
					</div>
                </div>
                <!-- /row -->
                
						<div class="shape"></div> 
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-3">
                                <h3 class="box-title">
                                    <?php
                                    echo "New Member As of " . date("Y/m/d") . ":";
                                    ?>
                                </h3>
                                </div>
                                <div class="col-sm-3 pull-right">
                                    <button id="myBtn" type="button" class="btn btn-danger btn-block waves-effect waves-light" data-toggle="modal" data-target="#CNM" >Create New Member</button>
                                </div>
                            </div>
                            <div class="row">
                            <div class="table-responsive">
                                <?php
require 'model/reg.php';
    echo '<table class="table" id="tblData">';
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
              <th>REGISTRATION DATE</th>
              <th>EXPIRATION DATE</th>
              <th></th>
          </tr>';

    while($row = mysqli_fetch_array($result)){
        echo "<tr>"; 
        echo "<td>" .  $row['orNumber'] . "</td>";
        echo "<td>" .  $row['IDNumber'] . "</td>"; 
        echo "<td>" .  $row['lastName'] . "</td>";
        echo "<td>" .  $row['firstName'] . "</td>";
        echo "<td>" .  $row['middleName'] . "</td>";
        echo "<td>" .  $row['address'] . "</td>";
        echo "<td>" .  $row['contactNumber'] . "</td>";
        echo "<td>" .  $row['birthday'] . "</td>";
        echo "<td>" .  $row['age'] . "</td>";
        echo "<td>" .  $row['gender'] . "</td>";
        echo "<td>" .  $row['validDate'] . "</td>";
        echo "<td>" .  $row['expiryDate'] . "</td>";
        echo "<td><a href=delete.php?id=".$row['IDNumber']."><button type='button' class='close'>&times;</button></a></td>";
        echo "</tr>";
            }
 
    echo '</table>';
 ?>

                        </div>
						</div>

                <div class="row">
                    <div class="col-sm-3 pull-right">
                        <button onclick="exportTableToExcel('tblData','<?php
						echo "registration list as of " . date("Y/m/d");?>')" type="button" class="btn btn-danger btn-block waves-effect waves-light" >Save as Excel
                        </button>
                    </div>
                </div>

<div class="modal" id="CNM">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <span class="close">&times;</span>
              <h4 class="modal-title">Create New Member</h4>
              <hr/>


                        

                        <div class="modal-body">
                            <form name="addmem" action="formMod.php" method="post" onsubmit="return validateForm()">
                            <div class ="row">
                                <div class = "col-sm-6">
                                     <label>Choose the type of membership:</label>
                                </div>
                                <div class = "col-sm-4">
                                    <select name="type">
                                        <option value="Classic">Classic</option>
                                        <option value="Bronze">Premier Bronze</option>
                                        <option value="Silver">Premier Silver</option>
                                        <option value="Gold">Premier Gold</option>
                                        <option value="Platinum"> Premier Platinum </option>
                                        <option value="Senior">Senior</option>
                                        <option value="Senior Plus">Senior Plus</option>
                                    </select>
                                </div>
                            </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="orNum">OR Number</label>   
            </div>
            <div class="col-sm-8">
                <input class="form-control" autocomplete="false" type = "text" id="orNum" name="orNum">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
               <label for="idNum">ID Number</label>   
            </div>
            <div class="col-sm-8">
                <input class="form-control" autocomplete="false" type = "text" id="idNum" name="idNum">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="fname">Member Name</label>   
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <input class="form-control" autocomplete="false" type = "text" id="fname" name="fname" placeholder="First Name...">
            </div>
            <div class="col-sm-4">
                <input class="form-control" autocomplete="false" type = "text" id="midname" name="midname" placeholder="Middle Name..."></div>
            <div class="col-sm-4">
                <input class="form-control" autocomplete="false" type = "text" id="lname" name="lname" placeholder="Last Name..."></div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="add">Address</label>   
            </div>
            <div class="col-sm-8">
                <input class="form-control" autocomplete="false" type = "text" id="addr" name="addr">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="contact">Contact Number</label>   
            </div>
            <div class="col-sm-8">
                <input class="form-control" autocomplete="false" type = "text" id="contact" name="contact">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="bday">Birthday</label>   
            </div>
            <div class="col-sm-3">
                <input class="form-control" autocomplete="false" type = "text" id="byear" name="byear" label="year" placeholder="Year">   
            </div>
            <div class="col-sm-3">
                <select name="bmonth">
                    <option disabled selected value="Month">Month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05"> May </option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="col-sm-2">
                <select name="bdate">
                    <option disabled selected value="Day">Day</option>
                    <option value="01">1</option>
                    <option value="02">2</option>
                    <option value="03">3</option>
                    <option value="04">4</option>
                    <option value="05">5</option>
                    <option value="06">6</option>
                    <option value="07">7</option>
                    <option value="08">8</option>
                    <option value="09">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class ="col-sm-4">
                <label for="age">Age</label>
            </div>
            <div class ="col-sm-3">
                <input class="form-control" autocomplete="false" type = "text" id="age" name="age">
            </div>
        </div>
        <div class="row">
            <div class ="col-sm-4">
                 <label for="Sex">Sex</label>
            </div>
            <div class ="col-sm-3">
                <select name="sex">
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class ="col-sm-4">
                <label for="vdate">Valid Date</label>
            </div>
            <div class ="col-sm-6">
                <input class="form-control" autocomplete="false" type = "text" id="vdate" name="vdate" value="<?php echo date('Y-m-d');?>">
            </div>
        </div>
        <div class="row">
            <div class ="col-sm-4">
                <label for="edate">Expiration Date</label>
            </div>
            <div class ="col-sm-6">
                <input class="form-control" autocomplete="false" type = "text" id="vdate" name="edate" value="<?php echo date('Y-m-d', strtotime('+1 year'));?>">
            </div>
        </div>
        <div class="modal-footer">
            <button id="addmember" type="submit" class="btn btn-danger">Add</button>
        </div>
    </div>
    </form>
        </div>
    </div>
    </div>


            <!-- /.container-fluid -->
            <footer>
                <?php include('footer.php'); ?>
            </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script type="text/javascript">
        function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
    </script>
    <style>
    #exportButton {
        border-radius: 0;
    }
</style>
<script>
function validateForm() {
    var orNumber = document.forms["addmem"]["orNum"].value;
    var IDNumber  = document.forms["addmem"]["idNum"].value;
    var lastName  = document.forms["addmem"]["lname"].value;
    var firstName  = document.forms["addmem"]["fname"].value;
    var middleName  = document.forms["addmem"]["midname"].value;
    var byr  = document.forms["addmem"]["byear"].value;
    var bmo  = document.forms["addmem"]["bmonth"].value;
    var bday = document.forms["addmem"]["bdate"].value;
    var age = document.forms["addmem"]["age"].value;

    if (orNumber == "") {
        alert("OR Number must be filled out");
        return false;
    }
    if (IDNumber == "") {
        alert("ID Number must be filled out");
        return false;
    }
    if (lastName == "") {
        alert("Last Name must be filled out");
        return false;
    }
    if (firstName == "") {
        alert("First Name must be filled out");
        return false;
    }
    if (middleName == "") {
        alert("Middle Name must be filled out");
        return false;
    }
    if (byr == "") {
        alert("Birth Year must be filled out");
        return false;
    }
    if (bmo == "Month") {
        alert("Please choose BIRTH MONTH.");
        return false;
    }
    if (bday == "Day") {
        alert("Please choose BIRTH DAY.");
        return false;
    }
    if (age< 0) {
        alert("Please use valid Age number only");
        return false;
    }
}
</script>

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
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "columnDefs": [{
                    
                    "targets": 8,
                    "searchable": false,
                }]
            });
        });
    </script>
    <script>
// Get the modal
var modal = document.getElementById('CNM');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>

</html>
