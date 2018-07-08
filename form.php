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
<script type="text/javascript" src="viewsControl/bootstrap/js/bootstrap.min.js"></script>
<!--K-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

 <div >
        <div class="modal-header">
            <h4 class="modal-title">Create New Member</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <form action="formMod.php" method="post">
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
                <label for="fname">First Name</label>   
            </div>
            <div class="col-sm-8">
                <input autocomplete="false" type = "text" id="fname" name="fname">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="midname">Middle Name</label>   
            </div>
            <div class="col-sm-8">
                <input autocomplete="false" type = "text" id="midname" name="midname">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="lname">Last Name</label>   
            </div>
            <div class="col-sm-8">
                <input autocomplete="false" type = "text" id="lname" name="lname">
            </div>
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
            <div class="col-sm-2">
                <select name="bmonth">
                    <option disabled selected>Month</option>
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
                    <option disabled selected>Day</option>
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
            <button type="submit" class="btn btn-danger">Add</button>
        </div>
    </div>
    </form>
</div>