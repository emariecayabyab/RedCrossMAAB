<?php
    require 'fragments/classes.php';
?>
<!DOCTYPE html>
<html lang="en">


                            <style>

                                body {font-family: Arial, Helvetica, sans-serif;}
                                * {box-sizing: border-box}
                                /* Full-width input fields */
                                input[type=text], input[type=password] {
                                    width: 100%;
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
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
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
    <link href="../viewsControl/css/colors/default.css" id="theme" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Philippine Red Cross Member List</h4> </div>
                    <div class="pull-right">
                        <input id="myInput" type="text" placeholder="Search..">
                    </div>
                </div>
<body>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">



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

<?php
    require 'fragments/detclasses.php';
?>

<div id="All" class="tabcontent">
  <h3 class="box-title">All</h3>
        <div class="table-responsive">
<table class="table">
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
        </div>
    </div>
<div id="Classic" class="tabcontent">
  <h3 class="box-title">CLASSIC</h3>
        <div class="table-responsive">
            <table class="table">
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
        </div>
    </div>

<div id="Bronze" class="tabcontent">
    <h3 class="box-title">BRONZE</h3>
  <div class="table-responsive">
<table class="table">
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
        </div> 
    </div>

<div id="Silver" class="tabcontent">
    <h3 class="box-title">SILVER</h3>
  <div class="table-responsive">
    <table class="table">
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
                    require 'model/silver.php';
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

                          </div>
</div>

<div id="Gold" class="tabcontent">
    <h3 class="box-title">Gold</h3>
  <div class="table-responsive">
    <table class="table">
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
                    require 'model/gold.php';
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
    </div>

</div>

<div id="Platinum" class="tabcontent">
    <h3 class="box-title">Platinum</h3>
  <div class="table-responsive">
    <table class="table">
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
                    require 'model/platinum.php';
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
                          </div>
</div>

<div id="Senior" class="tabcontent">
    <h3 class="box-title">Senior</h3>
  <div class="table-responsive">
    <table class="table">
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
                    require 'model/senior.php';
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
    </div>

</div>

<div id="Senior Plus" class="tabcontent">
    <h3 class="box-title">Senior Plus</h3>
  <div class="table-responsive">
    <table class="table">
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
                    require 'model/seniorplus.php';
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
    </div>
</div>

<script>
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

</body>

</html>
