<?php
    require 'fragments/classes.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        th{
                                    font-size: 13px;
                                    text-align: center;
                                }
                                td{
                                    font-size: 10px;
                                }
								
								div.shape{
									background-image: linear-gradient(-180deg, #393939 0%, #393939 100%);
									width:100%;
									border:1px solid #000;
									height:10px;"
								}
								
    </style>
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
                        <h4 class="page-title">Philippine Red Cross Expiring Membership List</h4> </div>
                </div>
                <!-- /row -->
                <div class="row">
				
					<div class="shape"></div>
                        <div class="white-box">
                            <h3 class="box-title">
                                <?php
                                echo "Expiring Member As of " . date('F', strtotime('+1 month')) . ":";
                                ?>

                            </h3>
                            <div class="table-responsive">
                                <table class="table" id="tblData">
                                    <thead>
                    <tr>
                        <th><center>OR NUMBER</center></th>
                        <th><center>ID NUMBER</center></th>
                        <th><center>CHAPTER</center></th>
                        <th><center>LAST NAME</center></th>
                        <th><center>FIRST NAME</center></th>
                        <th><center>MIDDLE NAME</center></th>
                        <th><center>ADDRESS</center></th>
                        <th><center>CONTACT NUMBER</center></th>
                        <th><center>REGISTRATION DATE</center></th>
                        <th><center>EXPIRATION DATE</center></th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php
                    require 'model/notif.php';
                    foreach ($members as $member) {

                    $orNum = $member->getOrNum();
                    $IDNumber = $member->getIdNum();
                    $lastName = $member->getlName();
                    $firstName = $member->getfName();
                    $middleName = $member->getmName();
                    $address = $member->getaddress();
                    $contactNumber = $member->getconNum();
                    $validDate = $member->getvalDate();
                    $expiryDate = $member->geteDate();

                    echo <<<FRAG
                    <tr>
                    <td>$orNum</td>
                    <td>$IDNumber</td>
                    <td>Baguio City</td>
                    <td>$lastName</td>
                    <td>$firstName</td>
                    <td>$middleName</td>
                    <td>$address</td>
                    <td>$contactNumber</td>
                    <td>$validDate</td>
                    <td>$expiryDate</td>
                    </tr>
FRAG;
        }
    ?>
                </tbody>
                                </table>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-3">
                        <button onclick="exportTableToExcel('tblData','nameOfFile')" type="button" class="btn btn-danger btn-block waves-effect waves-light" >Save as Excel
                        </button>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
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
                    
                    "targets": 9,
                    "searchable": false,
                }]
            });
        });
    </script>
</body>

</html>
