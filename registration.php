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
                                    width: 100%;
                                    height: 25px;
                                    padding: 0px;
                                    display: inline-block;
                                    border-width: 1px;
                                    border-style: solid;
                                    background: #f1f1f1;
                                }

                                
                                /* Add padding to container elements */
                                .container {
                                    padding: 16px;
                                }
                                div.CNM {
                                    width: 50px;                            
                                }
                                div.div1 {  
                                    width: 320px;
                                    padding: 10px;
                                    border: 5px solid gray;
                                    margin: 0;
                                }

                                .button {
                                    width: 50px;
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
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="viewsControl/css/animate.css" rel="stylesheet">
    <link href="viewsControl/js/bootstrap.min.css" rel="stylesheet"/>
    <!-- Custom CSS -->
    <link href="viewsControl/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="viewsControl/css/colors/default.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--K -->
<script type="text/javascript" src="viewsControl/jQuery/jquery-1.10.2.min.js"></script>
<!--K-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body class="fix-header">
    <?php include('header.php'); ?>
</body>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
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
                    <div class="col-sm-9">
                        <h4 class="page-title">Philippine Red Cross New Membership List</h4> </div>
                    

                        <div class="container" style="margin-top:35px">
        <h4>Select Number of Rows</h4>
        <div class="form-group">
            <select name="state" id="maxRows" class="form-control" style="width:150px;">
                <option value="5000">Show All</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
            </select>
        </div>
                        <!-- Modal for Create New Member -->
                        <div class="modal" id="CNM">
                            <div class="modal-dialog">
                            <div class="modal-content">
          
                            <!-- Modal Header -->
                            <div class="modal-header">
            <h4 class="modal-title">Create New Member</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <form name="addmem" action="formMod.php" method="post" onsubmit="return validateForm()">
        <div class="modal-body">
        <div class ="row">
            <div class = "col-sm-4">
                <label>Choose the type of membership/insurance:</label>
            </div>
            <div class = "col-sm-8">
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
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="orNum">OR Number</label>   
            </div>
            <div class="col-sm-8">
                <input autocomplete="false" type = "text" id="orNum" name="orNum">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
               <label for="idNum">ID Number</label>   
            </div>
            <div class="col-sm-8">
                <input autocomplete="false" type = "text" id="idNum" name="idNum">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="fname">Member Name</label>   
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <input autocomplete="false" type = "text" id="fname" name="fname" placeholder="First Name...">
            </div>
            <div class="col-sm-4">
                <input autocomplete="false" type = "text" id="midname" placeholder="Middle Name..."></div>
            <div class="col-sm-4">
                <input autocomplete="false" type = "text" id="lname" placeholder="Last Name..."></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="add">Address</label>   
            </div>
            <div class="col-sm-8">
                <input autocomplete="false" type = "text" id="addr" name="addr">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="contact">Contact Number</label>   
            </div>
            <div class="col-sm-8">
                <input autocomplete="false" type = "text" id="contact" name="contact">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="bday">Birthday</label>   
            </div>
            <div class="col-sm-3">
                <input autocomplete="false" type = "text" id="byear" name="byear" label="year" placeholder="Year">   
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
        <br>
        <div class="row">
            <div class ="col-sm-4">
                <label for="age">Age</label>
            </div>
            <div class ="col-sm-3">
                <input autocomplete="false" type = "text" id="age" name="age">
            </div>
        </div>
        <br>
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
        <br>
        <div class="row">
            <div class ="col-sm-4">
                <label for="status">Civil Status</label>
            </div>
            <div class ="col-sm-3">
                <select name="status">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Seperated">Seperated</option>
                    <option value="Divorced">Divorced</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class ="col-sm-4">
                <label for="vdate">Valid Date</label>
            </div>
            <div class ="col-sm-6">
                <input autocomplete="false" type = "text" id="vdate" name="vdate" value="<?php echo date('Y-m-d');?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class ="col-sm-4">
                <label for="edate">Expiration Date</label>
            </div>
            <div class ="col-sm-6">
                <input autocomplete="false" type = "text" id="vdate" name="edate" value="<?php echo date('Y-m-d', strtotime('+1 year'));?>">
            </div>
        </div>
        <br>
        <div class="modal-footer">
            <button id="addmember" type="submit" class="btn btn-danger">Add</button>
        </div>
    </div>
    </form>
        </div>
    </div>
</div>
      
                        <!-- End of Modal -->
                </div>
                <!-- /row -->
                <div class = "white-box" id ="div1">
                <div class="row">
                        <div class="col-sm-6">
                            <h3 class="box-title">
                                <?php
                                echo "New Member As of " . date("Y/m/d") . ":";
                                ?>
                            </h3>
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-toggle="modal" data-target="#CNM" >Create New Member</button>
                        </div>
                </div>
                            <div class="table-responsive">
                                <table class="table" id="tblData">
                                    <thead>
                                        <tr>
                                        <th onclick="sortTable(0)">OR NUMBER</th>
                                        <th onclick="sortTable(1)">ID NUMBER</th>
                                        <th onclick="sortTable(2)">LAST NAME</th>
                                        <th onclick="sortTable(3)">FIRST NAME</th>
                                        <th onclick="sortTable(4)">MIDDLE NAME</th>
                                        <th onclick="sortTable(5)">ADDRESS</th>
                                        <th onclick="sortTable(6)">CONTACT NUMBER</th>
                                        <th onclick="sortTable(7)">BIRTHDAY</th>
                                        <th onclick="sortTable(8)">AGE</th>
                                        <th onclick="sortTable(9)">GENDER</th>
                                        <th onclick="sortTable(10)">CIVIL STATUS</th>
                                        <th onclick="sortTable(11)">REGISTRATION DATE</th>
                                        <th onclick="sortTable(12)">EXPIRATION DATE</th>
                                        
                                        </tr>
                                    </thead>
                                <tbody>
                <?php
                    require 'model/reg.php';
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
                            <div class="pagination-container">
            <nav>
                <ul class="pagination"></ul>
            </nav>
        </div>
                        </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-3">
                        <button id="exportButton" type="button" class="btn btn-danger btn-block waves-effect waves-light" ><span class="fa fa-file-pdf-o">Save as PDF
                        </span>
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button onclick="exportTableToExcel('tblData','nameOfFile')" type="button" class="btn btn-danger btn-block waves-effect waves-light" >Save as Excel
                        </button>
                    </div>
                </div>

                    </div>
                </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center">2018 &copy; Saint Louis University</footer>
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
    <!-- Export as Excel -->
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
    <!-- Export as PDF -->
    <script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#tblData",
                schema: {
                    type: "table",
                    fields: {
                        ORNUMBER: { type: Number },
                        IDNUMBER: { type: Number },
                        LASTNAME: { type: String },
                        FIRSTNAME: { type: String },
                        MIDDLENAME: {type: String},
                        ADDRESS: {type: String},
                        CONTACTNUMBER: {type: Number},
                        BIRTHDAY: {type: Number},
                        AGE: {type: Number},
                        GENDER: {type: String},
                        CIVILSTATUS: {type: String},
                        REGISTRATIONDATE: {type: Number},
                        EXPIRATIONDATE: {type: Number}


                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PhilippineRedCross",
                    created: new Date()
                });

                pdf.addPage("a4", "landscape");

                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "OR NUMBER", title: "OR NUMBER", width: 70 },
                        { field: "ID NUMBER", title: "ID NUMBER", width: 70 },
                        { field: "LAST NAME", title: "LAST NAME", width: 120 }
                        { field: "FIRST NAME", title: "FIRST NAME", width: 120 }
                        { field: "MIDDLE NAME", title: "MIDDLE NAME", width: 110 }
                        { field: "LAST NAME", title: "LAST NAME", width: 110 }
                        { field: "ADDRESS", title: "ADDRESS", width: 130 }
                        { field: "CONTACT NUMBER", title: "CONTACT NUMBER", width: 80 }
                        { field: "BIRTHDAY", title: "BIRTHDAY", width: 70 }
                        { field: "AGE", title: "AGE", width: 50 }
                        { field: "GENDER", title: "GENDER", width: 50 }
                        { field: "CIVIL STATUS", title: "CIVIL STATUS", width: 70 }
                        { field: "REGISTRATION DATE", title: "REGISTRATION DATE", width: 70 }
                        { field: "EXPIRATION DATE", title: "EXPIRATION DATE", width: 70 }
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "FileName"
                });
            });
        });
    });
</script>
<style>
    #exportButton {
        border-radius: 0;
    }
</style>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("tblData");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</body></html>
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
}
</script>

<style>
    #exportButton {
        border-radius: 0;
    }
</style>
</body>

</html>
