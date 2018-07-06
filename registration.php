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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                        <h4 class="page-title">Philippine Red Cross New Member List</h4> </div>
                    

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
            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class ="row">
                                    <div class = "col-sm-4">
                                        <label>Choose the type of membership/insurance:</label>
                                    </div>
                                    <div class = "col-sm-8">
                                        <form action="/action_page.php">
                                            <select name="insurance type">
                                                <option value="Classic">Classic</option>
                                                <option value="Bronze">Bronze</option>
                                                <option value="Silver">Silver</option>
                                                <option value="Gold">Gold</option>
                                                <option value="Platinum"> Platinum </option>
                                                <option value="Senior">Senior</option>
                                                <option value="Senior Plus">Senior Plus</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="fname">First Name</label>   
                                    </div>
                                    <div class="col-sm-8">
                                        <form>
                                            <input autocomplete="false" type = "text" id="fname" name="fname">
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="midname">Middle Name</label>   
                                    </div>
                                    <div class="col-sm-8">
                                        <form>
                                            <input autocomplete="false" type = "text" id="midname" name="midname">
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="lname">Last Name</label>   
                                    </div>
                                    <div class="col-sm-8">
                                        <form>
                                            <input autocomplete="false" type = "text" id="lname" name="lname">
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="add">Address</label>   
                                    </div>
                                    <div class="col-sm-8">
                                        <form>
                                            <input autocomplete="false" type = "text" id="add" name="add">
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="contact">Contact Number</label>   
                                    </div>
                                    <div class="col-sm-8">
                                        <form>
                                            <input autocomplete="false" type = "text" id="contact" name="contact">
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="mail">Email Add</label>   
                                    </div>
                                    <div class="col-sm-8">
                                        <form>
                                            <input autocomplete="false" type = "text" id="mail" name="mail">
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="fname">Birthday</label>   
                                    </div>
                                    <div class="col-sm-3">
                                        <form>
                                            <input autocomplete="false" type = "text" id="bday" name="bday" label="year">
                                        </form>
                                    </div>
                                    <div class="col-sm-3">
                                        <form action="/action_page.php">
                                            <select name="month">
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May"> May </option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="col-sm-2">
                                        <select name="date">
                                            <option value="one">1</option>
                                            <option value="two">2</option>
                                            <option value="three">3</option>
                                            <option value="four">4</option>
                                            <option value="five">5</option>
                                            <option value="six">6</option>
                                            <option value="seven">7</option>
                                            <option value="eight">8</option>
                                            <option value="nine">9</option>
                                            <option value="ten">10</option>
                                            <option value="eleven">11</option>
                                            <option value="twelve">12</option>
                                            <option value="thirteen">13</option>
                                            <option value="fourteen">14</option>
                                            <option value="fifteen">15</option>
                                            <option value="sixteen">16</option>
                                            <option value="seventeen">17</option>
                                            <option value="eighteen">18</option>
                                            <option value="nineteen">19</option>
                                            <option value="twenty">20</option>
                                            <option value="twentytwo">20</option>
                                            <option value="twentythree">23</option>
                                            <option value="twentyfour">24</option>
                                            <option value="twentyfive">25</option>
                                            <option value="twentysix">26</option>
                                            <option value="twentyseven">27</option>
                                            <option value="twentyeight">28</option>
                                            <option value="twentynine">29</option>
                                            <option value="thirty">30</option>
                                            <option value="thirtyone">31</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class ="col-sm-4">
                                        <label for="age">Age</label>
                                    </div>
                                    <div class ="col-sm-3">
                                        <form>
                                            <input autocomplete="false" type = "text" id="age" name="age">
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class ="col-sm-4">
                                        <label for="Sex">Sex</label>
                                    </div>
                                    <div class ="col-sm-3">
                                        <form action="/action_page.php">
                                            <select name="Sex">
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class ="col-sm-4">
                                        <label for="Sex">Civil Status</label>
                                    </div>
                                    <div class ="col-sm-3">
                                        <form action="/action_page.php">
                                            <select name="Sex">
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widowed">Widowed</option>
                                                <option value="Seperated">Seperated</option>
                                                <option value="Divorced">Divorced</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class ="col-sm-4">
                                        <label for="vdate">Valid Date</label>
                                    </div>
                                    <div class ="col-sm-6">
                                        <form>
                                            <input autocomplete="false" type = "text" id="vdate" name="vdate">
                                        </form>
                                    </div>
                                </div>
                                <br>

                            </div>
            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-danger">Add</button>
                            </div>
            
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
                        <button type="button" class="btn btn-danger btn-block waves-effect waves-light" >Save as PDF
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
</body>

</html>
