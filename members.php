<?php
    require 'fragments/classes.php';
?>
<!DOCTYPE html>
<html lang="en">

                            
                            <style>
                            table {
                                 border: 1px solid black;
                            }
div.container {
        width: 80%;
    }
        th{
                                    font-size: 13px;
                                    text-align: center;
                                }
                                td{
                                    font-size: 8px;
                                    color: black;
                                    font-weight: bold;
                                     border: 1px solid black;
                                }

                                th {
                                    font-size: 7.5px;
                                    color: black;
                                    font-weight: bold;
                                     border: 1px solid black;
                                }


/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px
    border: 1px solid #ccc;
    border-top: none;
}

								div.shape{
									background-image: linear-gradient(-180deg, #393939 0%, #393939 100%);
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
   <!-- Script for excel -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script scr="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
   <!-- End Script for excel -->
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
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-8 col-sm-6 ">
                        <h4 class="page-title">Philippine Red Cross Membership List</h4>
                    </div>
                    
                </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
		<div class="shape"></div>
            <div class="white-box">
        <div class="row">
            

        </div>


<div class="tab">
  <button class="tablinks" onclick="openMembership(event, 'All')">All</button>
  <button class="tablinks" onclick="openMembership(event, 'Classic')">Classic</button>
  <button class="tablinks" onclick="openMembership(event, 'Bronze')">Bronze</button>
  <button class="tablinks" onclick="openMembership(event, 'Silver')">Silver</button>
  <button class="tablinks" onclick="openMembership(event, 'Gold')">Gold</button>
  <button class="tablinks" onclick="openMembership(event, 'Platinum')">Platinum</button>
  <button class="tablinks" onclick="openMembership(event, 'Senior')">Senior</button>
  <button class="tablinks" onclick="openMembership(event, 'Senior Plus')">Senior Plus</button>
</div>
<br/>
<div id="All" class="tabcontent">
        <div class="table-responsive">
            <table id="all" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>OR NUMBER</th>
                        <th>ID NUMBER</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>ADDRESS</th>
                        <th>ORGANIZATION</th>
                        <th>CONTACT NUMBER</th>
                        <th>BIRTHDAY</th>
                        <th>AGE</th>
                        <th>GENDER</th>
                        <th>REGISTRATION DATE</th>
                        <th>EXPIRATION DATE</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php
                    require 'model/memberList.php';
                    foreach ($members as $member) {

                    $orNum = $member->getOrNum();
                    $IDNumber = $member->getIdNum();
                    $lastName = $member->getlName();
                    $firstName = $member->getfName();
                    $middleName = $member->getmName();
                    $address = $member->getaddress();
                    $organization = $member->getOrg();
                    $contactNumber = $member->getconNum();
                    $birthday = $member->getBday();
                    $age = $member->getAge();
                    $gender = $member->getGender();
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
                    <td>$organization</td>
                    <td>$contactNumber</td>
                    <td>$birthday</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$validDate</td>
                    <td>$expiryDate</td>
                    </tr>
FRAG;
        }
    ?>
                </tbody>
            </table>
            </div>
            </div>
 <div id="Classic" class="tabcontent">
        <div class="table-responsive">
<table id="classic" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>OR NUMBER</th>
                        <th>ID NUMBER</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>ADDRESS</th>
                        <th>ORGANIZATION</th>
                        <th>CONTACT NUMBER</th>
                        <th>BIRTHDAY</th>
                        <th>AGE</th>
                        <th>GENDER</th>
                        <th>REGISTRATION DATE</th>
                        <th>EXPIRATION DATE</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php
                    require 'model/classic.php';
                    foreach ($members as $member) {

                    $orNum = $member->getOrNum();
                    $IDNumber = $member->getIdNum();
                    $lastName = $member->getlName();
                    $firstName = $member->getfName();
                    $middleName = $member->getmName();
                    $address = $member->getaddress();
                    $organization = $member->getOrg();
                    $contactNumber = $member->getconNum();
                    $birthday = $member->getBday();
                    $age = $member->getAge();
                    $gender = $member->getGender();
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
                    <td>$organization</td>
                    <td>$contactNumber</td>
                    <td>$birthday</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$validDate</td>
                    <td>$expiryDate</td>
                    </tr>
FRAG;
        }
    ?>
                </tbody>
            </table>
            </div>
            </div>
<div id="Bronze" class="tabcontent">
  <div class="table-responsive">
<table id="bronze" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>OR NUMBER</th>
                        <th>ID NUMBER</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>ADDRESS</th>
                        <th>ORGANIZATION</th>
                        <th>CONTACT NUMBER</th>
                        <th>BIRTHDAY</th>
                        <th>AGE</th>
                        <th>GENDER</th>
                        <th>REGISTRATION DATE</th>
                        <th>EXPIRATION DATE</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php
                    require 'model/bronze.php';
                    foreach ($members as $member) {

                    $orNum = $member->getOrNum();
                    $IDNumber = $member->getIdNum();
                    $lastName = $member->getlName();
                    $firstName = $member->getfName();
                    $middleName = $member->getmName();
                    $address = $member->getaddress();
                    $organization = $member->getOrg();
                    $contactNumber = $member->getconNum();
                    $birthday = $member->getBday();
                    $age = $member->getAge();
                    $gender = $member->getGender();
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
                    <td>$organization</td>
                    <td>$contactNumber</td>
                    <td>$birthday</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$validDate</td>
                    <td>$expiryDate</td>
                    </tr>
FRAG;
        }
    ?>
                </tbody>
            </table>
        </div>
    </div>

<div id="Silver" class="tabcontent">
  <div class="table-responsive">
    <table id="silver" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>OR NUMBER</th>
                        <th>ID NUMBER</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>ADDRESS</th>
                        <th>ORGANIZATION</th>
                        <th>CONTACT NUMBER</th>
                        <th>BIRTHDAY</th>
                        <th>AGE</th>
                        <th>GENDER</th>
                        <th>REGISTRATION DATE</th>
                        <th>EXPIRATION DATE</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php
                    require 'model/silver.php';
                    foreach ($members as $member) {

                    $orNum = $member->getOrNum();
                    $IDNumber = $member->getIdNum();
                    $lastName = $member->getlName();
                    $firstName = $member->getfName();
                    $middleName = $member->getmName();
                    $address = $member->getaddress();
                    $organization = $member->getOrg();
                    $contactNumber = $member->getconNum();
                    $birthday = $member->getBday();
                    $age = $member->getAge();
                    $gender = $member->getGender();
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
                    <td>$organization</td>
                    <td>$contactNumber</td>
                    <td>$birthday</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$validDate</td>
                    <td>$expiryDate</td>
                    </tr>
FRAG;
        }
    ?>
                </tbody>
            </table>
                    </div>
                    </div>


<div id="Gold" class="tabcontent">
  <div class="table-responsive">
    <table id="gold" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>OR NUMBER</th>
                        <th>ID NUMBER</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>ADDRESS</th>
                        <th>ORGANIZATION</th>
                        <th>CONTACT NUMBER</th>
                        <th>BIRTHDAY</th>
                        <th>AGE</th>
                        <th>GENDER</th>
                        <th>REGISTRATION DATE</th>
                        <th>EXPIRATION DATE</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php
                    require 'model/gold.php';
                    foreach ($members as $member) {

                    $orNum = $member->getOrNum();
                    $IDNumber = $member->getIdNum();
                    $lastName = $member->getlName();
                    $firstName = $member->getfName();
                    $middleName = $member->getmName();
                    $address = $member->getaddress();
                    $organization = $member->getOrg();
                    $contactNumber = $member->getconNum();
                    $birthday = $member->getBday();
                    $age = $member->getAge();
                    $gender = $member->getGender();
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
                    <td>$organization</td>
                    <td>$contactNumber</td>
                    <td>$birthday</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$validDate</td>
                    <td>$expiryDate</td>
                    </tr>
FRAG;
        }
    ?>
                </tbody>
            </table>
                    </div>
                    </div>


<div id="Platinum" class="tabcontent">
  <div class="table-responsive">
    <table id="platinum" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>OR NUMBER</th>
                        <th>ID NUMBER</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>ADDRESS</th>
                        <th>ORGANIZATION</th>
                        <th>CONTACT NUMBER</th>
                        <th>BIRTHDAY</th>
                        <th>AGE</th>
                        <th>GENDER</th>
                        <th>REGISTRATION DATE</th>
                        <th>EXPIRATION DATE</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php
                    require 'model/platinum.php';
                    foreach ($members as $member) {

                    $orNum = $member->getOrNum();
                    $IDNumber = $member->getIdNum();
                    $lastName = $member->getlName();
                    $firstName = $member->getfName();
                    $middleName = $member->getmName();
                    $address = $member->getaddress();
                    $organization = $member->getOrg();
                    $contactNumber = $member->getconNum();
                    $birthday = $member->getBday();
                    $age = $member->getAge();
                    $gender = $member->getGender();
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
                    <td>$organization</td>
                    <td>$contactNumber</td>
                    <td>$birthday</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$validDate</td>
                    <td>$expiryDate</td>
                    </tr>
FRAG;
        }
    ?>
                </tbody>
            </table>
                          </div>

</div>


<div id="Senior" class="tabcontent">
  <div class="table-responsive">
    <table id="senior" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>OR NUMBER</th>
                        <th>ID NUMBER</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>ADDRESS</th>
                        <th>ORGANIZATION</th>
                        <th>CONTACT NUMBER</th>
                        <th>BIRTHDAY</th>
                        <th>AGE</th>
                        <th>GENDER</th>
                        <th>REGISTRATION DATE</th>
                        <th>EXPIRATION DATE</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php
                    require 'model/senior.php';
                    foreach ($members as $member) {

                    $orNum = $member->getOrNum();
                    $IDNumber = $member->getIdNum();
                    $lastName = $member->getlName();
                    $firstName = $member->getfName();
                    $middleName = $member->getmName();
                    $address = $member->getaddress();
                    $organization = $member->getOrg();
                    $contactNumber = $member->getconNum();
                    $birthday = $member->getBday();
                    $age = $member->getAge();
                    $gender = $member->getGender();
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
                    <td>$organization</td>
                    <td>$contactNumber</td>
                    <td>$birthday</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$validDate</td>
                    <td>$expiryDate</td>
                    </tr>
FRAG;
        }
    ?>
                </tbody>
            </table>
            </div>
                    </div>

<div id="Senior Plus" class="tabcontent">
  <div class="table-responsive">
    <table id="splus" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>OR NUMBER</th>
                        <th>ID NUMBER</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>ADDRESS</th>
                        <th>ORGANIZATION</th>
                        <th>CONTACT NUMBER</th>
                        <th>BIRTHDAY</th>
                        <th>AGE</th>
                        <th>GENDER</th>
                        <th>REGISTRATION DATE</th>
                        <th>EXPIRATION DATE</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php
                    require 'model/seniorplus.php';
                    foreach ($members as $member) {

                    $orNum = $member->getOrNum();
                    $IDNumber = $member->getIdNum();
                    $lastName = $member->getlName();
                    $firstName = $member->getfName();
                    $middleName = $member->getmName();
                    $address = $member->getaddress();
                    $organization = $member->getOrg();
                    $contactNumber = $member->getconNum();
                    $birthday = $member->getBday();
                    $age = $member->getAge();
                    $gender = $member->getGender();
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
                    <td>$organization</td>
                    <td>$contactNumber</td>
                    <td>$birthday</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$validDate</td>
                    <td>$expiryDate</td>
                    </tr>
FRAG;
        }
    ?>
                </tbody>

            </table>
            <br/>
    </div>
</div>
                    </div>
                </div>
                </div>

</script>
<script>
document.getElementsByClassName('tablinks')[0].click()
function openMembership(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
                        </div>
                    </div>
                </div>
            </div>

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
    <!--<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>-->

</body>
<script>
    $(document).ready(function() {
    $('#all').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    } );
} );
    </script>
    <script>
    $(document).ready(function() {
    $('#classic').DataTable( {
        dom: 'Bfrtip',
        buttons: [
           'excel'
        ]
    } );
} );
    </script>
    <script>
    $(document).ready(function() {
    $('#bronze').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    } );
} );
    </script>
    <script>
    $(document).ready(function() {
    $('#silver').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    } );
} );
    </script>
    <script>
    $(document).ready(function() {
    $('#gold').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    } );
} );
    </script>
    <script>
    $(document).ready(function() {
    $('#platinum').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    } );
} );
    </script>
    <script>
    $(document).ready(function() {
    $('#senior').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    } );
} );
    </script>
    <script>
    $(document).ready(function() {
    $('#splus').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    } );
} );
    </script>
</html>
